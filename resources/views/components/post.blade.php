@props(['post' => $post])

<div class="card shadow rounded mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between">
        <a href="{{ route('users.posts', $post->user) }}" class="text-white text-decoration-none">{{ $post->user->username }}</a>
        <span class="badge bg-info">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <div class="card-body">
        {{ $post->body }}
    </div>
    <div class="card-footer bg-white d-flex flex-row align-items-center justify-content-between">
        <div class="d-flex flex-row align-items-center">
            @auth()
                @if(!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="me-2">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-info">
                            <i class="fas fa-thumbs-up"></i> Like
                        </button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="me-2">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-thumbs-down"></i> Unlike
                        </button>
                    </form>
                @endif
            @endauth
            <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        </div>
        <div class="d-flex flex-row align-items-center">
            @if(!Route::is('posts.show') )
                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-dark me-2">Show more</a>
            @endif
            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </form>
            @endcan
        </div>
    </div>
</div>