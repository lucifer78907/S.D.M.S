<?php
$r_pass=" ";
$error = false;
$flag = false;
if(isset($_POST['user'])==true){
    $server = "localhost";
    $user = "root";
    $pass = "";

    $c = mysqli_connect($server, $staff_id, $staff_pass);


    $staff_id = $_POST['staff_id'];
    $staff_id = $_POST['staff_pass'];
    
    $sql = "select * from sdms2.StaffLogin where email='$staff_id';";

    $rs = $c->query($sql);
    
    while($row=$rs->fetch_assoc()){
        $r_pass = $row['staff_pass'];
    }

    if($r_pass==$staff_pass){
        header("location:index.html");
    }

    else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.D.M.S</title>
    <link rel="icon" href="favi.ico">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@100&family=Sacramento&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="register-div">
        <label id="label-two">Staff ID:</label><br>
        <input id="label-two-f" type="text" name="yourID"><br>
        <label id="label-three">Staff Password</label><br>
        <input id="label-three-f" type="password" name="yourPassword"><br>
        <input class="Submit" type="submit">
        <?php
        if($error==true){
            echo "<p>Invalid user id or password</p>";
        }
        ?>
    </div>
</body>
</html>