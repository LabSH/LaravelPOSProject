<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>202012034_김승현</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

</head>
<body>

<?php
                
                
                if(!session("name")){
                    $admin_rank = 0;

                }elseif(session("rank") == 1){
                    $rank = "관리자";
                    $admin_rank = 1;
                }else{
                    $rank = "일반회원";
                    $admin_rank = 2;
                }

            ?>  
        <!-- Page Wrapper -->
        <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
             @if($admin_rank == 1)
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/main_one') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
                </div>
                <div class="sidebar-brand-text mx-3">LaraOrder<sup>one</sup></div>
            </a>
            @elseif($admin_rank == 2)
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/order_one') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
                </div>
                <div class="sidebar-brand-text mx-3">LaraOrder<sup>one</sup></div>
            </a>
            @else
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
                </div>
                <div class="sidebar-brand-text mx-3">LaraOrder<sup>one</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            @endif
            <!-- Nav Item - Dashboard -->
             

            @if(session("name"))
            <li class="nav-item active">
                <a class="nav-link" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
                    <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.6 3.6 0 0 0-.108-.563 2 2 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2 2 0 0 0-.16-.045 4 4 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.55 2.55 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361s.437 1.732-.36 2.531Z"/>
                     <path d="M5.205 10.787a7.6 7.6 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925"/>
                </svg>
                    <span>{{ session("name") }} ({{$rank}})</span></a> 

                    <form id="logout-form" action="{{ route('login_one.logout') }}" method="POST" style="display: none;">
                     @csrf
                     <input type="hidden" name="ac" value="1">
                    </form>
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">    
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-shield-fill-exclamation" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m-.55 8.502L7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0M8.002 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                    </svg>
                    로그아웃</a>
                
            </li>
            @else
            <li class="nav-item active">
                <a class="nav-link" href="{{route('login_one.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Login</span></a>
            </li>
            @endif

            <!-- Divider -->
            @if($admin_rank)

            <hr class="sidebar-divider">
           
            

    
            <!-- Heading -->
            <div class="sidebar-heading" style="font-size: 15px;">
                Order
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('order_one.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                </svg>
                    <span>주문 페이지</span></a>
            </li>
            @endif
            
            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Divider -->
             
            <hr class="sidebar-divider">


            @if($admin_rank == 1)
            <!-- Heading -->
            <div class="sidebar-heading" style="font-size: 15px;">
                Addmin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('main_one.index')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>주문 관리</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('member_one.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                </svg>
                    <span>Member</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('gubun_one.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11z"/>
                </svg>
                    <span>Gubun</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('product_one.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"/>
                </svg>
                    <span>Product</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            @endif
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

                
                <!-- Main Content -->
                <div id="content">

                
                <!-- Topbar -->
                
                <style>
/* 공통 스타일 */
.navbar {
    padding: 10px;
}
.card {
    margin-bottom: 15px;
}

/* 반응형 디자인 */
@media (max-width: 768px) {
    .col-xl-3, .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .navbar {
        flex-wrap: wrap;
        text-align: center;
    }
    .fa-2x {
        font-size: 2em;
    }
}

@media (max-width: 576px) {
    .text-xs {
        font-size: 16px;
    }
    .h5 {
        font-size: 18px;
    }
    .fa-2x {
        font-size: 1.5em;
    }
    .navbar {
        height: auto;
    }
    .card {
        padding: 10px;
    }
}
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow animated-slide-right" style="height: auto;">
    <?php
        # 리스트마다 id값을 가져와야하는데 ...
        $order_count = DB::table('order_ones')->count();
        $finish_count = DB::table('money1_ones')->sum('totalorder');
        $finish_money = DB::table('money1_ones')->sum('totalmoney');
    ?>

    @if($admin_rank == 0)
    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-warning shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 20px;">
                            <a class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 20px;" href="{{route('login_one.index')}}">
                                로그인을 해주세요.</a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($admin_rank == 1)
    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-danger shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" style="font-size: 20px;">현재 주문 수</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$order_count}} 건</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-warning shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 20px;">총 매출</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($finish_money)}} ₩</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-success shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 20px;">완료한 주문 수</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$finish_count}} 건</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($admin_rank == 2)
    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-danger shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1" style="font-size: 20px;">현재 대기 주문 수</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$order_count}} 건</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-1">
        <div class="card border-left-warning shadow h-80 py-0.5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 20px;">현재 예상 대기 시간</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{($order_count + 1) * 3}} 분</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</nav>

<style>
/* 기본적으로 애니메이션을 적용할 요소들에 대한 스타일 */
.animated-up {
    opacity: 0;  /* 처음에는 투명 */
    transform: translateY(50px);  /* 아래로 20px 위치에 배치 */
    animation: slideUp 0.5s ease-out forwards; /* 애니메이션 적용 */
}

/* 애니메이션 정의 */
@keyframes slideUp {
    to {
        opacity: 1;  /* 애니메이션이 끝날 때 완전히 불투명 */
        transform: translateY(0);  /* 원래 위치로 이동 */
    }
}

.animated-slide-right {
    opacity: 0;  /* 처음에는 투명 */
    transform: translateX(60%);  /* 오른쪽 밖에서 시작 */
    animation: slideRight 1.1s ease-out forwards; /* 애니메이션 적용 */
}

/* 애니메이션 정의 */
@keyframes slideRight {
    to {
        opacity: 1;  /* 애니메이션이 끝날 때 완전히 불투명 */
        transform: translateX(0);  /* 원래 위치로 이동 */
    }
}
</style>
                
                <!-- Begin Page Content -->
                <div class="container-fluid animated-up" >
                    @yield("content")
                </div>
            
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
  

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

<!-- My CSS & JavaScript-->
<link href="{{ asset('my/css/my.css') }}" rel="stylesheet">
<link href="{{ asset('my/css/bootstrap5-datetimepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('my/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('my/js/bootstrap5-datetimepicker.min.js') }}"></script>


</body>

</html>



