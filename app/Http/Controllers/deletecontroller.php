<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class deletecontroller extends Controller {
    public function index(){
        $items = DB::select('select * from item');
        return view('viewitem',['items'=>$items]);
    }
    public function destroy($id) {
        DB::delete('delete from item where id = ?',[$id]);
        echo "Record deleted successfully.
";
        echo '<a href = "/viewitem">Click Here</a> to go back.';
    }
}