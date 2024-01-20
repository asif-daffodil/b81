<?php
    require_once("./header.php");
    $select = $conn->query("SELECT * FROM students");
    if($select->num_rows > 0){
?>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>SN</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        <?php $sn = 1; while($row = $select->fetch_object()){ ?>
            <tr>
                <td><?= $sn++ ?></td>
                <td><?= $row->name ?></td>
                <td>
                    <a href="./editStudent.php?id=<?= $row->id ?>">
                        <button>Edit</button>
                    </a>
                    <a href="./deleteStudent.php?id=<?= $row->id ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php }else{ ?>
    <h2>No Students Found</h2>
<?php
}
    require_once("./footer.php");
?>
