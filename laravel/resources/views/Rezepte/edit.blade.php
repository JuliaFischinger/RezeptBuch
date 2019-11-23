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
    <div class="card-header"><h1>Rezept bearbeiten</h1></div>
    <div class="card-body">
        <form action="{{route('rezepte.update')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
             <div class="form-group">
                <label for="gericht">Gericht</label>
                <input type="string" class="form-control" id="gericht" name="gericht">
            </div>
            <div class="form-group">
                <label for="zutaten">Zutaten</label>
                <textarea class="form-control" id="zutaten" name="zutaten"></textarea>
            </div>
            <div class="form-group">
                <label for="zubereitung">Zubereitung</label>
                <textarea class="form-control" id="zubereitung" name="zubereitung" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Rezept speichern</button>
        </form>
    </div>
</div>

@endsection