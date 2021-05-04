@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        @auth()
            <div class="card mb-4">
                <div class="card-body shadow">
                    <form action="{{ route('posts') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <textarea class="form-control bg-light @error('body') is-invalid @enderror" placeholder="Post Something!"
                                name="body" id="body" style="height: 100px;"></textarea>
                            <label for="body">Post Something!</label>
                            @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        @endauth
        @if($posts->count())
            @foreach($posts as $post)
                <x-post :post="$post" />
            @endforeach
        {{ $posts->links() }}
        @else
        <div class="alert alert-warning text-center" role="alert">
            No posts were found
        </div>
        @endif
    </div>
</div>
@endsection