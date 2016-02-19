<?php 

/* DBZ VIEW */

class View {
  
    public function __construct () { }
    
    // menu list of table link
    public static function MenuTable ($db_name, $array_table) {
      $menu = "<div>DB : ".$db_name;
      
      foreach ($array_table as $K => $TABLE) {
        $menu .= " <a href='?T=".$TABLE[0]."'>[ ".strtoupper($TABLE[0])." ]</a>";
      }
      
      $menu .= "</div>";
      
      return $menu;
    }    
    
    // html final rendering
    public static function HTML ($title, $contener) {
      echo "<html>
      <head>
        <title>".$title."</title>
        <link rel='stylesheet' type='text/css' href='Fichiers/css/style.css' />
      </head>
      <body>
        <img src='Fichiers/images/logo.jpg' /><br /><hr />
        </hr>".$contener."
      </body>
      </html>";
    }
    
    public static function val_tab($t_name) {
	
	  $tab = "<div> : ".$_GET['T'];
	  $tab .= "<table>";
		/* $rows = ("describe" .$_GET['T']);
		while ($row = mysql_fetch_assoc($rows))
			{
				print $row['Field'] . '<br />';
			} */
      foreach ($t_name as $K => $TABLE) {
        $tab .= "<tr>";

        foreach($TABLE as $J => $coucou){
        
        	$tab.= "<td>".$coucou."</td>";

        	}
        	 $tab .= "</td>";

           $tab.='<td><a href="supp_val.php?id='.$TABLE['id'].'&T='.$_GET['T'].'"  ><img src="images/croix.png"></a></td>';
      }
      $tab .= "</table> ";
      $tab .= "</div>";
      
      return $tab;   	
    	
    	
    	
    	
    	}

}



?>
