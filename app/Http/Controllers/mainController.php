<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use App\Models\Book;
use App\Models\Book_Writer;
use Illuminate\Http\Request;

class mainController extends Controller
{
public function Writer_Add(){
    // Writer::create([
    // 'name' => 'Ramesh'
    // ]);
    // Writer::create([
    // 'name' => 'Suresh'
    // ]);
    // Writer::create([
    // 'name' => 'Ravi'
    // ]);
    // Writer::create([
    // 'name' => 'Dinesh'
    // ]);
    // $writer = new Writer();
    // $writer->name='Ravi';
    // $writer->save();
    // $bookid = ['1','2'];
    // $writer->book()->attach($bookid);
    // return "Writer Added";
}
public function Book_Add(){
    // Book::create([
    // 'name' => 'Laravel'
    // ]);
    // Book::create([
    // 'name' => 'PHP'
    // ]);
    // Book::create([
    // 'name' => 'Node'
    // ]);
    // Book::create([
    // 'name' => 'JAVA'
    // ]);
    // foreach(Book::all() as $e)
    // {
    //     $e->delete();
    // }
    return "Book Added";
}

public function Show_Book($wid){

    //get book based on writer id
    //find Writer Write Which book By ID
    $writer = Writer::find($wid)->book;
    return $writer;
}
public function Show_Writer($bid){

    //show writer base on book id

    $book = Book::find($bid)->writer;

    return $book;

}


}
