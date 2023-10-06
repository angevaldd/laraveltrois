@extends('layout')

@section('title', 'home')

@section('content')
    <div class="form-container w-50 m-auto">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            @component('components.input', [
                'title' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'value' => 'un titre de test'
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
                'value' => "une description de test"
            ])
            @endcomponent
            @component('components.input', [
                'title' => 'En ligne ?',
                'name' => 'online',
                'type' => 'checkbox',
                'value' => True
            ])
            @endcomponent


            <button type="submit" class="btn btn-md btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
