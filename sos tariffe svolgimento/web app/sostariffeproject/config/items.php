<?php
$items = '[
  {
    "id": 1,
    "name": "Corona",
    "description": "La Corona Extra, è una birra Pale lager messicana, prodotta dal birrificio Cerveceria Modelo e, limitatamente alla produzione destinata all\'esportazione nel territorio statunitense, dalla Constellation Brands",
    "country": "Messico"
  },
  {
    "id": 2,
    "name": "Birra Moretti",
    "description": "Birra Moretti è stata un\'azienda specializzata nella produzione di birra. Nasce nel 1859 a Udine con il nome di Fabbrica di Birra e Ghiaccio. Fu fondata da Luigi Moretti, un imprenditore, la cui famiglia era dedita al commercio e all\'ingrosso di bevande e generi alimentari, il marchio è stato acquisito dalla società olandese Heineken nel 1996.",
    "country": "Italia"
  },
  {
    "id": 3,
    "name": "Beck\'s",
    "description": "Beck\'s (ufficialmente \"Brauerei Beck & Co KG\") è un birrificio tedesco",
    "country": "Germania"
  },
  {
    "id": 4,
    "name": "Forst",
    "description": "Birra Forst (in tedesco Spezialbier-Brauerei Forst) è il maggiore produttore italiano indipendente[1] di birra. Detentore anche del marchio Menabrea.",
    "country": "Italia"
  },
  {
    "id": 5,
    "name": "Tabucchi",
    "description": "Birra italiana prodotta artigianalmente, molto maltata",
    "country": "Italia"
  }
]';

$items = json_decode($items, true);

return $items;
