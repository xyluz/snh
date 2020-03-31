<?php 

//TODO: Implement token functions

function generate_token(){
    $token = ""; 

    $alphabets = ['a','b','c','d','e','f','g','h','A','B','C','D','E','F','G','H'];

    for($i = 0 ; $i < 26 ; $i++){

      $index = mt_rand(0,count($alphabets)-1);
      $token .= $alphabets[$index];
    }

    return $token;
}

function find_token($email = ''){
    
    $allUserTokens = scandir("db/tokens/"); //return @array (2 filled)
    $countAllUserTokens = count($allUserTokens);

    for ($counter = 0; $counter < $countAllUserTokens ; $counter++) {
        
        $currentTokenFile = $allUserTokens[$counter];

        if($currentTokenFile == $email . ".json"){
           
           $tokenContent = file_get_contents("db/tokens/".$currentTokenFile);

           $tokenObject = json_decode($tokenContent);
        //    $tokenFromDB = $tokenObject->token;
        return $tokenObject;

        }
    }

    return false;
}

