$(document).ready(function(){
    $('#search').click(function(){
    	var preloader = document.getElementById('preload');
    	var id = $("[name='residential']").val();
    	preloader.classList.add('done');
        setTimeout(function(){
    		var preloader = document.getElementById('preload');
 			if (preloader.classList.contains('done')){
				preloader.classList.add('preloader');
				preloader.classList.remove('done');
			}
			setTimeout(function(){
			 $.ajax({
                method: 'POST',
                url: 'search.php',
                data: {id:id},
                success: function(data){
                    $(".search").html(data);
                }
            });
			},100);
		}, 3000);
 
	});
})


		