<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product_one; 
use App\Models\Gubun_one;
use Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       //if (session()->get("rank")!=1) return redirect("/");
        $data['tmp'] = $this->qstring();

        $text1=request('text1');
        $data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
        
        

      return view('product_one.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['list'] = $this->getlist_gubun();
        $data['tmp'] = $this->qstring();
        return view('product_one.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function save_row(Request $request, $row){

        $request->validate([
            'gubuns_ones_id' => 'required|numeric',
            'name' => 'required|max:20',
            'price' => 'required|numeric'
        ],
        [
            'gubuns_ones_id.required' => '구분명은 필수입력입니다.',
            'price.required' => '단가는 필수입력입니다.',
            'name.required' => '이름는 필수입력입니다.',
            'name.max' => '20자 이내입니다.'
        ]);
        
        $row->gubuns_ones_id = $request->input("gubuns_ones_id");
        $row->name = $request->input("name");
        $row->price = $request->input("price");
       
   
        if($request->hasFile('pic')){
            $pic = $request->file('pic');
            $pic_name = $pic->getClientOriginalName(); // 파일이름
            $pic->storeAs('public/product_img', $pic_name); // 파일저장


            $img = Image::make($pic)
            ->resize(null, 200, function($constraint) { $constraint->aspectRatio();})
            ->save('storage/product_img/thumb/'.$pic_name);


            $row->pic = $pic_name;

        }else if($row->pic != null){
         
            $pic_name = $row->pic;

    // 기존 파일로부터 썸네일 다시 생성 및 저장
            $existingFilePath = public_path('storage/product_img/' . $pic_name);
            if (file_exists($existingFilePath)) {
             $img = Image::make($existingFilePath)
            ->resize(null, 200, function($constraint) { $constraint->aspectRatio(); })
            ->save(public_path('storage/product_img/thumb/' . $pic_name));
            } 
        }else{
            $pic_name = "";
        }

        $row->save(); // 알아서 sql문으로 바꿔서 저장해줌 , 수정이든 이 코드는 똑같음.
    }

    public function store(Request $request)
    {
        $tmp = $this->qstring();
        $row = new Product_one; //product모델변수 row선언 Product는 테이블
                            // new는 추가 , 수정 : find , ...
        $this->save_row($request, $row);
        return redirect('product_one'.$tmp); //목록화면으로 이동
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['tmp'] = $this->qstring();

        $data['row'] = Product_one::leftjoin('gubun_ones','product_ones.gubuns_ones_id','=','gubun_ones.id')->select('product_ones.*','gubun_ones.name as gubuns_name')->
        where('product_ones.id','=',$id)->first();
        return view('product_one.show',$data); // 여기에나오는 주소는 파일주소임.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['list'] = $this->getlist_gubun();
        $data['tmp'] = $this->qstring();
        $data['row'] = Product_one::find($id);
        return view('product_one.edit',$data); // 여기에나오는 주소는 파일주소임.
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
        $row = Product_one::find($id);//product모델변수 row선언 Product는 테이블
                            // new는 추가 , 수정 : find , ...
        $this->save_row($request, $row);
        $tmp = $this -> qstring();
        return redirect('product_one' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Product_one::find($id)->delete();
       $tmp = $this->qstring();
       return redirect('product_one' . $tmp);
    }

    public function getlist($text1)
    {
    //use App\Models\Product; 
    $result = Product_one::leftjoin('gubun_ones','product_ones.gubuns_ones_id','=','gubun_ones.id')->select('product_ones.*','gubun_ones.name as gubuns_name')->
    where('product_ones.name','like', '%'.$text1.'%')->orderby('product_ones.name', 'asc')->paginate(10)->appends(['text1' => $text1]);

    return $result;
    // use llluminate\Support\Facades\DB;
    // $sql = 'select * from products order by name';
    // result = DB::select($sql);
    // 위의 코드와 이 코드는 같은 의미임 선호하는건 지금사용즁인 코드.
    }
    
    public function getlist_gubun(){
        $result = Gubun_one::orderby('name')->get();
        return $result;
    }

    public function qstring()
    {
        $text1 = request("text1") ? request('text1'): "";
        $page = request('page') ? request('page'): "1";

        $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";

        return $tmp;
    }
    
}


