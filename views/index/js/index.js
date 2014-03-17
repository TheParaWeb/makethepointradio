$(document).ready(function(){

    $('.pollAnswer').click(function(){
        var answer = $(this).data('answer'),
            id = $(this).parent().data('poll');

        $.post(
            _URL+'index/xhrSubmitPollAnswer',
            {
                id:     id,
                answer: answer
            },function(response){

                console.log(response);

            },'json'
        );
        return false;
    });



});