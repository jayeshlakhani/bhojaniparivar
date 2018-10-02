$(document).ready(function(){

//Contact Form Submit
    
    var contact_form_id = jQuery('#form');
    contact_form_id.submit(function (event) {
        event.preventDefault();
        if (contact_form_id[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            contact_form_id.find('.btn').prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
            var formData = contact_form_id.serialize();     
            jQuery.ajax({
                type: "POST",
                // url: (location.protocol == "https:") ? "https://bhojaniparivar.com/process/mail_list.php" : "http://bhojaniparivar.com/process/mail_list.php",
                url: "http://localhost/bhojaniparivar/includes/mail_list.php",
                data: formData,
                //async: false,
                success: function(response) {

                    if(response == "Success") {
                    	contact_form_id.find('.btn').prop('disabled', false).html('Notify Me!');
                    	$("#popup_1").modal("show");
                    
                    	contact_form_id[0].reset();
                    }else if(response == "Email id already exists"){
                        contact_form_id.find('.btn').prop('disabled', false).html('Notify Me!');
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



