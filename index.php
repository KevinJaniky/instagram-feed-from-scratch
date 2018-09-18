<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Instagram feed</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php
    require_once 'config.php';
    require_once 'vendor/autoload.php';
    require_once 'class/Insta.php';
    $insta = new Insta();
  ?>

  <main role="main" class="container">
    <header>
      <h1 class="mt-5">Instagram Feed with PHP</h1>
      <p class="lead">Get your instagram feed with php from scratch.</p>
      <p>Create by <a href="../sticky-footer-navbar">Kevin JANIKY</a> </p>
    </header>
    <section>
      <h2>User information</h2>
      <img class="img-thumbnail" src="<?php $insta->getProfilPicture() ?>">
      <br>
      <br>
      <br>
      <ul class="list-group">
        <li class="list-group-item">Username : <?php $insta->getUserName() ?></li>
        <li class="list-group-item">Full Name : <?php $insta->getFullName() ?></li>
        <li class="list-group-item">Description  : <?php $insta->getDescription() ?></li>
        <li class="list-group-item">Followers : <?php $insta->getFollowers() ?> </li>
        <li class="list-group-item">Following : <?php $insta->getFollowing() ?> </li>
     </ul>
  </section>

    <hr>
    <div class='row'>
      <?php
       $data =  $insta->displayFeed('desc');
      ?>
    </div>
  </main>
</body>

</html>