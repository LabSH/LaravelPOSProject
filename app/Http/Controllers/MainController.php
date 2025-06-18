<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order_one;
use App\Models\Product_one;
use App\Models\Money1_one;



class MainController extends Controller{

    public function index()
    {   
      $data['list'] = $this->getlist();
      return view('main_one.index', $data);
    }

    public function getlist() // 구분 버튼 카테고리 필터 메서드
    {
        $result = Order_one::orderBy('created_at', 'asc')->get();
        return $result; // 결과 반환
    }

    public function destroy($id)
    {
       Order_one::find($id)->delete();
       return redirect('main_one');
    }

    public function update($id, Request $request)
    {
       $row = Money1_one::where('id', 1)->first();

       $money1 = $request->input("money");
       $money2 = $row->totalmoney;
       $money = $money1 + $money2;

       $row->totalmoney = $money;
       $row->totalorder += 1;
       $this->destroy($id);
       $row->save();

       return redirect('main_one');
    }
}


?>