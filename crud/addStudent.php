<?php
require_once("./header.php");
if (isset($_POST['adstd'])) {
    $sname = $_POST['sname'];
    if (empty($sname)) {
        echo "Student Name is required";
    } else {
        $crrSname = $sname;
    }

    if(isset($crrSname)){
        $insert = $conn->query("INSERT INTO students (`name`) VALUES ('$sname')");
            if (!$insert) {
                echo "Something went wrong";
            } else {
                $successMessage = "Student Added Successfully";
                echo "<script>setTimeout(()=>location.href='./',2000)</script>";
            }
    }
}
?>
<h2>Add Student</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname">
    <input type="submit" value="Add Student" name="adstd">
</form>
<div style="color: green">
    <?= $successMessage ?? null ?>
</div>
<?php
require_once("./footer.php");
?>