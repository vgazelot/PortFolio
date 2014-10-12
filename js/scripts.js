$(function() {
   /* var clicked = false;
   $("#bMenu").click(function() {
     alert("lol");

    if(clicked == false)
    {
       

        $("li").each(function(){

            $(this).css('display', 'inline-block');
            $(this).eq(0).animate({ 'opacity': 1},5000 , function(){
            $(this).eq(1).animate({ 'opacity':1 },5000 , function(){
            $(this).eq(2).animate({ 'opacity': 1},5000, function(){
            $(this).eq(3).animate({ 'opacity':1 },5000 , function(){
            $(this).eq(4).animate({ 'opacity':1},5000 , function(){
                },100);
                 },100);
                 },100);
                 },100);
                },100);
            });
        clicked=true;
    }
    else
    {
         alert("lol");
        $("li").each(function(){

            $(this).css('display', 'none');
            $(this).eq(4).animate({ 'opacity': 0},5000 , function(){
            $(this).eq(3).animate({ 'opacity':0 },5000 , function(){
            $(this).eq(2).animate({ 'opacity': 0},5000, function(){
            $(this).eq(1).animate({ 'opacity':0 },5000 , function(){
            $(this).eq(0).animate({ 'opacity':0}5000 , function(){
                 },100);
                 },100);
                 },100);
                 },100);
                },100);
            });
        clicked=false;
    }

   	});*/
    
   $('#choixMode').click(function() {
     $('html,body').animate({scrollTop: $("#mode").offset().top}, 'slow'      );
   });
    $('#choixRpg').click(function() {
     $('html,body').animate({scrollTop: $("#rpg").offset().top}, 'slow'      );
   });
     $('#choixBlueNote').click(function() {
     $('html,body').animate({scrollTop: $("#blueNote").offset().top}, 'slow'      );
   });
      $('#choixOthelo').click(function() {
     $('html,body').animate({scrollTop: $("#othelo").offset().top}, 'slow'      );
   });
});
