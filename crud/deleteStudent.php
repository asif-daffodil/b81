<?php
    require_once("./header.php");
    $id = $_GET['id'] ?? header("location: ./");
    $checkId = $conn->query("SELECT * FROM students WHERE id = '$id'");
    $data = $checkId->num_rows == 0 ? header("location: ./") : $checkId->fetch_object();
    if(isset($_POST['yes'])){
        $delete = $conn->query("DELETE FROM students WHERE id = '$id'");
        if(!$delete){
            echo "Something went wrong";
        }else{
            $successMessage = "Student Deleted Successfully";
            echo "<script>setTimeout(()=>location.href='./',2000)</script>";
        }
    }
?>
<h2>
    Do you really want to delete <span style="color: red"><?= $data->name ?></span>?
    <br><br>
    <form action="" method="post">
        <input type="submit" value="Yes" name="yes">
        <a href="./">
            <button type="button">No</button>
        </a>
    </form>
    <div style="color: green">
        <?= $successMessage ?? null ?>
    </div>
</h2>

<?php
    require_once("./footer.php");
?>