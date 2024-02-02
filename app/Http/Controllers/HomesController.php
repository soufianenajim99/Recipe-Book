<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomesController extends Controller
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
        return view("index",[
            'recipes'=> Recipe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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