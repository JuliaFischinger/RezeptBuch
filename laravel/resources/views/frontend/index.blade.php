@extends('layouts.frontend')
@section('content')

    @foreach($rezeptes->all() as $rezepte)
<div class="card mb-2">
    <div class="card-header"><a href="{{route('frontend.show',$rezepte->id)}}"><h1>{{$rezepte->gericht}}</h1></a></div>
    <div class="card-body">

    <div class="row">
        <div class="col-md-6">
            <small>User: {{$rezepte->user->name}}</small>
        </div>
        <div class="col-md-6 text-right">
            <small>veröffentlicht am: {{$rezepte->created_at->format('d.m.Y')}}</small>
        </div>
    </div>
    <hr>

       <h5>Zutaten: </h5>{{$rezepte->zutaten}}<br> <br>
       <h5>Zubereitung: </h5>{{$rezepte->zubereitung}}
    </div>
</div>
    @endforeach
@endsection