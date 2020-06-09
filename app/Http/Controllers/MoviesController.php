<?php

namespace App\Http\Controllers;
//namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Models\MOviess;

class MoviesController extends Controller {
  public function submit(MovieRequest $req) {

    $movies = new MOviess();
    $movies->Title = $req->input('Title');
    $movies->Gender = $req->input('Gender');
    $movies->Cover = $req->input('cover');
    $movies->descriprion= $req->input('descriprion');
    $movies->ProdCountry = $req->input('prodCountry');

    $movies->save();

    return redirect()->route('home')->with('success','The movie has been added');
  }
  public function allDate(){
    $moviesAll =new MOviess;
    // dd($movies);
    return view('allMoviesFromDB',['data' => $moviesAll->orderBy('id','asc')->get()]);
  }
  public function movieDesc($id){
    $moviesAll =new MOviess;
    return view('one-message',['data' => $moviesAll->find($id)]);
  }
  public function movieEdit($id){
    $moviesAll =new MOviess;
    return view('editMovie',['data' => $moviesAll->find($id)]);
  }


  public function movieEditSave($id, MovieRequest $req) {

    $movies = MOviess::find($id);
    $movies->Title = $req->input('Title');
    $movies->Gender = $req->input('Gender');
    $movies->Cover = $req->input('cover');
    $movies->descriprion= $req->input('descriprion');
    $movies->ProdCountry = $req->input('prodCountry');

    $movies->save();

    return redirect()->route('moovies-date', $id)->with('success','The movie has been ubdate');
  }
  public function rearch(Request $request){
    $search= $request->get('search');
    $posts=DB::table('$data')->where('title','like','%',$search,'%');
    return view('allMoviesFromDB', ['data' => $posts]);
  }
  public function movieDelete($id){
    MOviess::find($id)->delete();
    return redirect()->route('moovies-date')->with('success','The movie has been successfully deleted');
  }
}
