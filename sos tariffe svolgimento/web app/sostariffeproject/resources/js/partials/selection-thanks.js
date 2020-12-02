$(document).on("click", ".input-js",
  function(){
    document.getElementById("overlay").style.display = "block";
    var nomeMagazzino = $(this).parents('.items-results').attr("data-magazzino");
    var articoli = $(this).parents('.items-results').attr("data-articoli");
    
    $("#overlay-magazzino").html(nomeMagazzino);
    $("#overlay-articoli").html(articoli);
  }
)
$(document).on("click", "#chiudi",
  function(){
    document.getElementById("overlay").style.display = "none";
  }
)
