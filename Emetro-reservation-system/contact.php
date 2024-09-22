<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
</head>
<?php 
    session_start();
    if(isset($_SESSION['username']))
        include "template/header-name.php";
    else
        include "template/header.php";
?>



<?php include "template/footer.php" ?>

</html>