@extends("layout")
@section("content")

<style>
	
</style>

<script>
		function find_text()
		{
			form1.action="{{route('member_one.index')}}";
			form1.submit();
		}
	</script>


<br>
 <!-- Begin Page Content -->
 <div class="container-fluid">

 <form name="form1" action="">
<div class="form-inline">
<input type="text"  name="text1" value="{{$text1}}" class="form-control border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button" onClick="find_text();">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>&nbsp;&nbsp;
                            <a href="{{route('member_one.create')}}{{$tmp}}" class="btn btn-info" style="font-size: 20px; padding: 3px 15px; color: white;">추가</a>

</div>

</form>
<br>

<!-- Page Heading -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Member</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <td width="10%">번호</td>
                    <td width="20%">이름</td>
                    <td width="20%">아이디</td>
                    <td width="20%">암호</td>
                    <td width="20%">전화</td>
                    <td width="10%">등급</td>
                </thead>

    @foreach($list as $row)
	<?php
		$phone1 = trim(substr($row->phone,0,3));
		$phone2 = trim(substr($row->phone,3,4));
		$phone3 = trim(substr($row->phone,7,4));
		$phone = $phone1."-".$phone2."-".$phone3;
		$rank = $row->rank == 0 ? '일반회원' : '관리자';
		// 이름 a태그 있는 주소는 memeber클래스의 show 함수를의미함
	?>

	<tr>
		<td>{{$row->id}}</td>
		<td><a class="text-info" href="{{ route('member_one.show', $row->id) }}{{$tmp}} ">{{$row->name}}</a></td>
		<td>{{$row->uid}}</td>
		<td>{{$row->pwd}}</td>
		<td>{{$phone}}</td>
		<td>{{$rank}}</td>
	</tr>
	@endforeach
   
    </table>
			<div class ="row">
				<div class ="col">
					{{$list->links('mypagination')}}
				</div>
			</div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

@endsection