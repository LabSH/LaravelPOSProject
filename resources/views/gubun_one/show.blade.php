
<!-------------------------------------------------------------->
<!-- 시작 : Content                                                                  -->
<!-------------------------------------------------------------->
@extends("layout")
@section("content")

<br>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Gubun Information</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0" >
                <tr>
                    <td width="20%" class="text-info" style="color: green; font-weight: bold;">번호</td>
                    <td width="80%" align="left">{{$row->id}}</td>
                </tr>
                <tr>
                    <td class="text-info" style="color: black; font-weight: bold;">이름</td>
                    <td align="left">{{$row->name}}</td>
                </tr>
               
            </table>
        </div>
        <div align="center" style="margin-top: 20px;">
            <a href="{{ route('gubun_one.edit', $row->id) }}" class="btn btn-info" style="color: white;">수정</a>
            <form action="{{ route('gubun_one.destroy', $row->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onClick="return confirm('삭제하시겠습니까?');">삭제</button>
            </form>
            <button class="btn btn-secondary" onClick="history.back();" style="margin-left: 10px;">뒤로가기</button>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection

 

