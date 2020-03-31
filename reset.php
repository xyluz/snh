<?php include_once('lib/header.php'); 
    require_once('functions/alert.php');
    require_once('functions/user.php');

//TODO: Fix session error message display on login page

if(!is_user_loggedIn() && !is_token_set()){
    $_SESSION["error"] = "You are not authorized to view that page";
    header("Location: login.php");
}

?>
   
   <h3>Reset Password</h3>
   <p>Reset Password associated with your account : [email]</p> 
   <!-- TODO: Update email above as they enter it (JS) -->

   <form action="processreset.php" method="POST">
   <p>
        <?php  print_alert(); ?>
    </p>
    <?php if(!is_user_loggedIn()) { ?>
    <input
            
            <?php              
                if(is_token_set_in_session()){
                    echo "value='" . $_SESSION['token'] . "'";                                                             
                }else{
                    echo "value='" . $_GET['token'] . "'";
                }             
            ?>

           type="hidden" name="token"  />
    <?php } ?>

    <p>
        <label>Email</label><br />
        <input
            
            <?php              
                if(isset($_SESSION['email'])){
                    echo "value=" . $_SESSION['email'];                                                             
                }                
            ?>

             type="text" name="email" placeholder="Email"  />
    </p>
    <p>
        <label>Enter New Password</label><br />
        <input type="password" name="password" placeholder="Password"  />
    </p>
    <p>
        <button type="submit">Reset Password</button>
    </p>
   </form>
    
<?php include_once('lib/footer.php'); ?>