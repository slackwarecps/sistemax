$(document).ready(function() {
  
  $("ul.dropdown li a").hover(function(){
    $(this).addClass("hover");
    $('ul:first',this).css('visibility', 'visible');
  }, function(){
    $(this).removeClass("hover");
    $('ul:first',this).css('visibility', 'hidden');    
  });
  
  $(window).load(function() {
    $('#slider').nivoSlider({
      animSpeed: 500, // Slide transition speed
      pauseTime: 8000 // How long each slide will show
    });    
  });
  
});

function abrirVideo(embed){
  $('#video_rand').html('<img src="/files/images/loading.gif" alt="'+t('Pesquisando')+'..."/> '+t('Pesquisando')+'...');  
  $("#video_rand").html('<iframe width="350" height="224" src="http://www.youtube.com/embed/'+embed+'" frameborder="0" allowfullscreen></iframe>');
}

