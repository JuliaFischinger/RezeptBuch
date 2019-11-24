@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Willkommen bei <strong>RezeptBuch</strong>.</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Du hast dich erfolgreich eingeloggt.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mt-2">
    <div class="pull-right">
                <a class="btn btn-success mb-4" href="{{ route('frontend.index') }}"> Zur Rezeptübersicht.</a>
            </div>  
        </div>
    </div>
</div>
@endsection
