@extends("layouts.main")
@section("title")
  Thanks
@endsection

@section("main-content")
  <p>Risultati</p>
 
<div id="overlay">
  <div class="confirmed-action">
    <p id="confirmed-p">Azione Confermata</p>
    <ul class="gray">
      <li>Prodotto:</li>
      <li>Magazzino:</li>
      <li>Articoli Inviati:</li>
    </ul>  
    <a href=""><input id="chiudi"type="submit" value="chiudi"></a>
  </div>
</div>

  <div class="items-results">
    <div class="container-info">
      <p id="name-selection">nome magazzino</p>
    </div>
    <div class="distance">
      <p>Distanza:</p>
    </div>
    <div class="input-container">
    <a><input id="cta" class="cta" type="submit" value="NOME CTA"></a>
    </div> 
  </div>
@endsection
