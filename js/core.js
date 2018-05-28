$(document).ready(function(){

	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.10);

		$('body').css({
			'background-position': '0 -' + posicion + 'px'
		});

	});

	$( "#delete" ).click(function() {
		if(!confirm('Are you sure that you want to delete monster?')){
			
		}



	// $.ajax({
  //           url: 'http://localhost:8888/role-play-toolkit/monsters/delete',
  //           type: 'POST',
  //           data: {'id': $('#delete').data('value')},
	// 					success: function(data){
	// 						alert(data);
	// 					}
	//
	// 				});



		});

});
