<?php include("header.html"); ?>
<div>
<form action="registration-submit.php" method="post">
        <fieldset>
            <legend> Register: </legend>
            <strong class="column"> Name: </strong>
            <input type="text" name="name" maxlength="20"><br><br>
            <input type="submit" value="Create">
        </fieldset>
    </form>
</div>
<?php include("footer.html"); ?>