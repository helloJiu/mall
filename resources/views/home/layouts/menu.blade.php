<div class="main-menu-wrapper">
    <div class="container">
        <div class="main-menu-mobile">
            菜单
            <span class="main-menu-toggle">
              <i class="fa fa-bars"></i>
            </span>
        </div>
        <div class="main-menu-container">
            <ul class="main-menu">
                <li class="parent">
                    <a href="">首页</a>
                </li>

                <volist name="category_list" id="one">
                    <li class="parent with-sub-menu">
                        <a href="{:U('/category/'.$one['category_id'])}">{$one['title']}</a>
                        <div class="open-sub-menu">+</div>
                        <if condition="! empty($one['children'])" >
                            <ul class="sub-menu">
                                <volist name="one['children']" id="two">
                                    <li>
                                        <a href="{:U('/category/'.$two['category_id'])}">{$two['title']}</a>
                                        <div class="open-sub-menu">+</div>
                                        <if condition="! empty($two['children'])">
                                            <ul class="second-menu">
                                                <volist name="two['children']" id="three">
                                                    <li>
                                                        <a href="{:U('/category/'.$three['category_id'])}">{$three['title']}</a>
                                                    </li>
                                                </volist>
                                            </ul>
                                        </if>
                                    </li>
                                </volist>
                            </ul>
                        </if>
                    </li>
                </volist>

                <li class="parent ">
                    <a href="">海外购</a>
                </li>
                <li class="parent ">
                    <a href="">轻松购</a>
                </li>

            </ul>
        </div>

        <div id="search" class="input-group">
            <input type="text" name="search" value="" placeholder="搜索" class="form-control" />
            <span class="input-group-btn">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
              </button>
            </span>
        </div>
    </div>
</div>
