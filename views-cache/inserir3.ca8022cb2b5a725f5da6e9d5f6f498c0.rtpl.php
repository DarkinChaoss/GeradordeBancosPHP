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
<style>
  body{
    max-width:100%;
    height:auto;
    background-size: 1400px;
    background-repeat: no-repeat;
  }
  h2{
    color: #FF0000;
  }
  label{
    color: #FF0000;
  }

</style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Redirect
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/">Menu</a>
  </div>
</div>
<body background="res/img/logo2.gif">
<!-- Automatic element centering -->

  <div class="lockscreen-logo">
    <h2>Inserir dados com nome e cpf automatico</h2>
  </div>

  <!-- START LOCK SCREEN ITEM -->

    <!-- lockscreen credentials (contains the form) -->
       <h2>Gerar nome e cpf aleatorios:</h2>
       <br/>


<form class="form-inline" action="/insert3" method="post">
  <label class="mr-sm-2" for="inlineFormCustomSelect">Digite os dados:</label>
   <select name="nomeB" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    {<?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>}<option value="<?php echo htmlspecialchars( $value1["Database"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["Database"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </option><?php } ?>
  </select>
  <select name="nomeT" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    {<?php $counter1=-1;  if( isset($dados2) && ( is_array($dados2) || $dados2 instanceof Traversable ) && sizeof($dados2) ) foreach( $dados2 as $key1 => $value1 ){ $counter1++; ?>}<option value="<?php echo htmlspecialchars( $value1["Tables_in_testetrab"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["Tables_in_testetrab"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </option><?php } ?>
  </select>
   <input type="text" name="qte" placeholder="qte de vezes para repetir" >
  <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
      <span class="custom-control-indicator"></span>
  </label>

  <button type="submit" class="btn btn-primary">Xablau</button>
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
