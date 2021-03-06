<?php 

/* DBZ FRONTAL CONTROLLER
** MVC CMS for database management */

// configuration
require_once("Config/config.script.php");

// connexion db
require_once("Classes/pdo.connexion.class.php");
$PDO = new Pdo_Connexion ($CONFIG['DB_INI_FILE']);

// model class
require_once("Classes/model.class.php");
$MODEL = new Model ($PDO->CNX);

// view class
require_once("Classes/view.class.php");

// html output increment
$OUTPUT = NULL;

// set the menu based on tables
$OUTPUT .= View::MenuTable ($MODEL->Name_DB(), $MODEL->List_Table());



// output echo screen rendering 
View::HTML($CONFIG['MODULE_NAME'], $OUTPUT);




$EXPORT = null;

if(isset($_GET['dir']) && !empty($_GET['dir'])) {
switch($_GET['dir']){

case 1: require_once('ajout.php'); break;
case 2: require_once('supp.php'); break;
case 3: require_once('montre.php'); break;
default:require_once('defaut.php');break;

}
}
else {
	require_once('defaut.php');
	
	}
	


echo $EXPORT;












?>
