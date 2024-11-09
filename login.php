<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login kopi dalu</title>
    <link rel="icon" href="img/logo.png" type="img/png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>kopi dalu</h1>

   
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<div class='alert'>Username dan Password Salah !</div>";
    }
  }
  ?>

  <div class="panel_login">
    <p class="tulisan_atas">Silahkan Masuk</p>

    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username" required="required">

      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password" required="required">

      <input type="submit" class="tombol_login" value="LOGIN">

      <br />
      <br />

    </form>

  </div>


</body>

</html>