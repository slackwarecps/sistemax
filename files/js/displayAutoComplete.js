(function ($) {
  $.fn.displayAutoComplete = function(options) {
    
    var autoComplete = new displayAutoComplete(options.source, options.obj, options.target);
    
  };
})(jQuery)


function displayAutoComplete(source, obj, target){
  
  obj.keyup(function() {
    if(obj.val().length > 2){
      delay(function(){
        $.ajax({
          type: "POST",
          url: source,
          data: {
            search: obj.val()
          },
          success: function (dataReturn){
            $('.autocomplete').remove();
            obj.parent().append(dataReturn);
            setAction();
          }
        });
      }, 500 );
    }
  });
  
  function setAction(){
    $('#autocomplete_ul li').each(function() {
      $(this).on("click", function(){
        obj.val($(this).text());
        $('#col_id').remove();
        obj.parent().append('<input type="hidden" name="col_id" id="col_id" value="'+$(this).attr('key')+'" />');
        $('.autocomplete').remove();
      });
    });
  }
  
}








