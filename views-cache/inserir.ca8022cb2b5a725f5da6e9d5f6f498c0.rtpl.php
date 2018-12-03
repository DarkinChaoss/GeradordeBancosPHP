<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Criador de Tabelas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->

  <div class="lockscreen-logo">
    <h2>Criador de colunas</h2>
  </div>

  <!-- START LOCK SCREEN ITEM -->

    <!-- lockscreen credentials (contains the form) -->
       <h2>Adicione colunas na tabela já criada:</h2>


<form class="form-inline" action="/crcol" method="post">
  <label class="mr-sm-2" for="inlineFormCustomSelect">Criar Colunas:</label>
  <input type="text" name="nomeC" placeholder="nome da coluna" >
  <select name="valor" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    <option value="int(15)">int</option>
    <option value="double(6,6)">double</option>
    <option value="float(6,6)">float</option>
    <option value="char(50)">char</option>
  </select>
   <input type="text" name="nomeT" placeholder="nome da tabela" >
   <input type="text" name="nomeB" placeholder="nome do banco" >
  <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
      <span class="custom-control-indicator"></span>
  </label>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    <!-- /.lockscreen credentials -->

  
  <!-- /.lockscreen-item -->
  




 
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="/res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/res/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
