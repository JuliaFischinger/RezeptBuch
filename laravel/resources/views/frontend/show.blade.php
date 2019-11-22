@extends('layouts.frontend')
@section('content')

<div class="card mb-2">
    <div class="card-header"><h1>{{$rezept->gericht}}</h1></div>
    <div class="card-body">
       <h5>Zutaten: </h5>{{$rezept->zutaten}}<br> <br>
       <h5>Zubereitung: </h5>{{$rezept->zubereitung}}
    </div>
</div>

@auth
<div class="card mb-2">
    <div class="card-header"><h5>Kommentar einfügen</h5></div>
    <div class="card-body">
      Formular
    </div>
</div>
@endauth

<div class="card mb-2">
    <div class="card-header"><h3>Kommentare</h3></div>
    <div class="card-body">
      Kommentar 1 folgt...
    </div>
</div>

@endsection