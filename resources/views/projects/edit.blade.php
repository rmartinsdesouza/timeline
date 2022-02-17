<h1> Project View</h1>
{{-- C:\wamp64\www\timeline\resources\views\projects\_partials\form.blade.php --}}

{{-- @include('_partials\form') --}}
{{-- @extends('admin.layouts.app') --}}
{{-- @section('title', 'Listagem dos Projetos')
@section('module', 'Projetos')
@section('class-module')
@section('content') --}}

{{-- <form action="{{ route('projects.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form> --}}
<div class="row">
    <div class="col-lg-12">
        {{-- <a href="{{ route('projects.create') }}"> --}}
            {{-- @include('admin.layouts.btn-novo') --}}
    </div>

</div>

{{-- {{dd($project)}} --}}
<!-- START GRID -->
<div class="users-table table-wrapper">
    <table class="posts-table">
        <thead>
            <tr class="users-table-info">
                
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Dono</th>
                <th>Mebros</th>
                <th>Status</th>
                <th>Image</th>
                <th>Ativo</th>
                <th colspan="2">Ação</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($projects as $project) --}}
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->owner_id }}</td>
                <td>{{ $project->member_id }}</td>
                <td>{{ $project->status_id }}</td>
                <td>{{ $project->image }}</td>
                <td>{{ $project->active }}</td>

                <td>
                    <span class="p-relative">
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm ">
                            <span class="material-icons">
                                search
                            </span>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
                            <span class="material-icons">
                                edit
                            </span>
                        </a>
                    </span>
                </td>
            </tr>
            {{-- @endforeach --}}