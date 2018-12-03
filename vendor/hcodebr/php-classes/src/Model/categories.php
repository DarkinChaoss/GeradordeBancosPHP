<?php

namespace Hcode\Model;
use \Hcode\DB\Sql;
use \Hcode\Model;
class Categories extends Model{



	public static function listAll(){

		$sql = new Sql();

		return $sql->select("SHOW SCHEMAS");
	}

	public static function listTables(){

		$sql = new Sql();

		return $sql->select("SHOW tables");
	}

	public static function Select(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM teste;");
	}




	
	
	
}
?>