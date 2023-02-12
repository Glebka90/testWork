<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./__style/_normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./__media/_media.css">
  <title> Строитель</title>
</head>

<body class="body">
  <!-- HEADER -->
  <dialog class="dialog ">
    <p class="dialog-text">Мы вам перезвоним в ближайшее время на указанный номер телефона.</p>
    <form class="dialog-form">
      <input class="dialog-input" type="text" placeholder="Введите имя">
      <input class="dialog-input" type="tel" placeholder="Введите телефон" id="phone" name="phone"
        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      <button class="close-dialog">Отправить запрос</button>
    </form>
  </dialog>
  <?
  include './__components/header.php';
  ?>

  <!-- HEADER -->
  <!-- MENU -->
  <?
  include './__components/menu.php';
  ?>
  <!-- MENU -->
  
  <!-- MAIN -->
  <?
  include './__components/main.php';
  ?>
  <!-- MAIN -->
  <!-- INFO -->
  <?
  include './__components/info.php';
  ?>
  <!-- INFO -->
  <!-- MAP -->
  <?
  include './__components/map.php';
  ?>
  <script src="https://api-maps.yandex.ru/3.0/?apikey=<ваш API-ключ>&lang=ru_RU"></script>

  <!-- MAP -->
  <!-- SLIDER -->
  <?
  include './__components/slider.php';
  ?>
  <!-- SLIDER -->
  <!-- FOOTER -->
  <?
  include './__components/footer.php';
  ?>
  <!-- FOOTER -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>

</html>