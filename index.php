<?php
    require_once 'connect.php';
    $queryres = $db->query("SELECT * FROM main WHERE id_residental = '4'");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="script.js" type="text/javascript"></script>
        <script>
            $(function(){
                var id = $("[name='area']").val();
                
                $.ajax({
                        method: 'POST',
                        url: 'function.php',
                        data: {id:id},
                        success: function(data){
                            $(".resident").html(data);
                        }
                    });

                $("[name='area']").change(function(){
                    var id = $("[name='area']").val();
                    $.ajax({
                        method: 'POST',
                        url: 'function.php',
                        data: {id:id},
                        success: function(data){
                            $(".resident").html(data);
                        }
                    });
                });
            });
        </script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<title>Поиск</title>	
	</head>

	<body>
    <div id="preload">
    <div class="loader">
    </div>
    </div>
    	<div class="container">
        <h2> Откуда едем</h2>
            <div class="area"> 
                <div class="area1"> 
                    <span>Район 
                        <select name="area">
                            <option value="0">Выбрать район</option>
                            <?php
                            $queryarea = $db->query("SELECT * FROM area");
                                while($row = $queryarea->fetch()){
                                       echo('<option value='.$row->id_area.'>'.$row->name_area.'</option>');
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="area1">Массив
                    <span class="resident"> 
                        <select name="residential">
                        </select>
                    </span>
                </div>
                <div class="area1"> 
                    <span>Улица
                   <input type="street" name="street">
                    </span> 
                </div>
                <div class="area1"> 
                    <span>Дом
                   <input type="house" name="house">
                    </span> 
                </div>
            </div>
            <h2> Дополнительно</h2>
            <div class="area"> 
                    <p><input type="radio" name="types" value="1">Машина с кондиционером</p>
                    <p><input type="radio" name="types" value="2">Фургон/универсал</p>
                    <p><input type="radio" name="types" value="3">Еду с животными</p>
            </div>
            <div class="area">
                <button type="button" class="btn btn-info" name="search" id="search">Найти</button> 
                <span class="search">
                </span>
            </div>
        </div>
     </body>
</html>
