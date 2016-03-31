function adapwindow(){
    var nav      =    $('#header').outerHeight();
    var footer   =  $('#footer').outerHeight();
    var viewport =  $(window).height();
    var main     =  viewport -(footer + nav) ;
    $('.section-prestation').css('height' , main);
    $('.section-formulaire-connexion').css('height' , main);
    $('.container-dashboard').css('height' , main);
    $('.section-add-picture').css('height' , main);
    $('.section-dashboard-maries').css('height' , main);

    
    /*console.log("footer :", footer,
        "nav :" ,  nav,
        "main:",  main,
        "viewport:", viewport);*/
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




$(document).ready(function(){

   var links = $('.navbar li').children();
   $.each(links, function(key, value){
      if(value.href == document.URL){
       $(this).addClass('active');
      }
   });

});