<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static function getdata(){
        return [
            [
                "id"=> 1,
                "name"=> "tajine",
                "description"=> "fiehfihifhfihei",
                "ingrediant"=> "refe,frefe,ferfe"
            ],
            [
                "id"=> 2,
                "name"=> "tcscajine",
                "description"=> "fiehfihifhfihei",
                "ingrediant"=> "refe,frefe,ferfe",
            ],
            [
                "id"=> 3,
                "name"=> "tajicscsne",
                "description"=> "fiehfcsihifhfihei",
                "ingrediant"=> "refe,frefe,ferfe",
            ],

            
        ];
     }
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
        move_uploaded_file($_FILES["image"]["tmp_name"],'C:\xampp\htdocs\Recipe-Book\public\img\\'.$_FILES["image"]["name"]);
        $recipe =  new Recipe();
        
        $recipe->titre = $request->input('titre');
        $recipe->description = $request->input('description');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}