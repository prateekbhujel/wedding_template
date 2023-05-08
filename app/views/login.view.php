<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A wedding page with php backend and admin pannel">
    <title>Login Page · <?=APP_NAME?></title>


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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/signin.css" rel="stylesheet">
  </head>
<body class="text-center">
    
    <main class="form-signin w-100 m-auto">
    <form method="POST">
        <i class="bi bi-people fs-1"></i>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <?php if(!empty($errors)) : ?>
          <div class="alert alert-danger text-center"><?= implode('<br>', $errors) ?></div> 
        <?php endif; ?>

        <div class="form-floating">
        <input name = "email" value ="<?=old_value('email')?>" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
        <input name = "password" value ="<?=old_value('password')?>" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="<?=ROOT?>"> Go To Home</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
    </main>
</body>
</html>
