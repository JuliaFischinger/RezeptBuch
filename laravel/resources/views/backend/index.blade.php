@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @include('Partials.message')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
