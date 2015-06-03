<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Pendekin URL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content=""/>
  <meta name="author" content="Ardha Herdianto"/>

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="<?= $this->uri->getBaseUri(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="<?= $this->uri->getBaseUri(); ?>assets/css/style.css" rel="stylesheet"/>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/scripts.js"></script>
    
    
    <?php if($pages=='profil/files/list'){?>
        <!------------------DATATABLES------------------>
        <link href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css" rel="stylesheet"/>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>    
    <?php } ?>
    
    <?php if($pages=='profil/files/upload' || $pages=='profil/files/upload/edit'){?>
        <!------------------EDITOR------------------>
        <link href="<?= $this->uri->getBaseUri(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->uri->getBaseUri(); ?>assets/css/froala_editor.min.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="<?= $this->uri->getBaseUri(); ?>assets/js/froala_editor.min.js"></script>
    <?php } ?>
    
</head>
