
$( document ).ready(function() {

    $('.mailchimp').ajaxChimp({
        callback: mailchimpCallback,
        url: "" 
    }); 
    function mailchimpCallback(resp) {
         if (resp.result === 'success') {
            $('.subscription-success').html('<i class="fa fa-check"></i>' + resp.msg).fadeIn(1000);
            $('.subscription-error').fadeOut(500);
            
        } else if(resp.result === 'error') {
            $('.subscription-error').html('<i class="fa fa-times"></i>' + resp.msg).fadeIn(1000);
        }  
    }

});