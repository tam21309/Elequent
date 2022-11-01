<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = Book::all();
        $items = DB::table('books')->get();//query builder
        dd($items->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //eloquent
        $book = new Book();
        $book->name = 'Chiec thuyen ngoai xa';
        $book->category_id = 1;
        $book->price = 20000;
        $book->description = 'Van Hoc';
        $book->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = Book::find($id);
        $item = DB::table('books')->where('id','=',$id)->first();
        dd($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Eloquent
        $book = Book::find($id);
        $book->name = 'Chiec thuyen ngoai xa 2';
        $book->category_id = 1;
        $book->price = 20000;
        $book->description = 'Van Hoc';
        $book->save();
        
        // cách 2
        // DB::table('books')
        //       ->where('id', $id)
        //       ->update([
        //         'name'=> 'Chiec thuyen ngoai xa 3',
        //         'price'=> 25000
        //       ]);


        //xóa
        // $book = Book::find($id);
        // $book->delete();

        DB::table('books')->where('id', '=', $id)->delete();


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
