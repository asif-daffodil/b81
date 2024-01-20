<?php
    require_once("./header.php");
    $id = $_GET['id'] ?? header("location: ./");
    $select = $conn->query("SELECT * FROM students WHERE id = '$id'");
    $data =  $select->num_rows == 0 ? header("location: ./") : $select->fetch_object();

    if(isset($_POST['sname'])){
        $sname = $_POST['sname'];
        $update = $conn->query("UPDATE students SET `name` = '$sname' WHERE id = '$id'");
        if(!$update){
            echo "Something went wrong";
        }else{
            $successMessage = "Student Updated Successfully";
            echo "<script>setTimeout(()=>location.href='./',2000)</script>";
        }
    }
?>
<h2>Edit Student</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname" value="<?= $sname ?? $data->name ?? null ?>" required>
    <input type="submit" value="Edit Student">
</form>
<div style="color: green">
    <?= $successMessage ?? null ?>
</div>

<?php
    require_once("./footer.php");
?>