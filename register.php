<?php
$flag = false;
if(isset($_POST['fname'])==true){
    $server = "localhost";
    $user = "root";
    $pass = "";

    $c = mysqli_connect($server, $user, $pass);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "insert into sdms.login values('$fname','$lname', '$email', '$pass');";

    
    if(($c->query($sql))==true){
        $flag=true;
    }
    else{
        echo $c->error;
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
    <form class="form-signin" action="http://localhost/S.D.M.S/register.php" method="post" style="text-align: center;">
        <h1 class="text">Register Here</h1>
  
        <input name="fname" id="fname" type="text" class="form-control top" placeholder="First Name" required autofocus><br><br>
        <input name="lname" id="lname" type="text" class="form-control middle" placeholder="Last Name" required ><br><br>
        <input name="email" id="email" type="email" class="form-control bottom" placeholder="Email address" required><br><br>
        <input name="pass" id="pass" type="text" class="form-control bottom" placeholder="Password" required><br><br>
        <button class="signup">Signup</button>
        <?php
        if($flag==true){
            echo "<p>Submittion Successfull</p>";
        }
        ?>
        <p class="tag">&copy; S.D.M.S</p>
      </form>

</body>
</html>