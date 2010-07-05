$(function(){
    function getCSRFToken(){
        var token=null;
        $.ajax({
                        url: "<?=url::site('/csrf/generate');?>",
                        global: false,
                        dataType: "json",
                        async:false,
                        success: function(msg){
                           token = msg.token;
                        }
                     }
                  );
        return token;
    }


    $('form').submit(function(){
        theToken = getCSRFToken();
        $(this).append('<input type="hidden" name="csrf-token" value="' + theToken + '">');
    });
});