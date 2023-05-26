@extends('pages.default')
@section('content')
<div class="container">
    <h3 class="mt-5">Catalogue Des Voitures</h3>
    <div class="row">
        <div class="col-md-3">
            @include('components.basic-card')
        </div>
    </div>
</div>
@endsection
