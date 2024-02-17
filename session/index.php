<?php
    session_start();
    if(!isset($_SESSION['uname'])){
        header('Location: login.php');
    }
    else{
        echo "Welcome ".$_SESSION['uname'];
    }
?>

<a href="./logout.php">
    <button>Log out</button>
</a>