@extends('layouts.app')

@section('title') Index @endsection

@section('content')
    <div class="text-center">
        <a href="{{route('projects.create')}}" class="btn btn-success">Create Project</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Priorty</th>
            <th scope="col">status</th>
            <th scope="col">logo</th>
            <th scope="col">Action</th>
            
        </tr>
        </thead>
        <tbody>
         
        @foreach($projects as $project)
            <tr>
                <td>{{$project['id']}}</td>
                <td>{{$project['title']}}</td>
                <td>{{$project['Priorty']}}</td>
                <td>{{$project['status']}}</td>
                <td>{{$project['logo']}}</td>
                <td>
                    <a href="{{route('projects.show', $project['id'])}}" class="btn btn-info">View</a>
                    <a href="{{route('projects.edit', $project['id'])}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{route('projects.destroy', $project['id'])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection



