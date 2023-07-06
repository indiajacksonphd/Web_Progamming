<?php include("header.html"); ?>
<div>
    <form action="login-submit.php" method="get">
        <fieldset>
            <legend> Returning User: </legend>
            <strong class="column"> Name: </strong>
            <input type="text" name="name" maxlength="20"><br><br>
            <input type="submit" value="Let's Play">
        </fieldset>
    </form>
</div>
<div class="register-link">
    <a href="register.php">Click here to register</a>
  </div>

<?php include("footer.html"); ?>
