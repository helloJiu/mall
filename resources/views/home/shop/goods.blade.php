@extends('home.layouts.app')

{{--<block name="seo">--}}
	{{--<meta name="description" content="{$goods['meta_description']}" />--}}
	{{--<meta name="keywords" content="{$goods['meta_keywords']}" />--}}
{{--</block>--}}

{{--<block name="breadcrumb">--}}
	{{--<ul class="breadcrumb">--}}
	  {{--<li>--}}
	    {{--<a href="{:U('/index')}">--}}
	      {{--<i class="fa fa-home"></i>--}}
	    {{--</a>--}}
	  {{--</li>--}}
	  {{--<volist name="breadcrumb" id="item">--}}
		{{--<li>--}}
		 {{--<a href="{:U('/category/'.$item['category_id'])}">{$item['title']}</a>--}}
		{{--</li>--}}
	  {{--</volist>--}}
	  {{--<li>--}}
	  	{{--<a href="javascript:;">{$goods['name']}</a>--}}
	  {{--</li>--}}
	{{--</ul>--}}
{{--</block>--}}

@section('content')
	<div class="row">
	  <div id="content" class="product-detail col-sm-12">
	    <div class="row">
	      <div class="col-sm-5">
	        <!--elevate zoom start-->
	        <div class="elevate-zoom-wrapper">
	          	<div class="elevate-zoom-preview">
	                <a href="javascript:;">
	                    <img id="elevate-zoom" src="__PUBLIC__/Thumb/{$image_list[0]['image_medium']}" data-zoom-image="__PUBLIC__/Thumb/{$image_list[0]['image_big']}" class="img-responsive"></a>
	            </div>

	            <!-- 小图列表 -->
	            <div id="product-thumbnail-gallery">
	                <volist name="image_list" id="image">
	                    <a data-zoom-image="__PUBLIC__/Thumb/{$image['image_big']}" data-image="__PUBLIC__/Thumb/{$image['image_medium']}" data-upate="" class="elevatezoom-gallery <if condition="$i eq 1">active</if> href="__PUBLIC__/Thumb/{$image['image_big']}">
	                        <img src="__PUBLIC__/Thumb/{$image['image_small']}" style="max-height:60px; max-width:60px">"
	                    </a>
	                </volist>
	            </div>
	        </div>
	        <!--elevate zoom end--> </div>
	      <div class="col-sm-7 product-info">
	        <h1>{$goods['name']}</h1>
	        <ul class="product-brief-wrapper">
	          <li>
	            <span>奖励积分</span>
	            0
	          </li>
	          <li>
	            <span>库存状态</span>
	            有现货
	          </li>
	        </ul>
	        <div class="product-price-wrapper">
	          <span class="price-new">￥{$goods['price']}</span>
	          <span class="price-old">￥9999999.99</span>
	          <!-- <span>消费积分 100</span> -->
	        </div>
	        <hr>
	        <div id="product">
	          <h3>选项及配件</h3>
                <volist name="option_list" id="option" key="optionI">
                    <div class="form-group required order-{$optionI}" order="{$optionI}" data-order="{$optionI}">
                        <label class="control-label">{$option['attribute_title']}</label>
                        <div id="input-option{$option['goods_attribute_id']}">
                            <volist name="option['option']" id="value">                            
                            <label class="radio option">
                                <input type="radio" name="option[{$value['goods_attribute_id']}]" value="{$value['attribute_option_id']}" />
                                <span>{$value['title']}</span>
                            </label>
                            </volist>
                           
                        </div>
                    </div>
                </volist>
              <h3>配件</h3>
	          <!-- <div class="form-group required">
	            <label class="control-label">Checkbox</label>
	            <div id="input-option233">
	              <label class="checkbox">
	                <input name="option[233][]" value="27" type="checkbox">
	                <span>Checkbox 1</span>
	              </label>
	              <label class="checkbox">
	                <input name="option[233][]" value="25" type="checkbox">
	                <span>Checkbox 2</span>
	              </label>
	              <label class="checkbox">
	                <input name="option[233][]" value="26" type="checkbox">
	                <span>Checkbox 3</span>
	              </label>
	              <label class="checkbox">
	                <input name="option[233][]" value="24" type="checkbox">
	                <span>Checkbox 4</span>
	              </label>
	            </div>
	          </div> -->
	          <hr>

	          <form action="{:U('/addGoods')}" id="form-cart" method="post">
	          	  <input type="hidden" name="goods_id" value="{$goods['goods_id']}">
	          	  <input type="hidden" name="goods_product_id" value="0">
		          <div class="product-cart-action">
		            <div class="quantity-input-wrapper">
		              <input name="buy_quantity" value="1" placeholder="数量" id="input-quantity" class="form-control" type="text">
		              <a href="#" class="quantity-up">+</a>
		              <a href="#" class="quantity-down">-</a>
		            </div>
		            <button type="submit" id="button-cart" data-loading-text="正在加载..." class="btn btn-primary">加入购物车</button>
		          </div>
		        </div>
		       </form>
	        <div class="wishlist-share">
	          <a onclick="wishlist.add('61');">
	            <i class="fa fa-heart"></i>
	            收藏
	          </a>
	          <a onclick="compare.add('61');">
	            <i class="fa fa-link"></i>
	            对比
	          </a>
	        </div>
	        <div class="rating">
	          <p>
	            <span class="fa fa-stack">
	              <i class="fa fa-star on fa-stack-1x"></i>
	            </span>
	            <span class="fa fa-stack">
	              <i class="fa fa-star on fa-stack-1x"></i>
	            </span>
	            <span class="fa fa-stack">
	              <i class="fa fa-star on fa-stack-1x"></i>
	            </span>
	            <span class="fa fa-stack">
	              <i class="fa fa-star on fa-stack-1x"></i>
	            </span>
	            <span class="fa fa-stack">
	              <i class="fa fa-star off fa-stack-1x"></i>
	            </span>
	            <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 评价</a>
	            /
	            <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">如果您对本商品有什么问题或经验，请在此留下您的意见和建议！</a>
	          </p>
	          <hr>
	          <!-- Baidu Share BEGIN -->
	          <div class="bdsharebuttonbox">
	            <a href="#" class="bds_more" data-cmd="more">分享到：</a>
	            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
	            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
	            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
	            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a>
	            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
	          </div>
	          <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	          <!-- Baidu Share END --> 
	        </div>
	      </div>
	    </div>
	    <ul class="nav nav-tabs">
	      <li class="active">
	        <a href="#tab-description" data-toggle="tab">商品描述</a>
	      </li>
	      <li>
	        <a href="#tab-specification" data-toggle="tab">商品属性</a>
	      </li>
	      <li>
	        <a href="#tab-review" data-toggle="tab">商品评价 (已有N条评价)</a>
	      </li>
	    </ul>
	    <div class="tab-content">
	      <div class="tab-pane active" id="tab-description">
	        <img src="image/catalog/gd/product/yanjing3-xq1.jpg">
	      </div>

	      <div class="tab-pane" id="tab-specification">
	        <table class="table table-bordered">
	          <thead>
	            <tr>
	              <td colspan="2"> <strong>Processor</strong>
	              </td>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Clockspeed</td>
	              <td>100mhz</td>
	            </tr>
	          </tbody>
	        </table>
	      </div>

	      <div class="tab-pane" id="tab-review">
	        <form class="form-horizontal" id="form-review">
	          <div id="review"></div>
	          <h2>如果您对本商品有什么问题或经验，请在此留下您的意见和建议！</h2>
	          <div class="form-group required">
	            <div class="col-sm-12">
	              <label class="control-label" for="input-name">您的姓名</label>
	              <input name="name" value="" id="input-name" class="form-control" type="text">
	            </div>
	          </div>
	          <div class="form-group required">
	            <div class="col-sm-12">
	              <label class="control-label" for="input-review">您的评价</label>
	              <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
	              <div class="help-block">
	                <span class="text-danger">注意</span>
	                评论内容不支持HTML代码！
	              </div>
	            </div>
	          </div>
	          <div class="form-group required">
	            <div class="col-sm-12">
	              <label class="control-label">顾客评分</label>
	              &nbsp;&nbsp;&nbsp; 差评&nbsp;
	              <input name="rating" value="1" type="radio">
	              &nbsp;
	              <input name="rating" value="2" type="radio">
	              &nbsp;
	              <input name="rating" value="3" type="radio">
	              &nbsp;
	              <input name="rating" value="4" type="radio">
	              &nbsp;
	              <input name="rating" value="5" type="radio">
	              &nbsp;好评
	            </div>
	          </div>
	          <div class="buttons clearfix">
	            <div class="pull-right">
	              <button type="button" id="button-review" data-loading-text="正在加载..." class="btn btn-primary">继续</button>
	            </div>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('js')
	<script src="__PUBLIC__/Home/elevateZoom/jquery.elevateZoom.min.js"></script>
	<script src="__PUBLIC__/Home/fancybox/jquery.fancybox.js"></script>
	<script>
        $(document).ready(function(){
          if ($(window).width() >= 768) {
            $('#elevate-zoom').elevateZoom({
                zoomWindowFadeIn: 500,//镜头窗口淡入速度 
                zoomWindowFadeOut: 500,//镜头窗口淡出速度 
                lensFadeIn: 500,//透镜淡入速度 
                lensFadeOut: 500,//透镜淡出速度 
                // lensShape: 'basic', lensSize: 150,
                zoomWindowOffetx: 10,
                // zoomWindowWidth: 450, zoomWindowHeight: 450,
                borderSize: 1,
                borderColour: '#eaeaea',
                gallery: 'product-thumbnail-gallery',
                galleryActiveClass: 'active',
                cursor:'pointer',
            });
            $('#elevate-zoom').bind('click', function(e) {
              var ez = $('#elevate-zoom').data('elevateZoom');
                $.fancybox(ez.getGalleryList());
              return false;
            });
          } else {
            $('.elevatezoom-gallery').fancybox();
            $('.elevate-zoom-preview a').bind('click', function(e) {
              $('.elevatezoom-gallery').eq(0).trigger('click');
              return false;
            });
          }
        });
    </script>
    <script>
    $(function(){
    	var url = '{:U('ajax',['operate'=>'getProduct'])}';
    	var data = {
    		'goods_id' : {$goods['goods_id']}
    	};

    	//发出ajax请求
    	$.get(url,data,function(response){
    		if(response.error == 0){
    			console.log(response.rows);//全部的货品列表,以及货品对应的选项值
    			var attribute_option_id_list = [];
    			var product_option_list = [];

    			$.each(response.rows,function(index,value){
    				//整理出所有的可用货品选项组合
    				//现获取全部可能的货品选项ID
    				//value每个货品
    				var product_option = [];
    				$.each(value.option,function(i,v){
    					//v就是每个option
    					attribute_option_id_list.push(v.attribute_option_id);
    					product_option.push(v.attribute_option_id);
    				});
    				product_option_list.push(product_option);
    			});
    			console.log(product_option_list);
    			// console.log(attribute_option_id_list);
    			// 过滤出所有可能的选项
    			$('input[name^="option["]').each(function(i){
    				//判断是否存在与所有存在的可能值中
    				if($.inArray($(this).val(),attribute_option_id_list) == -1){
    					// console.log($(this).val());
    					$(this).parent().addClass('hidden');
    				}
    			});

    			//绑定label点击事件
    			$('label.option').click(function(evt){
    				//判断上级是否被选择
    				//获取当前的order
    				var currOrder = parseInt($(this).parent().parent().data('order'));
    				if(currOrder != 1){
    					//不是一级选项,判断上级Order中是否存在被选中的radio
    					var prevOrder = currOrder - 1;
    					// console.log(prevOrder);
    					//上级div中,被选中的radio数量
    					if($('div[order='+prevOrder+']').find(':radio:checked').size() == 0){
    						//上级没有被选中的,阻止其选择;
    						evt.preventDefault();
    						console.log('请先确定上面的选项');
    						return false;
    					}
    				
    				}
    				//二 检测当前可用的货品选项
    				// 整理出所有的可用货品选项组合 遍历货品
    				// 整理当前已经选择的选项
    				var checked_list = [];
    				$(':radio[name^="option"]:checked').each(function(i){
    					checked_list.push($(this).val());
    					// console.log($(this).val());
    				});

    				//3 获取说可能出现的货品选项
    				var product_enable_list = [];
    				$.each(product_option_list,function(i,v){
    					var flag = true;//假设每个货品都符合当前选中的选项
    					//v 每个货品数据
    					//检测货品中与当前选项匹配货品
    					$.each(checked_list,function(ii,vv){
    						//vv 当前被选中的值
    						if(v[ii] != vv){
    							flag = false;
    							return false;
    						}
    					});
    					if(flag){
    						//当前货品时需要被选择的
    						product_enable_list.push(v);
    					}
    				});
    				console.log(product_enable_list);

    				//4 讲可选项的选项展示,将不可选的选项禁用(隐藏)
    				var index = checked_list.length;
    				$('div[order='+checked_list.length+']~div[order]').each(function(i){
    					$(this).find(':radio').each(function(ii){
    						var radio_value = $(this).val();
    						var flag = false;

    						//遍历货品张的对应位置的选项
    						$.each(product_enable_list,function(iii,vvv){
    							if(vvv[index]==radio_value){
    								flag = true;
    								return false;
    							}
    						});

    						if(flag){
    							$(this).parent().removeClass('hidden');
    						}else{
    							$(this).parent().addClass('hidden');
    						}
    					});
    				});
    				//5 将当前货品ID记录到goods_product_id上
    				//当所有的选项,都选中是 
    				//选中的数量 == 所有选项的数量
    				if($('input[name^="option["]:checked').size() == product_option_list[0].length){
    					//全部选择了
    					//遍历全部的货品
    					$.each(response.rows,function(index,value){
    						var flag = true;
    						var currProduct = value;//记录当前的货品
    						$.each(checked_list,function(i,v){
    							//判断当前选项值与货品的选项是否匹配
    							if(currProduct.option[i].attribute_option_id != v){
    								//出现了不相等的项
    								flag = false;
    								return false;
    							}
    						});
    						if(flag){
    							//是当前货品
    							console.log(flag);
    							$('input[name=goods_product_id]:eq(0)').val(currProduct.goods_product_id);
    							return false;//break;
    						}
    					});
    				}

    			});
    		}else{
    			console.log(response.errorInfo);
    		}
    	},'json');
    });
    </script>
@endsection
