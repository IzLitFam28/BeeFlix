<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function homePage($genre_id=0){
        if($genre_id == 0){
            $movies = Movie::Paginate(4);
        }
        else{
            $movies = Movie::where('genre_id', $genre_id)->paginate(4);
        }

        $genres = Genre::all();

        $datas = [
            'movies'=>$movies,
            'genres'=>$genres
        ];

        return view('home', $datas);
    }

    public function addMovie(){
        $genres = Genre::all();

        return view('add_movie', ['genres'=>$genres]);
    }

    public function storeMovie(Request $request){


        $validated = $request->validate([
            'photo' => 'required|max:5000|image',
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'publish_date' => 'required|before_or_equal:today|date_format:Y-m-d'
        ]);

        $movie = new Movie();
        $movie->genre_id = $request->genre;
        $movie->title = $request->title;
        $movie->photo = $request->photo->store('movie', 'public');
        $movie->description = $request->description;
        $movie->publish_date = $request->publish_date;
        $movie->save();

        return redirect('/')->with('success', true);
    }

    public function deleteMovie(Movie $movie){
        if (file_exists(public_path('storage/movie/' . $movie->photo))) {
            unlink(public_path('storage/movie/' . $movie->photo));
        }else if (file_exists(public_path('storage/' . $movie->photo))) {
            unlink(public_path('storage/' . $movie->photo));
        }
        $movie->delete();

        return redirect('/')->with('deleted', true);
    }
}
