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
            <thead>
            <tr>
                <th>ID</th>
                <th>Gericht</th>
                <th>Zutaten</th>
                <th>Zubereitung</th>
                <th>Autor</th>
                <th>erstellt am</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rezeptes->all() as $rezepte)
                <tr>
                    <td>{{$rezepte->id}}</td>
                    <td>{{$rezepte->gericht}}</td>
                    <td>{{$rezepte->zutaten}}</td>
                    <td>{{$rezepte->zubereitung}}</td>
                    <td>{{$rezepte->user->name}}</td>
                    <td>{{$rezepte->created_at->format('d.m.Y')}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="{{route('rezepte.edit', $rezepte->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                            <a href="{{route('frontend.show', $rezepte->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-file-alt"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection