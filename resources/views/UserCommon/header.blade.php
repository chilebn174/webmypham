<header id="header">
    @include("UserCommon.topbar");

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="trang-chu" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#" style="pointer-events: none; cursor: default; color:black;">
                                    Danh mục sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($categorys as $catego)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens_{{$catego->id}}">
                                                    <span class="badge pull-right"></span>
                                                    {{$catego->name}}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="mens_{{$catego->id}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ol>
                                                    @foreach($catego->categoryChirldrent as $categoryChildrent)
                                                    <li>
                                                        <a href="{{route('category',['id'=>$categoryChildrent->id])}}">
                                                            {{$categoryChildrent->name}}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="contact">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="{{route('search')}}">
                        <input type="text" name="key" placeholder="Tìm kiếm sản phẩm" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>