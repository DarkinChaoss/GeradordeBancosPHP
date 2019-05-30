<?php 

require_once("dados.php");

class Sql {



		public static function createSchema($banco){

		$mysqli = new mysqli("127.0.0.1", "root", "josiane29","");

			if ($mysqli->connect_errno) {
			    printf("Connect failed: %s\n", $mysqli->connect_error);
			    exit();
			}	
		

			if($mysqli->query("CREATE schema $banco") === TRUE) {
			    printf("Schema successfully created.\n");
			}
		}


		public static function CreateTable($banco,$table){

			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);

			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}
			$query = "CREATE TABLE $table(id MEDIUMINT NOT NULL AUTO_INCREMENT,PRIMARY KEY (id))";
			if ($mysqli->query($query) === TRUE) {
			   printf("Table successfully created.\n");
			}
			else{
			echo "não foi possivel criar a tabela";
			}
		}

		public static function AlterTable($coluna,$tipo,$table,$banco){

			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);

			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}
			$query = "ALTER TABLE $table add column $coluna $tipo  ";
			if ($mysqli->query($query) === TRUE) {
			   printf("Table successfully created.\n");
			}
			else{
			echo "não foi possivel criar a tabela";
			}
		}
		public static function AlterTable2($coluna,$tipo,$table,$banco){

			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);

			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}
			$query = "ALTER TABLE $table add column $coluna $tipo NOT NULL AUTO_INCREMENT,PRIMARY KEY (id) ";
			if ($mysqli->query($query) === TRUE) {
			   printf("Table successfully created.\n");
			}
			else{
			echo "não foi possivel criar a tabela";
			}
		}


	

		function Insert($banco,$table){
			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$agencia = dados::GeraAgencia();
			$cliente = dados::GeraAgencia();
			$saldo = dados::geraSalario();
			

			$query = "INSERT INTO $table(agenciaid,clienteid,saldo) VALUES ('$agencia','$cliente','$saldo')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}

		function Insert2($banco,$table){
			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$salario = dados::geraSalario();
			$cargos = dados::geraCargos();

			$query = "INSERT INTO $table(salario, cargos,rg) VALUES ('$nome', '$cpf','$rg')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}

		function Insert3($banco,$table){
			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$nome = dados::GerarNomes();

			

			$query = "INSERT INTO $table(nome) VALUES ('$nome')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}

		function Insert4($banco,$table){
			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$saldo = dados::geraSalario();
			
			

			$query = "INSERT INTO $table(saldo) VALUES ('$salario')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}


		public static function InsertPessoa($banco,$tabela){


			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$cpf = Sql::cpfRandom(0);
			$rg = Sql::cpfRandom(0);
			$nome = Sql::GerarNomes();

			$query = "INSERT INTO $tabela(nome, cpf,rg) VALUES ('$nome', '$cpf','$rg')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}

		public static function InsertCidades($banco,$tabela){


			$mysqli = new mysqli("localhost", "root", "josiane29", $banco);
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

			$cpf = dados::cpfRandom(0);
			$nome = dados::GerarNomes();
			$rua = dados::geraRua();
			$n = dados::geraNumero();


			$query = "INSERT INTO $tabela(rua, numero,bairos) VALUES ('$rua', '$n','$rua')";
			
			if ($mysqli->query($query)=== TRUE){
				printf("Insert successfully.\n");
			}
			else{
				echo"não foi possivel inserir";
			}

		}

	   
	
}
?>
