<?php  include_once('lib/header.php');  ?>
    <p>
        <?php 
            if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
                echo "<span style='color:green'>" . $_SESSION['message'] . "</span>";
                session_destroy();
            }
        ?>
    </p>
    Welcome to SNG: Hospital for the ignorant <br /><hr />
    <p>This is a specialist hospital to cure ignorance!</p>
    <p>Come as you are, it is completely free!</p>


<?php include_once('lib/footer.php'); ?>

