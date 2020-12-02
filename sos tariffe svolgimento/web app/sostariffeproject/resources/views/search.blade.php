@extends("layouts.main")
@section("title")
  Search
@endsection

@section("main-content")
  <form>
    <i class="fas fa-search icon"></i>
    <input id="input-text"class="input-text" type="text" placeholder="Di cosa hai bisogno oggi?"><button class="search">CERCA</button>
  </form>
  <p id="results">Risultati</p>
  
 {{-- stampo risultati --}}

 @foreach ($items as $item)
  <div class="items-results">
    <div class="container-info">
    <p class="item-name">{{$item["name"]}}</p>
    <small class="item-description">{{$item["description"]}}</small>
    </div>
    <div class="input-container">
    <a href="/selection/{{$item["id"]}}"><button class="cta">NOME CTA</button></a>
    </div> 
  </div>

@endforeach
@endsection

