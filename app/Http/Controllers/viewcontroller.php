<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class viewcontroller extends Controller {
    public function index(){
        $items = DB::select('select * from item');
        return view('viewitem',['items'=>$items]);
    }
}