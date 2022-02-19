<h1> Project View</h1>
{{-- C:\wamp64\www\timeline\resources\views\projects\_partials\form.blade.php --}}


{{-- @extends('admin.layouts.app') --}}
{{-- @section('title', 'Listagem dos Projetos')
@section('module', 'Projetos')
@section('class-module')
@section('content') --}}

{{-- <form action="{{ route('projects.search') @isset }} @endisset" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form> --}}

{{-- <form action="{{ route('projects.store') }}" method="post">

    @csrf --}}

<div class="row">
    <div class="col-lg-12">
        {{-- <a href="{{ route('projects.create') @isset }} @endisset"> --}}
            {{-- @include('admin.layouts.btn-novo') --}}
    </div>

</div>

{{-- {{dd($project)}} --}}

{{-- {{$project}} --}}
{{-- {{$tela}} --}}
{{-- {{$origin}} --}}
{{-- {{Route::currentRouteAction()}} --}}

{{Route::currentRouteName()}}

{{-- Save --}}
<form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">


@include('projects._partials.form')