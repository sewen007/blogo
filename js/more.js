var mess_content = $('.post');
mess_content.each(function(){
   if ($(this).text().length > 120) {
      var obrtext = $(this).text().substr(0,120) ;
      $(this).html(obrtext+"<a href='#'>read more</a>") ;
   }
});