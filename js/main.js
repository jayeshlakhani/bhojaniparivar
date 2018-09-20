$(document).ready(function(){

//Contact Form Submit
    var contact_form_id = jQuery('#form');
    contact_form_id.submit(function (event) {
        event.preventDefault();
        if (contact_form_id[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            var formData = contact_form_id.serialize();     
            jQuery.ajax({
                type: "POST",
                url: "http://localhost/bhojaniparivar/includes/mail_list.php",
                data: formData,
                //async: false,
                success: function(response) {

                    if(response == "Success") {
                    	$("#popup_1").modal("show");
                    	contact_form_id[0].reset();
                    }else{
                        $("#popup_2").modal("show");
                        contact_form_id[0].reset();
                    }
                }
            });
            return false;
            
        }
        contact_form_id.addClass('was-validated');
    });


});



