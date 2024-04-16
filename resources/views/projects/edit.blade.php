@extends('layouts.app')

@section('title') Edit @endsection

@section('content')

    <form method="POST" action="{{route('projects.update', 1)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label  class="form-label">Priorty</label>
            <select name="priorty" class="form-select">
                <option value="High">High</option>
                <option value="Meduim">Meduim</option>
                <option value="Normal">Normal</option>
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="New">New</option>
                <option value="Development">Development</option>
                <option value="Testing">Testing</option>
                <option value="Finished">Finished</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="logoImage" class="form-label">Logo</label>
            <input name="logo" class="form-control" type="file" id="logoImage">
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" class="form-control"  rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>


@endsection
