<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BuyPlus(败家Shopping)@yield('title')</title>
    {{--<block name="seo">--}}
        {{--<meta name="description" content="BuyPlus(败家Shopping）" />--}}
        {{--<meta name="keywords" content= "BuyPlus(败家Shopping）" />--}}
    {{--</block>--}}

    <link href="/home/image/catalog/cart.png" rel="icon" />
    <link href="/home/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="/home/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/home/stylesheet/stylesheet.css" rel="stylesheet">
    <link href="/home/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/home/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />

</head>

<body class="common-home">
<nav id="top">
    <div class="container">
        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li>
                    <a href=""> <i class="fa fa-phone"></i>
                    </a>
                    <span class="hidden-xs hidden-sm hidden-md">{:getConfig('shop_telephone','000-000000000')}</span>
                </li>
                <li class="dropdown">
                    <if condition="$member">
                        <a href="" title="会员中心" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i>
                            <span class="hidden-xs hidden-sm hidden-md">{$member['name']}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="{:U('/logout')}">退出</a>
                            </li>
                            <li>
                                <a href="{:U('/center')}">我的账户</a>
                            </li>
                            <li>
                                <a href="{:U('/order')}">我的订单</a>
                            </li>
                            <li>
                                <a href="{:U('/collection')}">我的收藏</a>
                            </li>
                        </ul>
                        <else />
                        <a href="" title="会员中心" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i>
                            <span class="hidden-xs hidden-sm hidden-md">会员中心</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="{:U('/register')}">会员注册</a>
                            </li>
                            <li>
                                <a href="{:U('/login')}">会员登录</a>
                            </li>
                        </ul>
                    </if>
                </li>
                <li>
                    <a href="" id="wishlist-total" title="收藏（0）">
                        <i class="fa fa-heart"></i>
                        <span class="hidden-xs hidden-sm hidden-md">收藏（0）</span>
                    </a>
                </li>
                <li>
                    <a href="" title="购物车">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hidden-xs hidden-sm hidden-md">购物车</span>
                    </a>
                </li>
                <li>
                    <a href="" title="结账">
                        <i class="fa fa-share"></i>
                        <span class="hidden-xs hidden-sm hidden-md">结账</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="logo">
                    <a href="">
                        <img src="image/catalog/logo3.png" title="BuyPlus(败家Shopping）" alt="BuyPlus(败家Shopping）" class="img-responsive" />
                    </a>
                </div>
            </div>
            <div class="col-sm-8 mini-cart">
                <div id="cart">
                    <a href="" class="cart-info">
                  <span class="cart-icon">
                    <i class="fa fa-shopping-cart"></i>
                  </span>
                        <span id="cart-total">0 个商品 - ￥0.00</span>
                    </a>
                    <ul class="cart-content dropdown-menu hidden-sm hidden-xs">
                        <li>
                            <p class="text-center empty">您的购物车内没有商品！</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

@include('home.layouts.menu')
<div class="container">
    <!-- 面包屑导航 -->
    <block name="breadcrumb"></block>
    <div id="content" class="col-sm-12">
        @yield('content')
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h5>信息咨询</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="">关于我们</a>
                    </li>
                    <li>
                        <a href="">最新公告</a>
                    </li>
                    <li>
                        <a href="">隐私政策</a>
                    </li>
                    <li>
                        <a href="">条款及条件</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>客户服务</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="">联系我们</a>
                    </li>
                    <li>
                        <a href="">退换服务</a>
                    </li>
                    <li>
                        <a href="">网站地图</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>其他</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="">品牌专区</a>
                    </li>
                    <li>
                        <a href="">礼品券</a>
                    </li>
                    <li>
                        <a href="">加盟会员</a>
                    </li>
                    <li>
                        <a href="">特别优惠</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>会员中心</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="">会员中心</a>
                    </li>
                    <li>
                        <a href="">历史订单</a>
                    </li>
                    <li>
                        <a href="">收藏列表</a>
                    </li>
                    <li>
                        <a href="">订阅咨询</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>联系我们</h5>
                <ul class="list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fa fa-map-marker">&nbsp;</span>
                        </div>
                        <div class="text">科技有限公司</div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-phone">&nbsp;</span>
                        </div>
                        <div class="text">123456789</div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-envelope">&nbsp;</span>
                        </div>
                        <div class="text">kang@kang.com</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="powered">
            BuyPlush(败家Shopping) &copy; 2016
            <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备12345678号</a>
        </div>
    </div>
    <div class="go-top">
        <a href="#" class="scroll-top">
            <i class="fa fa-angle-up"></i>
            TOP
        </a>
    </div>
</footer>
<script src="/home/javascript/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/home/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/home/javascript/common.js" type="text/javascript"></script>
<script>
    $(function(){
        $('.sub-menu>li').mouseenter(function(e){
            $(this).parent().find('ul.second-menu').hide().eq($(this).index()).show();
        });

    });
</script>
@yield('js')
</body>
</html>