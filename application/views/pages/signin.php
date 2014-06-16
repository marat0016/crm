<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title><?=$this->theme->getTitle();?></title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="<?=config_item('base_url');?>/assets/css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> <script src="<?=config_item('base_url');?>/assets/js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
  <div class="container aside-xl"> <a class="navbar-brand block" href="index.html"><?=$this->theme->getTitle();?></a>
    <section class="m-b-lg">
      <header class="wrapper text-center"> <strong><?=lang("plz_auth");?></strong> </header>
      
      <?php echo validation_errors(); ?>
      
      <form action="" method="post">
        <div class="list-group">
          <div class="list-group-item">
            <input type="email" placeholder="Email" name="email" class="form-control no-border">
          </div>
          <div class="list-group-item">
            <input type="password" placeholder="Password" name="passhash" class="form-control no-border">
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block"><?=$this->theme->getTitle();?></button>
        <div class="text-center m-t m-b"><a href="#"><small><?=lang("forgot_password");?>?</small></a></div>

      </form>
    </section>
  </div>
</section>
<!-- footer -->
<footer id="footer">
  <div class="text-center padder">
    <p> <small>
      &copy; <?=lang("crm_date");?></small> </p>
  </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="<?=config_item('base_url');?>/assets/js/app.v1.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/app.plugin.js"></script>
</body>
</html>