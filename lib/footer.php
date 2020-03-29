
<!-- MENU -->
    <p> 
        <a href="index.php">Home</a> |
        <?php if(!isset($_SESSION['loggedIn'])){ ?>
        
        <a href="login.php">Login</a> |
        <a href="register.php">Register</a> |

        <?php }else{ ?>
            
        <a href="logout.php">Logout</a>

        <?php } ?>
        <a href="forgot.php">Forgot Password</a>
    </p>
</body>


</html>