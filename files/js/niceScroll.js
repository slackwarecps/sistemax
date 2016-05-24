$(document).ready(function() {
  var nice = $(".menu_esquerda").niceScroll();  // The document page (body)
  $("#div1").html($("#menu_lateral").html()+' '+nice.version);
  $("#menu_lateral_container").niceScroll({
    touchbehavior:true
  }); // First scrollable DIV
// Customizable cursor
//$("#menu888").niceScroll({touchbehavior:false,cursorcolor:"#00F",cursoropacitymax:0.7,cursorwidth:11,cursorborder:"1px solid #2848BE",cursorborderradius:"8px"}).cursor.css({"background-image":"url(img/mac6scroll.png)"}); // MAC like scrollbar

    
/*    
  $("input[type=range]").bind('mousedown touchstart', function (e) {
      e.stopPropagation();
  });
       */

});


