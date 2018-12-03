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









/*
$app->get('/admin', function() {
    
	User::verifyLogin();

    $page=new pageAdmin();

	$page->setTpl("index");

});

$app->get('/admin/login',function(){

	$page = new pageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");


});

$app->post('/admin/login',function(){

	user::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	
	exit;

});

$app->get('/admin/logout',function(){

	User::logout();

	header("Location: /admin/login");

	exit;

});

$app->get("/admin/users",function(){

	User::verifyLogin();

	$users = User::listAll();

	$page = new pageAdmin();

	$page->setTpl("users",array(
		"users"=>$users
	));

});

$app->get("/admin/teste",function(){

	User::verifyLogin();

	$teste = User::teste();

	$page = new pageAdmin();

	$page->setTpl("teste",array(
		"teste"=>$teste
	));

});

$app->get("/admin/users/create",function(){

	User::verifyLogin();

	$page = new pageAdmin();

	$page->setTpl("users-create");

});

$app->get("/admin/users/:iduser/delete",function($iduser){

	User::verifyLogin(); 

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");

	exit;

});

// update no usuario
$app->get('/admin/users/:iduser', function($iduser){
 
   User::verifyLogin();
 
   $user = new User();
 
   $user->get((int)$iduser);
 
   $page = new PageAdmin();
 
   $page ->setTpl("users-update", array(
        "user"=>$user->getValues()
    ));
 
});//create usuario
$app->post("/admin/users/create",function(){

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"]=(isset($_POST["inadmin"]))?1:0;

	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");

	exit;

});

$app->post("/admin/users/:iduser",function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$_POST["inadmin"]=(isset($_POST["inadmin"]))?1:0;

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");

	exit;



});

$app->get("/admin/forgot",function(){

$page = new pageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");

});

$app->post("/admin/forgot",function(){

	$_POST["email"];

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent",function(){

 $page = new pageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");

});


$app->get("/admin/categories",function(){

	$categories = Categories::listAll();

	$page = new PageAdmin;

	$page->setTpl("categories",[

		"categories"=>$categories

	]);

});

$app->get("/admin/categories/create",function(){


	$page = new PageAdmin;

	$page->setTpl("categories-create");

});

$app->post("/admin/categories/create",function(){


	$categories = new categories();

	$categories->set($_POST);

	$categories->save();

	header("Location:  /admin/categories");
	exit;

});
*/

$app->run();


 ?>