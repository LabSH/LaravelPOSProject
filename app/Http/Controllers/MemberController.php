<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member_one; 

class MemberController extends Controller{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

  
        $data['tmp'] = $this->qstring();

        $text1=request('text1');
        $data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);

      return view('member_one.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();
        return view('member_one.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function save_row(Request $request, $row){

        $request->validate([
            'uid' => 'required|max:20',
            'pwd' => 'required|max:20',
            'name' => 'required|max:20'
        ],
        [
            'uid.required' => '아이디는 필수입력입니다.',
            'pwd.required' => '암호는 필수입력입니다.',
            'name.required' => '이름는 필수입력입니다.',
            'uid.max' => '20자 이내입니다.',
            'pwd.max' => '20자 이내입니다.',
            'name.max' => '20자 이내입니다.',
        ]);
        

        $phone1 = $request->input("phone1");
        $phone2 = $request->input("phone2");
        $phone3 = $request->input("phone3");
        $phone = sprintf("%-3s%-4s%-4s",$phone1,$phone2,$phone3);

       

        $row->uid = $request->input("uid");
        $row->pwd = $request->input("pwd");
        $row->name = $request->input("name");
        $row->phone = $phone;
        $row->rank = $request->input("rank");

        $row->save(); // 알아서 sql문으로 바꿔서 저장해줌 , 수정이든 이 코드는 똑같음.
    }


    public function store(Request $request)
    {
        $tmp = $this->qstring();
        $row = new Member_one; //member모델변수 row선언 Member는 테이블
                            // new는 추가 , 수정 : find , ...
        $this->save_row($request, $row);
        return redirect('member_one'.$tmp); //목록화면으로 이동
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

        $data['row'] = Member_one::find($id);
        return view('member_one.show',$data); // 여기에나오는 주소는 파일주소임.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['tmp'] = $this->qstring();
        $data['row'] = Member_one::find($id);
        return view('member_one.edit',$data); // 여기에나오는 주소는 파일주소임.
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
        $row = Member_one::find($id);//member모델변수 row선언 Member는 테이블
                            // new는 추가 , 수정 : find , ...
        $this->save_row($request, $row);
        $tmp = $this -> qstring();
        return redirect('member_one' . $tmp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member_one::find($id)->delete();
       $tmp = $this->qstring();
       return redirect('member_one' . $tmp);
    }

    public function getlist($text1)
    {
    //use App\Models\Member; 
    $result = Member_one::where('name', 'like', '%' . $text1 . '%')->orderBy('name', 'asc')->paginate(10)->appends(['text1' => $text1]);
    return $result;
    // use llluminate\Support\Facades\DB;
    // $sql = 'select * from members order by name';
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

}






?>