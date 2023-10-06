@extends('layout')

@section('title', 'login')

@section('content')
    <div class="form-container w-50 m-auto">
        <form action="" method="post">
            @csrf
            @component('components.input', [
                'title' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'value' => 'admin@admin.com'
            ])
            @endcomponent
            @component('components.input', [
                'title' => 'Mot de passe',
                'name' => 'password',
                'type' => 'password',
                'value' => 'adminadmin'
            ])
            @endcomponent


            <button type="submit" class="btn btn-md btn-primary">login</button>
        </form>
    </div>
@endsection
