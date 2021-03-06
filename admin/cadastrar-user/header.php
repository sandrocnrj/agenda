<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto Agenda - criação de CRUD em PHP">
    <meta name="author" content="Sandro Carvalho">

    <!-- Le styles -->
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="../../bootstrap/css/stylo.css" rel="stylesheet">

    <link href="../../font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>
    <div class="container">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="<?php echo '../../' ;?>">Home</a></li>
          <li><a href="<?php echo '../' ;?>">Agenda</a></li>
        </ul>
        <?php if ($_SESSION['logado'] === true) { ?>
          <p>Olá <b><?php echo $_SESSION['nome_usuario']?></b>, <a href="<?php echo '../../'?>">clique aqui</a> para sair.</p> 
        <?php }; ?>
      </div>      
    </div>
    <div class="container">
        <!-- INCLUSÃO DO CABEÇALHO -->
        <div class="row"><div class="alignCenter"><?php include_once "../../cabecalho.php" ;?></div></div>
    </div>