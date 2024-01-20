<?php
    // all the countries in a single line array
    $countries = ["Bangladesh", "India", "Pakistan", "Nepal", "Bhutan", "Sri Lanka", "Maldives", "Afghanistan", "Myanmar", "China", "Others"];
    if(isset($_POST['add'])){
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $gender = $_POST['gender'] ?? null;
        $skills = $_POST['skills'] ?? null;
        $country = $_POST['country'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if(empty($sname)){
            $errName = "<span style='color: red'>Student name can not be empty</span>";
        }elseif(!preg_match("/^[a-zA-Z. ]*$/", $sname)){
            $errName = "<span style='color: red'>Only letters and white space allowed</span>";
        }else{
            $crrName = $sname;
        }

        if (empty($semail)) {
            $errEmail = "<span style='color: red'>Student email can not be empty</span>";
        } elseif (!filter_var($semail, FILTER_VALIDATE_EMAIL)) {
            $errEmail = "<span style='color: red'>Invalid email format</span>";
        } else {
            $crrEmail = $semail;
        }

        if (empty($gender)) {
            $errGender = "<span style='color: red'>Please select your gender</span>";
        }else{
            $crrGender = $gender;
        }

        if (empty($skills)) {
            $errSkills = "<span style='color: red'>Please select your skills</span>";
        }else{
            $crrSkills = $skills;
        }

        if (empty($country)) {
            $errCountry = "<span style='color: red'>Please select your country</span>";
        }else{
            $crrCountry = $country;
        }

        if (empty($pass)) {
            $errPass = "<span style='color: red'>Password can not be empty</span>";
        }elseif(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $pass)){
            $errPass = "<span style='color: red'>Provide a strong password</span>";
        }else{
            $crrPass = $pass;
        }

        if(!empty($pass) && !empty($cpass)){
            if($pass != $cpass){
                $errPass = "<span style='color: red'>Password and confirm password must be same</span>";
            }
        }
    }
?>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname" value="<?= $crrName ?? null ?>">
    <?= $errName ?? null ?>
    <br><br>
    <input type="text" placeholder="Student Email" name="semail" value="<?= $crrEmail ?? null ?>">
    <?= $errEmail ?? null ?>
    <br><br>
    Student Gender :
    <input type="radio" value="Male" name="gender" <?= isset($crrGender) && $crrGender == "Male" ? "checked":null ?>>Male
    <input type="radio" value="Female" name="gender" <?= isset($crrGender) && $crrGender == "Female" ? "checked":null ?>>Female
    <?= $errGender ?? null; ?>
    <br><br>
    Student Skills:
    <input type="checkbox" value="PHP" name="skills[]" <?= isset($crrSkills) && in_array("PHP", $crrSkills) ? "checked":null ?>>PHP
    <input type="checkbox" value="Java" name="skills[]" <?= isset($crrSkills) && in_array("Java", $crrSkills) ? "checked":null ?>>Java
    <input type="checkbox" value="Python" name="skills[]" <?= isset($crrSkills) && in_array("Python", $crrSkills) ? "checked":null ?>>Python
    <input type="checkbox" value="C++" name="skills[]" <?= isset($crrSkills) && in_array("C++", $crrSkills) ? "checked":null ?>>C++
    <?= $errSkills ?? null; ?>
    <br><br>
    <select name="country" id="">
        <option value="">Select Country</option>
        <?php
            foreach ($countries as $country) {
                if(isset($crrCountry) && $crrCountry == $country){
                    echo "<option value='$country' selected>$country</option>";
                    continue;
                }
                echo "<option value='$country'>$country</option>";
            }
        ?>
    </select>
    <?= $errCountry ?? null; ?>
    <br><br>
    <input type="password" name="pass" placeholder="Student Password">
    <?= $errPass ?? null; ?>
    <br><br>
    <input type="password" name="cpass" placeholder="Confirm Password">
    <?= $errPass ?? null; ?>
    <br><br>
    <input type="submit" value="Add Student" name="add">
</form>

<div style="color: green">
<?php
    if (isset($crrName) && isset($crrEmail) && isset($crrGender) && isset($crrSkills) && isset($crrCountry) && isset($crrPass) && isset($cpass)) {
        echo $crrName ?? null;
        echo "<br>";
        echo $crrEmail ?? null;
        echo "<br>";
        echo $crrGender ?? null;
        echo "<br>";
        foreach ($crrSkills as $k => $skill) {
            if($k == count($crrSkills)-1){
                echo $skill;
                break;
            }
            echo $skill.", ";
        };
        echo "<br>";
        echo $crrCountry ?? null;
        $crrName = $crrEmail = $crrGender = $crrSkills = $crrCountry = $crrPass = $cpass = null;
    }
?>
</div>