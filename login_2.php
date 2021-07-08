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
    
    $sql = "select * from sdms.StaffLogin where email='$staff_id';";

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
<form class="form-signin" action="http://localhost/S.D.M.S/login_2.php" method="post" style="text-align: center;">
        <h1 class="text">Login Here</h1>
  
        <input name="user" id="user" type="email" class="form-control top" placeholder="Staff_id" required autofocus><br><br>
        <input name="pass" id="pass" type="password" class="form-control middle" placeholder="Staff_Password" required ><br><br>
        <button class="signup" type="submit">Login</button>

        <?php
        if($error==true){
            echo "<p>Invalid user id or password</p>";
        }
        ?>
        <p class="tag">&copy; S.D.M.S</p>
      </form>
</body>
</html>