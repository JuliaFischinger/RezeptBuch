@extends('layouts.frontend')
@section('content')

<div class="pull-right">
                <a class="btn btn-light mb-4" href="{{ route('frontend.index') }}"> zurück</a>
            </div>

<div class="card mb-2">
    <div class="card-header"><h1>{{$rezept->gericht}}</h1></div>
    <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <small>User: {{$rezept->user->name}}</small>
        </div>
        <div class="col-md-6 text-right">
            <small>veröffentlicht am: {{$rezept->created_at->format('d.m.Y')}}</small>
        </div>
    </div>
    <hr>

       <h5>Zutaten: </h5>{{$rezept->zutaten}}<br> <br>
       <h5>Zubereitung: </h5>{{$rezept->zubereitung}}
    </div>
</div>

@endsection