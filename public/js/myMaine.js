//##########################################
    // Ajax send mail
    //##########################################
    
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e){
        e.preventDefault();
        
        var request = $(this).serialize();
console.log(request);
        $.ajax({
            url: '/sendLetter',
            type: 'post',
            data: request,
        })
        .success(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        })
        
    });
    });
    