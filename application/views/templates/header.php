<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    
    

    <title><?php echo $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Nom du site</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><?php echo anchor('pages', 'Page index (home)', 'title="Title page index"');?></li>
            <li><?php echo anchor('pages/about', 'A propos', 'title="A propos"');?></li>
            <li><a href="<?php echo base_url().'news';?>">News</a></li>
          </ul>
			
			<ul class="nav navbar-nav navbar-right">
	            <li><a href="<?php echo base_url().'auth';?>">Admin</a></li>
	            <li class="active"><a href="<?php echo base_url().'auth/logout';?>">Logout</a></li>
	           
	          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>modif texte texte</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, in, voluptate, porro, placeat voluptas ipsam velit recusandae repudiandae veniam quaerat aspernatur enim quos tempora nisi officia sit aliquid minima. Delectus.</p>
      </div>

      <div class="well">




    
