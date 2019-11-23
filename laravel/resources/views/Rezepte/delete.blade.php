@extends('layouts.app')
@section('content')

    @if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $message)
        <li>{{$message}}</li>
    @endforeach
    </ul>
    </div>
    @endif

<div class="card special mb-2">
    <div class="card-header"><h1>Rezept löschen</h1></div>
    <div class="card-body">
        <form action="{{route('rezepte.destroy', $rezepte->id)}}" method="post">
            @csrf

            @method('DELETE')

            
            <button type="submit" class="btn btn-danger">Ja, Rezept endgültig löschen?</button>
            <a href="{{route('rezepte.index')}}" class="btn btn-primary" role="button">Nein, Rezept behalten.</a>
        </form>
    </div>
</div>

@endsection