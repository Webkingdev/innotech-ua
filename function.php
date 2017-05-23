<script>
$(function(){
	$("[name='residential']").change(function(){
		$("[name='residential']").val();
	});
});
</script>
<?php
    require_once 'connect.php';
    if(isset($_POST['id']) && !empty($_POST['id'])){
    	$id = intval($_POST['id']);
    		$queryres = $db->query("SELECT * FROM residential WHERE id_area = $id");
      	echo "<select name='residential'>";
    		while($row = $queryres->fetch()){
            	echo('<option value='.$row->id_residential.'>'.$row->name_residential.'</option>');
            }
       	echo "</select>";             
    }
    else{
    	echo "<select name='residential' disabled><option value='0'>- - - - - </option></select>";
    }
    echo $row->id_residential;
?>
