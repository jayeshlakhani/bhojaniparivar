$(document).ready(function(){
	$("#sub_btn").click( function() {

			// AJAX

		 	$.post( $("#form").attr("action"),
		    $("#form :input").serializeArray(), 
		    function(info){
		        // $("#result").html(info);
		        // alert(info); 
		  	});
		 	clearInput();
		});

		function clearInput() {
			$("#form :input").each( function() {
		   		$(this).val('');
			});
		}
	// alert("ready");
});