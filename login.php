<?php include_once('lib/header.php');
      require_once('functions/alert.php');

if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}
// include_once('lib/header.php'); 

?>
  
<h3>Login</h3>
    <p>
     <?php  print_alert(); ?>
    </p>
    <form method="POST" action="processlogin.php">
   
               
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
            <label>Password</label><br />
            <input type="password" name="password" placeholder="Password"  />
        </p>       
       
       
        <p>
            <button type="submit">Login</button>
        </p>
    </form>
<?php include_once('lib/footer.php'); ?>