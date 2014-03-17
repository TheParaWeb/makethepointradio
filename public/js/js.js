var _URL = "http://thepoint.tpmchosting.com/";


$(document).ready(function () {


    // Prevent disabled links from being active.
    $('.disabled').click(function () {
        return false;
    });



    //TODO:TEMP FB SCRIPT.

    if($(window).width() < 987){
        var width = $(window).width() * .56838905775076;
        width = Math.round((width/10)*10);

        $('.fb-post').attr('data-width',width);
    }


});