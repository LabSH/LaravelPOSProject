@extends("layout")
@section("content")

<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Member Information</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
	<form name="form1" method="POST" action="{{route('member_one.update', $row->id)}}{{$tmp}}">
    @csrf
    @method('PATCH')
    <table class="table table-bordered" width="100%" cellspacing="0" >
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">번호</td>
			<td width="80%" align="left">{{$row->id}}</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 이름</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="name" size="20" maxlength="20" value="{{$row->name}}" class="form-control form-control-sm">
				</div>

                <br>
				<span style="color: red;">@error('name') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 아이디</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="uid" size="20" maxlength="20" value="{{$row->uid}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('uid') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 암호</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="pwd" size="20" maxlength="20" value="{{$row->pwd}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('pwd') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>

        <?
			$phone1 = trim(substr($row->phone,0,3));
			$phone2 = trim(substr($row->phone,3,4));
			$phone3 = trim(substr($row->phone,7,4));
		?>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">전화</div></td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="phone1" size="3" maxlength="3" value="{{$phone1}}" class="form-control form-control-sm">-
					<input type="text" name="phone2" size="4" maxlength="4" value="{{$phone2}}" class="form-control form-control-sm">-
					<input type="text" name="phone3" size="4" maxlength="4" value="{{$phone3}}" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">등급</td>
			<td width="80%" align="left">
            <div class="d-inline-flex">

                @if($row->rank==0)
                    <input type="radio" name="rank" value="0" checked>&nbsp;일반회원&nbsp;&nbsp;
                    <input type="radio" name="rank" value="1">&nbsp;관리자
                @else
                    <input type="radio" name="rank" value="0">&nbsp;일반회원&nbsp;&nbsp;
                    <input type="radio" name="rank" value="1" checked>&nbsp;관리자
                @endif
            </div>
			</td>
		</tr>
	</table>
    </div>
	<div align="center">
		<input type="submit" value="저장" class="btn btn-info">&nbsp;
		<input type="button" value="이전화면" class="btn btn-secondary" onClick="history.back();">
	</div>
    </div>
    </div>
</div>

</div>
	</form>

@endsection
