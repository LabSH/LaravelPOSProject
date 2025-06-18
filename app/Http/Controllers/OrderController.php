<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product_one; 
use App\Models\Gubun_one;
use App\Models\Order_one;



class OrderController extends Controller{

    public function index(Request $reqeust)
    {   
        $gu_id = request('gubuns_row_id') ? request('gubuns_row_id') : null;

        $data['tmp'] = $this->qstring();

        $text1=request('text1');
        $data['text1'] = $text1;

        if($gu_id != null) {
            $data['list'] = $this->getlist_fillter($gu_id);
        }
        else {
            $data['list'] = $this->getlist($text1);
        }

        $data['gubuns_list'] = $this->getlist_gubun();


      return view('order_one.index', $data); 
    }

    public function store(Request $request)
    {
        $tmp = $this->qstring();
        $row = new Order_one; //product모델변수 row선언 Product는 테이블
                            // new는 추가 , 수정 : find , ...
        $this->save_row($request, $row);
        session()->flash('popup', '주문이 완료되었습니다.');
        return redirect('order_one'); //목록화면으로 이동
    }

    public function save_row(Request $request, $row){

        $count = $request->input("count");

        // Product_one 모델에서 product_id에 해당하는 가격을 가져옴
        $product_price = Product_one::where('id', $request->input("product_id"))->value('price');
        // ->value('price')는 지정된 열의 값을 직접 반환함
        
        $row->member_ones_id = $request->session()->get('id');
        
        $row->product_ones_id = $request->input("product_id");
        $row->count = $count;

        $row->coment = $request->input("coment") ? $request->input("coment") : null;

        
        
        // 총 가격 계산 (가격 * 수량)
        $row->total_price = $product_price * $count; // 총 가격 = 상품 가격 * 수량
        
        $row->save(); // 데이터베이스에 저장 (수정 또는 새 레코드 생성)
        
    }

    public function getlist($text1)
    {
    //use App\Models\Product; 
    $result = Product_one::where('product_ones.name', 'like', '%'.$text1.'%')
    ->orderby('product_ones.name', 'asc')
    ->paginate(100)
    ->appends(['text1' => $text1]);

    return $result;
    // use llluminate\Support\Facades\DB;
    // $sql = 'select * from products order by name';
    // result = DB::select($sql);
    // 위의 코드와 이 코드는 같은 의미임 선호하는건 지금사용즁인 코드.
    }
    
    public function getlist_fillter($gu_id) # 구분버튼 카테고리 필터 메서드
    {
    //use App\Models\Product; 
    $result = Product_one::where('gubuns_ones_id', $gu_id) // 조건 추가
        ->orderBy('name', 'asc') // 이름 기준 오름차순 정렬
        ->paginate(10); // 페이지네이션

    return $result; // 결과 반환


    // use llluminate\Support\Facades\DB;
    // $sql = 'select * from products order by name';
    // result = DB::select($sql);
    // 위의 코드와 이 코드는 같은 의미임 선호하는건 지금사용즁인 코드.
    }

    public function qstring()
    {
        $text1 = request("text1") ? request('text1'): "";
        $page = request('page') ? request('page'): "1";

        $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";

        return $tmp;
    }

    public function getlist_gubun(){
        $result = Gubun_one::orderby('name')->get();
        return $result;
    }
}


?>