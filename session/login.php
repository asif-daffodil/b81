<?php
    session_start();
    if(isset($_SESSION['uname'])){
        header('Location: index.php');
    }
    if(isset($_POST['uname'])){
        $uname = $_POST['uname'];
        $_SESSION['uname'] = $uname;
        header('Location: index.php');
    }
?>
<form action="" method="post">
    <input type="text" placeholder="User Name" name="uname">
    <input type="submit" value="Login">
</form>