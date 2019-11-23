@extends('layouts.frontend')
@section('content')

    @foreach($rezeptes->all() as $rezepte)
<div class="card mb-2">
    <div class="card-header"><a href="{{route('frontend.show',$rezepte->id)}}"><h3>{{$rezepte->gericht}}</h3></a></div>
    <div class="card-body">

       <h5>Zutaten: </h5>{{$rezepte->zutaten}}<br>
    </div>
</div>
    @endforeach
@endsection