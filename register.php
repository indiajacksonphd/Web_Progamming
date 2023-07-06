<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="register_login.css?v=<?php echo time(); ?>">
</head>
<body>
<div class = "register_login">
    <img src = "Jeopardy!_logo.png" alt="">
    <div class = "group_names">
India Jackson, Kikiyin Ajibade, Natania Tedla and Asma Syeda
</div>
    <form action="registration-submit.php" method="post">
        <fieldset>
            <legend> Register: </legend>
            <strong class="column"> Name: </strong>
            <input type="text" name="name" maxlength="20"><br><br>
            <input type="submit" value="Create">
        </fieldset>
    </form>
</div>
</body>
</html>
