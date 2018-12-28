<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{

    public function index(Request $request){
        $author = $request->post('author');
        $data = Book::where('author', $author)
                ->get();
        $result = new \stdClass();
        if(!empty($data)){
            foreach($data as $bin => $d) {
                $result->author = $d->author;
                $result->books = [];
                foreach($data as $d2){
                    if($d->author == $d2->author){
                        $result->books[] = $d2->title;
                    }
                }
                break;
            }
        }
    }
}
