<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class updatecontroller extends Controller {
    public function index(){
        $items = DB::select('select * from item');
        return view('viewitem',['items'=>$items]);
    }
    public function show($id) {
        $items = DB::select('select * from item where id = ?',[$id]);
        return view('itemupdate',['items'=>$items]);
    }
    public function edit(Request $request,$id) {
        $code = $request->input('code');
        $item = $request->input('item');
        $category = $request->input('category');
        $price = $request->input('price');
        $validate = $request->validate([
            'code' => ['required', 'string', 'max:255', 'unique:code'],
            'item' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
        ]);        
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update('update item set code = ?,item=?,category=?,price=? where id = ?',[$code,$item,$category,$price,$id]);
        echo "Record updated successfully.
";
        echo '<a href = "/viewitem">Click Here</a> to go back.';
    }
} 