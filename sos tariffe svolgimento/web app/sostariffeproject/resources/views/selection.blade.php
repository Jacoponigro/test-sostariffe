@extends("layouts.main")
@section("title")
  Selection
@endsection

@section("main-content")
  <p>Risultati</p>
{{-- overlay --}}

  <div id="overlay">
    <div class="confirmed-action">
      <p id="confirmed-p">Azione Confermata</p>
      <ul class="gray">
      <li>Prodotto: {{$nome_prodotto}}</li>
      <li>Magazzino: <span id="overlay-magazzino"></span></li>
      <li>Articoli Inviati: <span id="overlay-articoli"></span></li>
      </ul>
      <button id="chiudi">CHIUDI</button>
    </div>
  </div>
{{-- stampo risultati --}}

@foreach ($stores as $store)
<div class="items-results" data-magazzino="{{$store["name"]}}" data-articoli="{{ $store["articoliInviati"] }}">
    <div class="container-info">
      <p class="name-selection">{{$store["name"]}}</p>
    </div>
    <div class="distance">
    <p>Distanza: {{$store["distance"]}}km</p>
    </div>
    <div class="input-container">
      <button class="cta input-js">NOME CTA</button>
    </div>
  </div>
@endforeach
@endsection
