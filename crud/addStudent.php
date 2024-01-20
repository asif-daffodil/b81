<?php
    require_once("./header.php");
    if(isset($_POST['sname'])){
        $sname = $_POST['sname'];
        $insert = $conn->query("INSERT INTO students (`name`) VALUES ('$sname')");
        if(!$insert){
            echo "Something went wrong";
        }else{
            $successMessage = "Student Added Successfully";
            echo "<script>setTimeout(()=>location.href='./',2000)</script>";
        }
    }
?>
<h2>Add Student</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname" required>
    <input type="submit" value="Add Student">
</form>
<div style="color: green">
    <?= $successMessage ?? null ?>
</div>
<?php
    require_once("./footer.php");
?>
