<?php
include "baza_ulash.php";

if (isset($_POST['buyyurtma'])) {
    $massa= $_POST['massa'];
    $hajmi= $_POST['hajmi']; 
    $qayerdan= $_POST['qayerdan'];
    $qayerga= $_POST['qayerga'];
    $narx= $_POST['narx']; 
    $sharh= $_POST['sharh'];
    $sql = "INSERT INTO `buyurtma` (`massa`, `hajmi`, `qayerdan`, `qayerga`, `narx`, `sharh`) VALUES ('$massa', '$hajmi', '$qayerdan', '$qayerga', '$narx', '$sharh')";

    $result = mysqli_query($ulanish, $sql);

    if ($result) {
        header("Location:  Buyurtma berish.php");
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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">    
    <link rel="stylesheet" href="kochirib berish.css">
    <script src="kochirib berish js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="author" content="Sapayev Ismoil">
    <meta name="og:title" content="Ko'chirib berish hizmati" />
    <meta name="og:description" content="Mahsulotlaringizni tez va sifatli yetkazib beramiz" />
    <meta name="og:image" content="https://yandex.ru/images/search?text=dostavka+png&pos=0&rpt=simage&img_url=https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0012%2F4089%2F1472%2Ffiles%2Fshutterstock_353170508_97d70315-7ad5-4f85-8b30-d17748a068d9.png%3F4302&from=tabbar&lr=21105" />
    <meta name="og:site_name" content="Maxsulot yetkazib berish" />
    <title>Yetkazib berish xizmati</title>
</head>
<body>
  <header>
    <div class="top-slice-header">
      <div class="logo">
        <a href="Kochirib berish.html">
          <img src="img/logo1.png" alt="logo">
        </a>
      </div>
      <div>
        <h1 class="sarlavha">
          <b>ko'chirib berish</b>
        </h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="Kochirib berish.html"><b>Asosiy bo'limga qaytish</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h3>Sapayev</h3>
        <h3>Ismoil</h3>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">          
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Qidiruv</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <center>
    <h3>Buyurtma berish</h3>
  <form action="" class="Buyurtma" method="post">
    <label for="massa" >Buyurtma massasi:</label>
    <input type="number" name="massa" id="massa" placeholder="kg:" required>
    <label for="hajmi">Buyurtma hajmi:</label>
    <input type="number" name="hajmi" id="hajmi" placeholder="dm^3" required><br><br>
    <select id="from" name="qayerdan" required>
        <option selected disabled value="">Jo'natilayotgan joy:</option>
        <option>Xiva</option>
        <option>Urganch</option>
        <option>Toshkent</option>
    </select>
    <select id="to" name="qayerga" required>
        <option selected disabled value="">Yuborilayotgan joy:</option>
        <option>Xiva</option>
        <option>Urganch</option>
        <option>Toshkent</option>
    </select><br>
    
    <label for="narx">Narxi:</label>
    <p type="text" id="nn"  name="narx">0 ming sum</p>
    <label for="comment" >Sharh:</label>
    <input type="text" name="sharh" id="comment" placeholder="..." required>
    <button type="button" id="teshkirish" onclick="narxi()">teshkirish</button>
    <input type="submit" class="buyurt" value="Buyurtma qilish" name="buyyurtma" onclick="qabul()">
  </form>
  </center>
  <section class="jadval">
    <h3>Maxsulotlar tarixi</h3>
  <div>
    <table class="container">
      <thead style=" border: 3px solid rgb(13, 13, 69);">
        <tr>
          <th scope="col">#</th>
          <th scope="col">massa</th>
          <th scope="col">hajm</th>
          <th scope="col">qayerdan</th>
          <th scope="col">qayerga</th>
          <th scope="col">narx</th>
          <th scope="col">sharh</th>
          <th scope="col">To'g'irlash</th>
        </tr>
      </thead>
      <tbody style=" border: 3px solid rgb(13, 13, 69);">
        <?php
          $sqll="SELECT * FROM `buyurtma`";
          $res=mysqli_query($ulanish,$sqll);
          while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr>
          <th><?php echo $row['id']?></th>
          <th><?php echo $row['massa']?></th>
          <th><?php echo $row['hajmi']?></th>
          <th><?php echo $row['qayerdan']?></th>
          <th><?php echo $row['qayerga']?></th>
          <th><?php echo $row['narx']?></th>
          <th><?php echo $row['sharh']?></th>
          <td>
            <a href="To'g'irlash.php">update</a>
          </td>
        </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
  </div>
  </section>
  <footer id="footer">
    <div>
      <h2>bog'lanish uchun</h2>
    <p>
      <b>saytimiz:</b>
      <a href="Kochirib berish.html">
        https://www.jonatmalar-yetkazi-bberish.com
      </a>
    </p>
    <p>
      <b>Email:</b>
      sapayevismoil@gmail.com
    </p>
    </div>
  </footer>
</body>
</html>