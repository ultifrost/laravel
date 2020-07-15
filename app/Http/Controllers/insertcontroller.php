<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class insertcontroller extends Controller {
    public function insertform(){
        return view('insertitem');
    }
    
    public function insert(Request $request){
        $code = $request->input('code');
        $item = $request->input('item');
        $category = $request->input('category');
        $price = $request->input('price');        
        $validate = $request->validate([
            'code' => ['required', 'string', 'max:255'],
            'item' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
        ]);        
        $data=array('code'=>$code,"item"=>$item,"category"=>$category,"price"=>$price);
        DB::table('item')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}