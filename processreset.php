<?php session_start();

//Collecting the data

$errorCount = 0;

if(!$_SESSION['loggedIn']){

    $token = $_POST['token'] != "" ? $_POST['token'] :  $errorCount++;
    $_SESSION['token'] = $token;
}

$email = $_POST['email'] != "" ? $_POST['email'] :  $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] :  $errorCount++;


$_SESSION['email'] = $email;

if($errorCount > 0){

    $session_error = "You have " . $errorCount . " error";
   
   if($errorCount > 1) {        
       $session_error .= "s";
   }

   $session_error .=   " in your form submission";
   $_SESSION["error"] = $session_error ;

   header("Location: reset.php");

}else{
    //TODO: do actual reset things here

    //Check that the email is registered in tokens folder
    //check if the content of the registered token (in our folder), is the same as $token

    $allUserTokens = scandir("db/tokens/"); //return @array (2 filled)
    $countAllUserTokens = count($allUserTokens);

    for ($counter = 0; $counter < $countAllUserTokens ; $counter++) {
        
        $currentTokenFile = $allUserTokens[$counter];

        if($currentTokenFile == $email . ".json"){
           //now check if the token in the currentTokenFile is the same as $token
           $tokenContent = file_get_contents("db/tokens/".$currentTokenFile);

           $tokenObject = json_decode($tokenContent);
           $tokenFromDB = $tokenObject->token;

           //TODO: Make this better, fix the temporary fix

           if($_SESSION['loggedIn']){
               $checkToken = true;
            //    echo "Got here position 1";
           }else{
                $checkToken = $tokenFromDB == $token;
            //    echo "Got here position 2";

           }
        //    die();

           if($checkToken){
           
                $allUsers = scandir("db/users/");
                $countAllUsers = count($allUsers);

                for ($counter = 0; $counter < $countAllUsers ; $counter++) {
        
                    $currentUser = $allUsers[$counter];
            
                    if($currentUser == $email . ".json"){
                    //check the user password.
                        $userString = file_get_contents("db/users/".$currentUser);
                        $userObject = json_decode($userString);

                        $userObject->password = password_hash($password, PASSWORD_DEFAULT);
            
                        unlink("db/users/".$currentUser); //file delete, user data delete

                        file_put_contents("db/users/". $email . ".json", json_encode($userObject));

                        $_SESSION["message"] = "Password Reset Successful, you can now login ";

                        /**
                         * INFORM USER OF PASSWORD RESET
                         */
                        $subject = "Password Reset Successful";
                        $message = "Your account on snh has just been updated, your password has changed. if you did not initiate the password change, please visit snh.org and reset your password immediatly";
                        $headers = "From: no-reply@snh.org" . "\r\n" .
                        "CC: seyi@snh.org";
                        
                        $try = mail($email,$subject,$message,$headers);
                        /**
                         * Inform user of password reset ends
                         */  

                        header("Location: login.php");
                        die();
                    
                    }
                }
            
           }
            
        }
        
    }

    $_SESSION["error"] = "Password Reset Failed, token/email invalid or expired";
    header("Location: login.php");
}
