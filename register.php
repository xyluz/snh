<?php include_once('lib/header.php');
if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}
// include_once('lib/header.php');

?>
<h3>Register</h3>
   <p><strong>Welcome, Please Register</strong></p>
   <p>All Fields are required</p>


    <form method="POST" action="processregister.php">
    <p>
        <?php 
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";

                // session_unset();
                session_destroy();
            }
        ?>
    </p>
        <p>
            <label>First Name</label><br />
            <input  
            <?php              
                if(isset($_SESSION['first_name'])){
                    echo "value=" . $_SESSION['first_name'];                                                             
                }                
            ?>
            type="text" name="first_name" placeholder="First Name" />
        </p>
        <p>
            <label>Last Name</label><br />
            <input
            <?php              
                if(isset($_SESSION['last_name'])){
                    echo "value=" . $_SESSION['last_name'];                                                             
                }                
            ?>
             type="text" name="last_name" placeholder="Last Name"  />
        </p>
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
            <label>Gender</label><br />
            <select name="gender" >
            <?php              
                if(isset($_SESSION['department'])){
                    echo "value=" . $_SESSION['department'];                                                             
                }                
            ?>
                <option value="">Select One</option>
                <option 
                <?php              
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                        echo "selected";                                                           
                    }                
                ?>
                >Female</option>
                <option 
                <?php              
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                        echo "selected";                                                           
                    }                
                ?>
                >Male</option>
            </select>
        </p>
       
        <p>
            <label>Designation</label><br />
            <select name="designation" >
            
                <option value="">Select One</option>
                <option 
                <?php              
                    if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical Team (MT)'){
                        echo "selected";                                                           
                    }                
                ?>
                >Medical Team (MT)</option>
                <option 
                <?php              
                    if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Patient'){
                        echo "selected";                                                           
                    }                
                ?>
                >Patient</option>
            </select>
        </p>
        <p>
            <label>Department</label><br />
            <input
            <?php              
                if(isset($_SESSION['department'])){
                    echo "value=" . $_SESSION['department'];                                                             
                }                
            ?>
             type="text" name="department" placeholder="Department"  />
           
        </p>
        <p>
            <button type="submit">Register</button>
        </p>
    </form>
<?php include_once('lib/footer.php'); ?>