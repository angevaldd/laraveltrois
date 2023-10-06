@extends('layout')

@section('title', 'home')

@section('content')

    <div class="d-flex flex-wrap">
        @foreach($posts as $post)
            <div class="col-md-4 py-3">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($post->title, 25) }}  </h5>
                        <span class="badge mb-1 badge-primary">{{ $post->category->name }}</span>
                        <p class="card-text">{{ Str::limit($post->content, 55) }}</p>
                        <div class="d-flex">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger ml-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent text-muted text-small border-0">
                        <small>Depuis le {{ $post->created_at->format('d M Y') }} par {{ $post->user->name }} </small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection
