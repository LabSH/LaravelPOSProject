@extends("layout")
@section("content")

<div class="container-fluid" style="margin-top: 1rem; margin-left: 0.5rem; margin-right: 0.2rem;"> <!-- 오른쪽 여백 더 줄임 -->
  <div class="card-container d-flex flex-nowrap" id="cardContainer" style="overflow-x: auto; padding: 1rem; scroll-behavior: smooth; gap: 0.5rem; margin-left: -25px; margin-right: -15px;"> <!-- 오른쪽 여백 더 줄임 -->
    @foreach($list as $row)
    <?php
        # 리스트마다 id값을 가져와야하는데 ...
        $product = DB::table('product_ones')->where('id', $row->product_ones_id)->first();
        $member = DB::table('member_ones')->where('id', $row->member_ones_id)->first();
        
        $iname = $product->pic ? $product->pic : "";
        $pname = $product->name;

    ?>
      <div class="card" style="width: 300px; height: 600px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
      <img src="{{ asset('/storage/product_img/thumb/'.$iname) }}" class="card-img-top" style="width: 100%; height: 170px; object-fit: contain; border: 2px solid #36b9cc; border-bottom: none;">


        <div class="card-body" style="height: 90px; display: flex; flex-direction: column; justify-content: space-between; border: 2px solid #36b9cc; border-bottom: none; border-top: none;">
          <span class="card-text" style="font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; margin-bottom: 10px; 
          font-weight: bold; ">요청사항</span>
          <span style="font-size: 0.7rem; color: #e74a3b;">{{$row->coment}}</span>
        </div>
        <ul class="list-group list-group-flush" style="padding: 5px; border: 2px solid #36b9cc; border-top: none; border-bottom: none;">
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">상품명 :&nbsp;</span>{{$product->name}}</li>
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">수량 : &nbsp;</span>{{$row->count}}</li>
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">가격 : &nbsp;</span>{{$row->total_price}}원</li>
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">회원이름 :&nbsp; </span>{{$member->name}}</li>
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">회원ID : &nbsp;</span>{{$member->uid}}</li>
          <li class="list-group-item" style="font-size: 0.8rem;"><span style="color: #e74a3b; font-weight: bold;">주문 일시 : &nbsp;</span>{{$row->created_at}}</li>
        </ul>
        <div class="card-body" style="text-align: center; padding: 10px; border: 2px solid #36b9cc; border-top: none;">

          <form action="{{ route('main_one.destroy', $row->id) }}" method="POST" style="display: inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" style="font-size: 0.8rem; padding: 3px 15px; color: white;" onClick="return confirm('주문을 취소하시겠습니까?');">
          <i class="fas fa-trash"></i>
          &nbsp;주문취소</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </form>

          <form method="POST" action="{{route('main_one.update', $row->id)}}" style="display: inline;">
          @csrf
          @method('PATCH')
          <input type="hidden" name="money" value="{{$row->total_price}}">
          <button type="submit" class="btn btn-info" style="font-size: 0.8rem; padding: 3px 15px; color: white;" onClick="return confirm('주문을 완료하시겠습니까?');">
          <i class="fas fa-check"></i>&nbsp;주문완료</button>
         
          </form>
        </div>
      </div>
    @endforeach
  </div>
</div>

<script>
  const cardContainer = document.getElementById('cardContainer');
  let isMouseDown = false;
  let startX;
  let scrollLeft;

  cardContainer.addEventListener('mousedown', (e) => {
    isMouseDown = true;
    startX = e.pageX - cardContainer.offsetLeft;
    scrollLeft = cardContainer.scrollLeft;
  });

  cardContainer.addEventListener('mouseleave', () => {
    isMouseDown = false;
  });

  cardContainer.addEventListener('mouseup', () => {
    isMouseDown = false;
  });

  cardContainer.addEventListener('mousemove', (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const x = e.pageX - cardContainer.offsetLeft;
    const walk = (x - startX) * 2; // 속도 조절
    cardContainer.scrollLeft = scrollLeft - walk;
  });
</script>

<style>

  /* 카드 컨테이너의 가로 스크롤에 간격 추가 */
  .card-container {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
  }

  .card {
    /* 카드 간의 적절한 간격 추가 */
    margin-right: 0.3rem; /* 오른쪽 간격을 더 줄임 */
    flex-shrink: 0; /* 카드가 축소되지 않도록 설정 */
  }
</style>

@endsection
