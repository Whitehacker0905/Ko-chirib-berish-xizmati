<?php
include "baza_ulash.php";

if (isset($_POST['Royhatdan_otish'])) {
    $Ismi = $_POST['Ismi'];
    $Familiyasi = $_POST['Familiyasi'];
    $email = $_POST['email'];
    $parol = $_POST['parol'];
    $Jinsi = $_POST['Jinsi'];
    $Viloyat = $_POST['Viloyat'];
    $Shahar = $_POST['Shahar'];

    $sql = "INSERT INTO `foydalanuvchilar`(`id`, `Ismi`, `Familiyasi`, `email`, `parol`, `Jinsi`, `Viloyat`, `Shahar`) VALUES ('NULL','$Ismi','$Familiyasi','$email','$parol','$Jinsi','$Viloyat','$Shahar')";
    $result = mysqli_query($ulanish, $sql);

    if ($result) {
        header("Location: Kochirib berish.html");
        exit;
    } else {
        echo "Xato: " . mysqli_error($ulanish);
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xakerlar uyushmasi Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">

    <link rel="manifest" href="/site.webmanifest">
    <script src="login js.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="login css.css">
</head>
<body>
<center>
<form action="" method="post">
  <h2>Ko'chirib berish xizmati!</h2>
  <h1>Login</h1>
  <div>
    <label for="email">Login:</label>
    <input type="email" name="email" id="email" placeholder="email" required>
    <label for="password">Parol:</label>
    <input type="password" name="parol" id="password" placeholder="password" required>
    <label for="Ism">Ism:</label>
    <input type="text" id="Ism" value="" name="Ismi" required><br>
    <label for="Familiya">Familiya:</label>
    <input type="text" id="Familiya" value="" name="Familiyasi" required>
    <label for="Shaxar" >Shaxar:</label>
    <input type="text" id="Shaxar" name="Shahar" required>
    <label for="Vil" class="form-label">Viloyat:</label>
    <select id="Vil" name="Viloyat" required>
      <option selected disabled value="">...</option>
      <option>Xorazm</option>
      <option>Toshkent</option>
      <option>Buxoro</option>
    </select>
    <label for="Jinsi">Jinsi</label>
    <select id="Jinsi" name="Jinsi" required>
      <option selected disabled value="" >...</option>
      <option>Erkak</option>
      <option>Ayol</option>
    </select>
  </div><br><br>
  <div>
    <label for="Rozilik">
      Maxfiylik siyosatiga rozilik
    </label>
    <input type="checkbox" value="" id="Rozilik" required>
  </div>
  <div>
  <input type="submit" value="Sign in" id="button" name="Royhatdan_otish">
  </div>
</form>
<br><br>
</center>
</body>
</html>