@extends("layout")
@section("content")

<script>
		function find_text()
		{
			form1.action="{{route('gubun_one.index')}}";
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
                            <a href="{{route('gubun_one.create')}}{{$tmp}}" class="btn btn-info" style="font-size: 20px; padding: 3px 15px; color: white;">추가</a>

</div>

</form>
<br>

<!-- Page Heading -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-info">Gubun</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <td width="10%">번호</td>
                    <td width="20%">이름</td>
                </thead>

    @foreach($list as $row)
	
	<tr>
		<td>{{$row->id}}</td>
		<td><a class="text-info" href="{{ route('gubun_one.show', $row->id) }}{{$tmp}} ">{{$row->name}}</a></td>
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