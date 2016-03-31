function adapwindow(){
    var  nav    =    $('#header').outerHeight();
    var     footer =  $('#footer').outerHeight();
    var     viewport =  $(window).height();
    var    main   =  viewport -(footer + nav) ;
    $('#main').css('height' , main);

    console.log("footer :", footer,
        "nav :" ,  nav,
        "main:",  main,
        "viewport:", viewport);
}

$(document).ready(function() {

    $(window).load(function(){
        adapwindow();
    });

    $(window).resize(function(){
        adapwindow();
        return false;
    });



});


