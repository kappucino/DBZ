<?php 

/* DBZ MODELE KAMEHAMEHA */

class Model {
  
  private $PDO = NULL;
  
  public function __construct ($pdo) {
    $this->PDO = $pdo;
  }
  
  // db name
  public function Name_DB () {
    return $this->PDO->Query('select database()')->fetchColumn();
  }
  
  // list table
  public function List_Table () {
    $SQL = "show tables";
    $RES = $this->PDO->prepare($SQL);
    $RES->execute();
    return $RES->fetchAll();
  }
  
  
  	public  function liste_val($t) {


	$req = "select * from ".$t;	
	$res = $this->PDO->prepare($req);
	$res->execute();
	return $res->fetchAll(PDO::FETCH_ASSOC);

}

/*
public fonction requete($sql){


	
	$res = $this->PDO->prepare($sql);
	$res->execute();
	return $res->fetchAll(PDO::FETCH_ASSOC);

	
	
}*/



}
	







?>
