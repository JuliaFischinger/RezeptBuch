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
    <div class="card-header"><h1>Rezeptübersicht</h1></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            @foreach($rezeptes->all() as $rezepte)
                <tr>

                    <td>{{$rezepte->gericht}}</td>
                    <td>{{$rezepte->zutaten}}</td>
                    <td>{{$rezepte->zubereitung}}</td>
                    <td>{{$rezepte->user->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection