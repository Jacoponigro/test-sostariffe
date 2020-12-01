@extends("layouts.main")
@section("title")
  Search
@endsection

@section("main-content")
  <form>
    <i class="fas fa-search icon"></i>
    <input class="input-text" type="text" placeholder="Di cosa hai bisogno oggi?"><a href=""><input class="search"type="submit" value="CERCA"></a>
  </form>
  <p id="results">Risultati</p>

 
  <div class="items-results">
    <div class="container-info">
      <p>nome prodotto</p>
      <small>lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
    </div>
    <div class="input-container">
    <a><input class="cta" type="submit" value="NOME CTA"></a>
    </div> 
  </div>
      
@endsection

