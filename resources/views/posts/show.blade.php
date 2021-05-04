@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <x-post :post="$post" />
    </div>
</div>
@endsection