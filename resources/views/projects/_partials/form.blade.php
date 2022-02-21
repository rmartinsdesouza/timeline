@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>

    @endforeach
</ul>
@endif
{{Route::currentRouteName()}}

@if(route::currentRouteName() == 'projects.create')
    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
    @csrf
@elseif(route::currentRouteName() == 'projects.edit')
    <form action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
@elseif(route::currentRouteName() == 'projects.destroy')
    <form action="{{ route('projects.destroy', $project->id) }}" method="post" enctype="multipart/form-data">
        @method('delete')
        @csrf

@endif
<p>
        <label>ID</label><br>
        <input type="text" name="id" value="@isset($project){{ $project->id ?? old('$project->id')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Nome</label><br>
        <input type="text" name="name" value="@isset($project){{ $project->name ?? old('name')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Descrição</label><br>
        <input type="text" name="description" value="@isset($project){{ $project->description ?? old('description')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Dono</label><br>
        <input type="number" name="owner_id" value="@isset($project){{ $project->owner_id ?? old('owner_id')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Mebros</label><br>
        <input type="number" name="member_id" value="@isset($project){{ $project->member_id ?? old('member_id')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Status</label><br>
        <input type="number" name="status_id" value="@isset($project){{ $project->status_id ?? old('status_id')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Imagem</label><br>
        <input type="text" name="image" value="@isset($project){{ $project->image ?? old('image')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <p>
        <label>Ativo</label><br>
        <input type="number" name="active" value="@isset($project){{ $project->active ?? old('active')}}@endisset"
            {{Route::currentRouteName()==('projects.show') ? 'disabled' : '' }}>
    </p>
    <tr>
        @if(Route::currentRouteName() == ('projects.index'))
        <td>
            <span>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm ">
                    Visualizar
                </a>
            </span>        
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
                <span >
                        Alterar
                    </span>
                </a>
<button type="submit" class="btn btn-danger">Submit</button>
                            </td>
                            
                            @endif
                         
        
        
    </tr>
    @if(Route::currentRouteName() != 'projects.show')
        <button type="submit" class="btn btn-danger">Submit</button>
    @endif
    </form>

{{-- 
    <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>
        @csrf
        @method('DELETE')
    </form> --}}