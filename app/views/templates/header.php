<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['view']['judul_web'] . ' - ' . $data['view']['judul_voting']; ?></title>
    <meta name="description" content="<?= $data['view']['deskripsi']; ?>">
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/style.css">
    <link rel="icon" type="image/png" href="<?= BASEURL . '/public/img/' . $data['view']['logo']; ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= BASEURL . '/public/img/' . $data['view']['logo']; ?>" sizes="16x16">
  </head>
  <body>
    <header>
      <nav class="black">
        <div class="menu-icon">
          <div class="svg-icon">
            <svg height="30px" viewBox="0 0 500 500" width="30px" xmlns="http://www.w3.org/2000/svg"><path d="m362.667969 0h-341.335938c-11.753906 0-21.332031 9.578125-21.332031 21.332031v42.667969c0 11.753906 9.578125 21.332031 21.332031 21.332031h341.335938c11.753906 0 21.332031-9.578125 21.332031-21.332031v-42.667969c0-11.753906-9.578125-21.332031-21.332031-21.332031zm0 0"/><path d="m362.667969 128h-341.335938c-11.753906 0-21.332031 9.578125-21.332031 21.332031v42.667969c0 11.753906 9.578125 21.332031 21.332031 21.332031h341.335938c11.753906 0 21.332031-9.578125 21.332031-21.332031v-42.667969c0-11.753906-9.578125-21.332031-21.332031-21.332031zm0 0"/><path d="m362.667969 256h-341.335938c-11.753906 0-21.332031 9.578125-21.332031 21.332031v42.667969c0 11.753906 9.578125 21.332031 21.332031 21.332031h341.335938c11.753906 0 21.332031-9.578125 21.332031-21.332031v-42.667969c0-11.753906-9.578125-21.332031-21.332031-21.332031zm0 0"/></svg>
          </div>
        </div>
        <div class="logo">
          <?= $data['view']['judul_web']; ?>
        </div>
        <div class="menu">
          <ul>
            <?php
            if (Session::exists('username')){
              ?>
                <li class="userLogin"><a href="<?= BASEURL; ?>/user/home"><?= Session::get('username'); ?></a></li>
                <li><a href="<?= BASEURL; ?>/user/logout">Logout</a></li>
              <?php
            }else{
            ?>
            <li><a href="/">Home</a></li>
            <li><a href="<?= BASEURL; ?>/user">Login</a></li>
            <li><a href="#">About</a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </nav>
    </header>
    <div class="content">
      <div class="container">
