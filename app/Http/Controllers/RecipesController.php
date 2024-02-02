<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("recipe.createRecipe");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'titre'=>'required',
             'description'=> 'required',
             'image'=> 'required',
        ]);
        move_uploaded_file($_FILES["image"]["tmp_name"],'C:\laragon\www\Recipe-Book\public\img\\'.$_FILES["image"]["name"]);
        $recipe =  new Recipe();
        
        $recipe->titre = strip_tags($request->input('titre'));
        $recipe->description = strip_tags($request->input('description'));
        $recipe ->image = 'img/'.$_FILES["image"]["name"];

        $recipe->save();

        return redirect()->route('home.index');


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe= Recipe::findOrFail($id);
        
        return view("recipe.recipePage",[
            'recipe'=> $recipe
        ]);
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe= Recipe::findOrFail($id);
        return view("recipe.editRecipe",[
            'recipe'=> $recipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre'=>'required',
            'description'=> 'required',
            'image'=> 'required',
       ]);

       $recipe= Recipe::findOrFail($id);
       move_uploaded_file($_FILES["image"]["tmp_name"],'C:\laragon\www\Recipe-Book\public\img\\'.$_FILES["image"]["name"]);
       $recipe->titre = strip_tags($request->input('titre'));
       $recipe->description = strip_tags($request->input('description'));
       $recipe ->image = 'img/'.$_FILES["image"]["name"];

       $recipe->save();

       return redirect()->route('recipe.show',['recipe'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe= Recipe::findOrFail($id);
 
        $recipe->delete();
        return redirect()->route('home.index');
    }
}