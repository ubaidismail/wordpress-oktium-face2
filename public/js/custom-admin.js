    
    jQuery('input#shortocde').prop('disabled' , 'true');

    jQuery('select#tooltip').on('change' , function(){
        if(jQuery(this).val() == 'false'){
    jQuery('input#tooltip_text').prop('disabled', true);

        
    }else{
        jQuery('input#tooltip_text').prop('disabled', false);
        jQuery('input#tooltip_text').val('Start video-call');
    }
    })

    jQuery('select#button_type').on('change' , function(){
        if(jQuery(this).val() == "non-float"){
        jQuery('select#position').hide(); 
        jQuery('select#position').parent().parent().hide();
    }else{
        jQuery('select#position').parent().parent().show();
        jQuery('select#position').show();
        // jQuery('input#tooltip_text').val('Start A Video Call');
    }
    });

    jQuery(window).load(function() {
        // Handler for .load() called.
        var get_tooltip = jQuery('select#tooltip').val(); 
        var val = jQuery('select#button_type').val(); 
        if(val == "non-float"){
            jQuery('select#position').hide(); 
            jQuery('select#position').parent().parent().hide();
        }else{
            jQuery('select#position').prop('disabled', false);
            // jQuery('input#tooltip_text').val('Start A Video Call');
        }
        if(get_tooltip == "false"){
            jQuery('input#tooltip_text').prop('disabled', true);
        }else{
            jQuery('input#tooltip_text').prop('disabled', false);
        }
        
      });