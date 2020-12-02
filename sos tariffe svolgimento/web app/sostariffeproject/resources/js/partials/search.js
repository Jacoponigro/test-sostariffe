$("#input-text").keyup(
    function() {

        // prendo valore input
      var searchInput = $(this).val();
      searchInput = searchInput.toLowerCase();
      var itemName = $(".items-results .item-name");
      var itemDescr = $(".items-results .item-description");

     // controllo su name
       itemName.each(function() {
         var name = $(this).text();
         name = name.toLowerCase();
         if(name.includes(searchInput) == true) {
            $(this).parents(".items-results").show();
            }
            else {
             $(this).parents(".items-results").hide();  
            }
       });
        //  controllo su description
         itemDescr.each(function() {
            var descr = $(this).text();
            descr = descr.toLowerCase();
            if(descr.includes(searchInput) == true) {
               $(this).parents(".items-results").show();
               }
               else {
                $(this).parents(".items-results").hide(); 
               }
          });
      
});