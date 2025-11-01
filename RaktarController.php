<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Raktar;
use Illuminate\Http\Request;

class RaktarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Raktar::all();
        return response() -> json($book);
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
            $validator = Validator::make($request -> all(), [
                "title" => 'required|string|max:100',
                "author" => 'required|string|max:100',
                "language" => 'required|string|max:30',
                "category" => 'required|string|max:100',
                "publisher" => 'required|string|max:100',
                "release_year" => ['required','numeric', "min:1900", "max:2025"],
                "price" => ['required','numeric', "min:1"],
                "quantity" => ['required','numeric', "min:0", "max:100"],
            ],[
                'title.required' => 'A cím megadása kötelező!',
                'author.required' => 'Az író megadása kötelező!',
                'language.required' => 'A nyelv megadása kötelező!',
                'category.required' => 'A kategória megadása kötelező!',
                'publisher.required' => 'A kiadó megadása kötelező!',
                'release_year.min' => 'A megjelenés éve nem lehet 1900 előtti!',
                'release_year.max' => 'A megjelenés éve nem lehet 2025 utáni!',
                'price.min' => 'Az ár nem lehet negatív vagy 0!',
                'quantity.min' => 'A mennyiség minimum 0 kell legyen!',
                'quantity.max' => 'A mennyiség maximum 100 lehet!',
            ]);
            
        if($validator -> fails()) {
            return response() ->json([
                "success" => false,
                'message' => 'Adatok nem megfelelőek!',
                'errors' => $validator-> errors()->toArray()
            ], 422);
        }

        $newRecord = new Raktar();

        $newRecord -> title = $request -> title;
        $newRecord -> author = $request -> author;
        $newRecord -> language = $request -> language;
        $newRecord -> category = $request -> category;
        $newRecord -> publisher = $request -> publisher;
        $newRecord -> release_year = $request -> release_year;
        $newRecord -> price = $request -> price;
        $newRecord -> quantity = $request -> quantity;

        return response() -> json(['success' => true, 'message' => 'Sikeres mentés'],201);

    }

    /**
     * Display the specified resource.
     */
    public function showCat(string $category)
    {
        $book = Raktar::where('category', $category) -> get();

        if (empty($category)){
            return response() -> json(["Message" => "Nincs ilyen kategória."],404);
        }
        else {
            return response() -> json($book);
        }
    }
    public function showAuthor(string $author)
    {
        $book = Raktar::where('author', $author) -> get();

        if (empty($author)){
            return response() -> json(["Message" => "Nincs ilyen kategória."],404);
        }
        else {
            return response() -> json($book);
        }
    }

        public function showPublisher(string $publisher)
    {
        $book = Raktar::where('publisher', $publisher) -> get();

        if (empty($publisher)){
            return response() -> json(["Message" => "Nincs ilyen kategória."],404);
        }
        else {
            return response() -> json($book);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raktar $raktar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Raktar $raktar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raktar $raktar)
    {
        //
    }
}
