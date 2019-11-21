@extends('layouts.frontend')
@section('content')

    @for($i=0;$i<20;$i++)
<div class="card mb-2">
    <div class="card-header">Rezepte</div>
    <div class="card-body">
        <div> Hier findest du alle deine Lieblingsrezepte.
        </div>
        <div> Hier findest du alle deine Lieblingsrezepte.
        </div>
        <div> Hier findest du alle deine Lieblingsrezepte.
        </div>
        <div> Hier findest du alle deine Lieblingsrezepte.
        </div>
        <div> Hier findest du alle deine Lieblingsrezepte.
        </div>
    </div>
</div>
    @endfor
@endsection