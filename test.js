$("#formValidation").validate({
    
    submitHandler: function(form) {
      form.submit();
    }
});

jQuery(document).ready(function($){
    $('.toggle-academics').hide();
    $('#qualification').on('change', function(){
        var val = $(this).val();
        alert(val);

        $('.toggle-academics').hide();
        $('#academics_'+val).show();
    });
    $('.toggle-tax').hide();
    $('#tax').on('change', function(){
        var val = $(this).val();
        alert(val);

        if(val == 'Yes'){
            $('#tax').show();
        }
        else{
            $('.toggle-tax').hide();
        }
    });

    $('.toggle-others').hide();
    $('#find_how').on('change', function(){
        var val = $(this).val();
        alert(val);

        if(val == 'other_info'){
            $('#other_info').show();
        } else {
            $('.toggle-others').hide();
        }
    });
});