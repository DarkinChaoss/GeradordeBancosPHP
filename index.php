<?php 
session_start();
require_once("vendor/autoload.php");
require_once("sql.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\pageAdmin;
use \Hcode\faculdade;
use \Hcode\Model\User;
use \Hcode\Model\Categories;

$app = new Slim();


$app->config('debug', true);

$app->get("/",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("faculdade");

});

$app->post('/crbanco',function(){

	Sql::CreateSchema($_POST["schema"]);

	header("Location: /crbanco");
	
	exit;

});

$app->get("/crbanco",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
	]);

	
	$page->setTpl("CriarBanco");

});

$app->post('/crtable',function(){

	Sql::CreateTable($_POST["schema"],$_POST["table"]);

	header("Location: /crtable");
	
	exit;

});

$app->get("/crtable",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	$dados = categories::listAll();

	$page->setTpl("CriarTabelas",[

		"dados"=>$dados

	]);



});

$app->post('/crcol',function(){

	Sql::AlterTable($_POST["nomeC"],$_POST["valor"],$_POST["nomeT"],$_POST["nomeB"]);
	header("Location: /crcol");
	
	exit;

});

$app->get("/crcol",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("CriarColunas",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});
$app->post('/crcol2',function(){

	Sql::AlterTable2($_POST["nomeC"],$_POST["valor"],$_POST["nomeT"],$_POST["nomeB"]);
	header("Location: /crcol");
	
	exit;

});

$app->get("/crcol2",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("CriarColunas",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});


$app->post('/insert1',function(){

	$qte =$_POST["qte"];
		$i=1;
	for ($i = 1; $i <= $qte; $i++) {

	Sql::Insert($_POST["nomeB"],$_POST["nomeT"]);

	}
	header("Location: /insert1");
	
	exit;

});

$app->get("/insert1",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	
	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("inserir1",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});

$app->post('/insert2',function(){

	$qte =$_POST["qte"];
		$i=1;
	for ($i = 1; $i <= $qte; $i++) {

	Sql::Insert2($_POST["nomeB"],$_POST["nomeT"]);

	}
	header("Location: /insert2");
	
	exit;

});


$app->get("/insert2",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	
	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("inserir2",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});

$app->post('/insert3',function(){

	$qte =$_POST["qte"];
		$i=1;
	for ($i = 1; $i <= $qte; $i++) {

	Sql::Insert3($_POST["nomeB"],$_POST["nomeT"]);

	}
	header("Location: /insert3");
	
	exit;

});


$app->get("/insert3",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	
	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("inserir3",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});

$app->post('/insert4',function(){

	$qte =$_POST["qte"];
		$i=1;
	for ($i = 1; $i <= $qte; $i++) {

	Sql::Insert4($_POST["nomeB"],$_POST["nomeT"]);

	}
	header("Location: /insert4");
	
	exit;

});


$app->get("/insert4",function(){

$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	
	$dados = categories::listAll();
	$dados2 = categories::listTables();

	$page->setTpl("inserir4",[

		"dados"=>$dados,
		"dados2"=>$dados2

	]);

});


$app->get("/select",function(){

	$categories = categories::Select();

	$page = new faculdade([
		"header"=>false,
		"footer"=>false
		
	]);

	$page->setTpl("select",[

		"categories"=>$categories

	]);

});



$app->run();


 ?>
