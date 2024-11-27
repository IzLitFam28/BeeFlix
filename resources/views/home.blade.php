@extends('layout')
@section('content')

@session('success')
    <div class="alert alert-success">
        Movie Succesfully Added
    </div>
@endsession

@session('deleted')
    <div class="alert alert-success">
        Movie Succesfully Deleted
    </div>
@endsession

<div class="row d-flex justify-content-center">
    <div class="card" style="width: 45%; border: 0;">
        <img class="card-img-top" src="{{asset('storage/movie/beeflix-social.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <a href="{{ route('movie.add') }}" class="btn btn-dark btn-lg btn-block d-flex justify-content-center">add new movie</a>
        </div>
      </div>
</div>

<div class="row d-flex justify-content-evenly">
    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem; margin: 0; padding: 0;">
            <img class="card-img-top" src="{{ asset('storage/movie/' .$movie->photo) }}">
            <img class="card-img-top" src="{{ asset('storage/' .$movie->photo) }}">
            <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2">{{$movie->genre->name}}</h6>
            <p class="card-text">{{$movie->description}}</p>
            <br>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->publish_date->format('d-m-Y')}}</h6>
            <a href="{{ route('movie.delete', ['movie'=>$movie->id]) }}" class="btn btn-danger btn-block d-flex justify-content-center">delete</a>
            </div>
        </div>
    @endforeach
</div>
<br>
{{$movies->links()}}
@endsection
