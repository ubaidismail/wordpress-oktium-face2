    
    jQuery('input#shortocde').prop('disabled' , 'true');
    jQuery('select#tooltip').on('change' , function(){
        if(jQuery(this).val() == 'false'){
    jQuery('input#tooltip_text').prop('disabled', true);

        
    }else{
        jQuery('input#tooltip_text').prop('disabled', false);
        jQuery('input#tooltip_text').val('Start A Video Call');
    }
    })