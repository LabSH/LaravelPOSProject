@extends("layout")
@section("content")

<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Product Information</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
	<form name="form1" method="POST" action="{{route('product_one.update', $row->id)}}{{$tmp}}">
    @csrf
    @method('PATCH')
    <table class="table table-bordered" width="100%" cellspacing="0" >
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;">번호</td>
			<td width="80%" align="left">{{$row->id}}</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>구분</td>
			<td width="80%" align="left">
            <div class="d-inline-flex">
					<select type="text" name="gubuns_ones_id" class="form-select form-select-sm">
						<option value = "">선택하세요</option>
						@foreach($list as $row1)
							@if($row->gubuns_ones_id == $row1->id)
								<option value = "{{$row1->id}}" selected>{{$row1->name}}</option>
							@else
								<option value = "{{$row1->id}}">{{$row1->name}}</option>
							@endif
						@endforeach
					</select>
				</div>

                <br>
				<span style="color: red;">@error('gubuns_ones_id') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>이름</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="name" size="20" maxlength="20" value="{{$row->name}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('name') {{$message}} @enderror</span>

			</td>
		</tr>
		<tr>
			<td width="20%" class="text-info" style="color: green; font-weight: bold;"><font color="red">*</font>가격</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="text" name="price" size="20" maxlength="20" value="{{$row->price}}" class="form-control form-control-sm">
				</div>
				
                <br>
				<span style="color: red;">@error('price') {{$message}} @enderror</span>

			</td>
		</tr>
        <tr>
			<td width="20%" class="text-info">사진</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">
					<input type="file" name="pic" size="20" maxlength="20" value="" class="form-control form-control-sm">
				</div>
				<br><br>
				<b>파일이름</b> : <?=$row->pic; ?> <br><br>
				@if($row->pic)
					<img src="{{ asset('/storage/product_img/' . $row->pic) }}" width="200" 
					class="img-fluid img-thumbnail mymargin5">
				@else
					<img src = "" width = "200" height = "150" class = "img-fluid img-thumbnail mymargin5">
				@endif
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
