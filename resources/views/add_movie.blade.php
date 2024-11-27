@extends('layout')
@section('content')
<form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <select id="genre" name="genre" class="form-select" aria-label="Default select example">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>
        @error('genre')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">photo</label>
        <input type="file" name="photo" id="photo" class="form-control" placeholder="" />
        @error('photo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        @error('description')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="publish_date" class="form-label">Publish Date</label>
        <input type="date" class="form-control" name="publish_date" id="publish_date" value="{{old('publish_date')}}">
        @error('publish_date')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-dark">Submit</button>
    <br> <br>
    <a href="{{ route('home.index') }}" class="btn btn-danger">Back</a>
</form>
@endsection
