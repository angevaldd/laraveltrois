@extends('layout')

@section('title', 'home')

@section('content')
    <div class="form-container w-50 m-auto">
        <form action="{{ route('posts.update', $post) }}" method="post">
            @method('PUT')
            @csrf
            @component('components.input', [
                'title' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'value' => $post->title
            ])
            @endcomponent
            @component('components.input', [
                'title' => 'Categories',
                'name' => 'category_id',
                'type' => 'select',
                'options' => $categories,
                'value' => $post->category_id
            ])
            @endcomponent


            @component('components.input', [
                'title' => 'Description',
                'name' => 'content',
                'type' => 'textarea',
                'value' => $post->content
            ])
            @endcomponent
            @component('components.input', [
                'title' => 'En ligne ?',
                'name' => 'online',
                'type' => 'checkbox',
                'value' => $post->online
            ])
            @endcomponent


            <button type="submit" class="btn btn-md btn-primary">Modifier</button>
        </form>
    </div>
@endsection

