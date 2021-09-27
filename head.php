<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>넷마블</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">

  <script src="common.js" defer></script>
  <link rel="stylesheet" href="common.css">

  <script src="<?= $pageCode ?>.js" defer></script>
  <link rel="stylesheet" href="<?= $pageCode ?>.css">
</head>

<body>
  <div class="side-bar">
    <a class="logo" href="index.ssg.php">넷마블</a>
    <ul>
      <li>
        <a href="productList.ssg.php">제품</a>
      </li>
    </ul>
  </div>

  <div class="site-wrap con-min-width">
    <main>