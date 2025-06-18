@extends("layout")
@section("content")

<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Member Create</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
	<form name="form1" method="post" action="{{route('member_one.store')}}{{$tmp}}">
    @csrf
    <table class="table table-bordered" width="100%" cellspacing="0" >
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">번호</td>
			<td width="80%" align="left"></td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 이름</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="name" size="20" maxlength="20" value="{{old('name')}}" class="form-control form-control-sm">
				</div>

                <br>
				<span style="color: red;">@error('name') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 아이디</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="uid" size="20" maxlength="20" value="{{old('uid')}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('uid') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font> 암호</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="pwd" size="20" maxlength="20" value="{{old('pwd')}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('pwd') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">전화</div></td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="phone1" size="3" maxlength="3" value="" class="form-control form-control-sm">-
					<input type="text" name="phone2" size="4" maxlength="4" value="" class="form-control form-control-sm">-
					<input type="text" name="phone3" size="4" maxlength="4" value="" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">등급</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="radio" name="rank" value="0" checked>&nbsp;일반회원&nbsp;&nbsp;
					<input type="radio" name="rank" value="1">&nbsp;관리자
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
