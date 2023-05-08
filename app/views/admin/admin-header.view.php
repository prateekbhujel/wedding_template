<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=APP_DESC?>">
    <title>Admin · <?=APP_NAME?></title>
    
    <!-- Font Awesome -->
    <link href="<?=ROOT?>/assets/fontawesome/css/all.min.css" rel="stylesheet">
    
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/icons/bootstrap-icons.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
      #sidebarMenu .active{
        background-color: #23aff4;
        color: white;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?=ROOT?>">Hello, <?= user('username'); ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?=ROOT?>/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <?php if (user('super_admin') == 1):?>
            <li class="nav-item">
                <a class="nav-link" href="<?=ROOT?>/admin">
                    <i class="bi bi-shield-lock-fill"></i>
                Dashboard
                </a>
            </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/users">
                <i class="bi bi-people"></i>
              Users
            </a>
          </li>
        <?php endif;?>            
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/about">
                <i class="bi bi-file-earmark-person-fill"></i>
              About
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/story">
                <i class="bi bi-clock-history"></i>
              Story
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/gallery">
                <i class="bi bi-images"></i>
              Gallery
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/family">
                <i class="bi bi-person-heart"></i>
              Family
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/event">
                <i class="bi bi-calendar-event"></i>
              Event
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/rsvp">
                <i class="bi bi-envelope-heart"></i>
              RSVP
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/contact">
                <i class="bi bi-telephone-fill"></i>
              Contact
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/admin/settings">
                <i class="bi bi-gear"></i>
              Settings
            </a>
          </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>OTHER LINKS</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>">
              <i class="bi bi-globe"></i>
              Front end
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
          <?php
          $user=user('username');
            if(user('super_admin') == 1)
            {
              echo"Welcome, Super Admin ". $user;
            }
            else
            {
              echo"Welcome, Admin ". $user;
            }
          ?> 
        </h1>

      </div>

      <div class="content">



