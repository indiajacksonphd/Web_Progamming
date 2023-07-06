<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="register_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class = "register_login">

<img src = "Jeopardy!_logo.png" alt=""><br>
<div class = "group_names">
India Jackson, Kikiyin Ajibade, Natania Tedla and Asma Syeda
</div>
    <form action="login-submit.php" method="get">
        <fieldset>
            <legend> Returning User: </legend>
            <strong class="column"> Name: </strong>
            <input type="text" name="name" maxlength="20"><br><br>
            <input type="submit" value="Let's Play">
            <br>
            <a href="register.php">Click here to register</a>
        </fieldset>
    </form>
    
    
    <!--<div class="register-link">
    
  </div>-->
</div>

</body>
</html>
