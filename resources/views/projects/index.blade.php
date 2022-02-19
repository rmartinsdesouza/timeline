<h1> Project View</h1>

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

<!-- NOVO -->
<div class="col-lg-12">
    <button><a href="{{ route('projects.create') }}"> Novo </a></button>
        {{-- @include('admin.layouts.btn-novo') --}}
</div>


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
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->owner_id }}</td>
                <td>{{ $project->member_id }}</td>
                {{-- <td><span class="badge-pending">{{ $project->status->name }}}</span></td> --}}
                <td>{{ $project->status_id }}</td>
                <td>{{ $project->image }}</td>
                <td>{{ $project->active }}</td>

                <td>
                    <span class="p-relative">
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm ">
                            Visualizar
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
                            Editar
                        </a>
                    </span>
                </td>
            </tr>
            @endforeach