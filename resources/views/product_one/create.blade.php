
<!-------------------------------------------------------------->
<!-- 시작 : Content                                                                  -->
<!-------------------------------------------------------------->
@extends('layout')
@section('content')

<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Product Create</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">

	<form name="form1" method="post" action="{{route('product_one.store')}}{{$tmp}}" enctype="multipart/form-data">
    @csrf
	<table class="table table-sm table-bordered mymargin5">
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">번호</td>
			<td width="80%" align="left"></td>
		</tr>

		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>구분명</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<select name = 'gubuns_ones_id' class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<option value ="" selected>선택하세요</option>
				@foreach($list as $row)
					@if($row->id == old('gubuns_id'))
						<option value = "{{$row->id}}" selected>{{$row->name}}</option>
					@else
						<option value = "{{$row->id}}">{{$row->name}}</option>
					@endif
				@endforeach
					</select>
				</div>
				<br>@error('gubun') {{$message}} @enderror</br>
			</td>
		</tr>

		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>제품명</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="name" size="20" maxlength="20" value="{{old('name')}}" class="form-control form-control-sm">
				</div>
				<br>@error('name') {{$message}} @enderror</br>
			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>단가</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="price" size="20" maxlength="20" value="{{old('price')}}" class="form-control form-control-sm">
				</div>
				<br>@error('price') {{$message}} @enderror</br>
			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">사진</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="file" name="pic" size="20" maxlength="20" value="" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
	
	</table>
	<div align="center">
		<input type="submit" value="저장" class="btn btn-info">&nbsp;
		<input type="button" value="이전화면" class="btn btn-secondary" onClick="history.back();">
        </div>
    </div>
    </div>
</div>

	</form>
<!-------------------------------------------------------------->
<!-- 끝 : Content                                                                     -->
<!-------------------------------------------------------------->

@endsection