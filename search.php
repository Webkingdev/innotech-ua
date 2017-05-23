
<?php
    require_once 'connect.php';
   	if(isset($_POST['id']) && !empty($_POST['id'])){
    	$id = intval($_POST['id']);
    	$queryres = $db->query("SELECT * FROM main WHERE id_residential = $id");
       	$output = '';
    	$output .= '<span class="search">';
    	while($row = $queryres->fetch()){
    		$output .= "<p>".$row->name_route."</p>";
	            }
	       	$output .= '</span>';             
	    }
	if($queryres->fetch() != TRUE){
		echo '<span class="search> Маршрут не найден</span>';
		}
	echo $output;

?>
