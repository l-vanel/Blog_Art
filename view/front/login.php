<?php $title = "login"; ?>

<?php ob_start(); ?>


<?php $content = ob_get_clean(); ?>

<?php /*require('template.php');*/ ?>
















<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>login</title>
</head>
<body>
  <?php
  //echo $reslt;
  ?>
  <form action="../../index.php?action=login" method="POST">
    <p>
      <label>Username</label>
      <input id="username" name="username" type="text" required="required" /><br>
    </p>
    <p>
      <label>Password</label>
      <input id="password" name="password" type="password" required="required" />
    </p>
    <br />
    <p>
      <button type="submit" name="submit"><span>Login</span></button>
      <button type="reset"><span>Cancel</span></button>
    </p>
  </form>
</body>
</html>
