@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card mb-5 shadow">
            <div class="card-header text-center text-white bg-dark">
                <h4>{{ $user->name }}</h4>
            </div>
            <div class="card-body">
                <div class="badge bg-info me-2">
                    Posted: {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}
                </div>
                <div class="badge bg-primary">
                    Received: {{ $receivedLikes }} {{ Str::plural('like', $receivedLikes) }}
                </div>
            </div>
        </div>
        @if($posts->count())
            @foreach($posts as $post)
                <x-post :post="$post" />
            @endforeach
        {{ $posts->links() }}
        @else
        <div class="alert alert-warning text-center" role="alert">
            {{ $user->name }} does not have any posts
        </div>
        @endif
    </div>
</div>
@endsection