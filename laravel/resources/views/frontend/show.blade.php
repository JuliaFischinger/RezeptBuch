@extends('layouts.frontend')
@section('content')

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

@auth
<div class="card mb-2">
    <div class="card-header"><h5>Kommentar einfügen</h5></div>
    <div class="card-body">
      @include('Partials.message')
      <form method="POST" action="{{route('comment.store')}}">
        @csrf

        <input type="hidden" name="rezept_id" value="{{$rezept->id}}">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    
        <div class="row">
          <div class="col-md-12 mb-2">
            <label for="comment" class="col-form-label text-md-right">{{__('Kommentar')}}</label>
            <textarea id="comment" rows="5" type="comment" class="form-control{{$errors->has('comment') ? 'is-invalid': ''}}" name="comment" required></textarea>
            @if ($errors->has('comment'))
              <span class="invalide-feedback">
            <strong>{{$errors->first('comment')}}</strong>
          </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
              {{__('Submit Comment')}}
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endauth

<div class="card mb-2">
    <div class="card-header"><h3>Kommentare</h3></div>
    <div class="card-body">
    <div class="list-group">
      <div class="list-group-item">

      </div>
</div>
</div>

@endsection