@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Projects</h2>
        </div>
        <div class="pull-right">
            @can('project-create')
            <a class="btn btn-success btn-sm mb-2" href="{{ route('projects.create') }}"><i class="fa fa-plus"></i> Create New Project</a>
            @endcan
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($projects as $project)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $project->name }}</td>
        <td>{{ $project->detail }}</td>
        <td>
            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('projects.show',$project->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                @can('project-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('projects.edit',$project->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                @endcan

                @csrf
                @method('DELETE')

                @can('project-delete')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $projects->links() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection