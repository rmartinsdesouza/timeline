@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>

    @endforeach
</ul>
@endif

<form action="{{ route('projects.store') }}" method="post">

    @csrf
    <input type="text" name="name" id="name" value="{{ $project->name ?? old('name') }}" placeholder="Nome">
    <input type="text" name="description" id="description" value="{{ $project->description ?? old('description') }}"
        placeholder="description">
    <input type="text" name="owner_id" id="owner_id" value="{{ $project->owner_id ?? old('owner_id') }}"
        placeholder="owner_id">
    <input type="text" name="member_id" id="member_id" value="{{ $project->member_id ?? old('member_id') }}"
        placeholder="member_id">
    <input type="text" name="status_id" id="status_id" value="{{ $project->status_id ?? old('status_id') }}"
        placeholder="status_id">
    <input type="text" name="image" id="image" value="{{ $project->image ?? old('image') }}"
        placeholder="image">
    <input type="text" name="active" id="active" value="{{ $project->active ?? old('active') }}" placeholder="active">
    <button type="submit">Enviar</button>


</form>