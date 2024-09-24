<?php

namespace App\Http\Controllers;

use App\Models\Copies;
use Illuminate\Http\Request;

class CopiesController extends Controller
{
    public function index(){
        $copies = response()->json(Copies::all());
        return $copies;
    }

    public function show($id){
        $copies = response()->json(Copies::find($id));
        return $copies;
    }

    public function delete($id){
        Copies::find($id)->delete();
    }

    public function post(Request $request){
        $copies = new Copies();
        $copies -> book_id = $request->book_id;
        $copies -> user_id = $request->user_id;
        $copies -> save();
    }

    public function update(Request $request, $id){
        $copies = Copies::find($id);
        $copies -> book_id = $request->book_id;
        $copies -> user_id = $request->user_id;
        $copies -> save();
    }
}
