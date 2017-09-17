@extends('admin.layouts.app')

@section('title', '我的品牌')

@section('css')

@endsection

@section('content')
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <a href="/admin/brand/add" data-toggle="tooltip" title="新增" class="btn btn-primary"> <i class="fa fa-plus"></i>
                </a>

                <button type="button" data-toggle="tooltip" title="删除" class="btn btn-danger" onclick="$('input[name*=\'selected\']:checked').size()>0 && confirm('确认？') ? $('#form-brand').submit() : false;"> <i class="fa fa-trash-o"></i>
                </button>

            </div>
            <h1>品牌管理</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="{U('Manage/index')}">首页</a>
                </li>
                <li>
                    <a href="javascript:;">品牌列表</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list"></i>
                    品牌列表
                </h3>
            </div>
            <div class="panel-body">
                <div class="well">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="control-label" for="input-title">品牌名称</label>
                                <input type="text" name="filter_title" @keyup.enter="searchfun($event)" v-model="params.search" placeholder="品牌名称" id="input-title" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button @click="searchfun()" id="button-filter" class="btn btn-primary pull-left form-contro">
                                <i class="fa fa-search"></i>
                                筛选
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="col-sm-1">
                                        <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
                                    </td>
                                    <td class="col-sm-2">id</td>
                                    <td class="col-sm-2">名称</td>
                                    <td class="col-sm-2">LOGO</td>
                                    <td class="col-sm-2">
                                        <a href="javascript:;" :class="params.sort" @click="sortfun()">排序</a>
                                    </td>
                                    <td class="col-sm-2">站点</td>
                                    <td class="col-sm-2">管理</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr v-for="item in lists">
                                        <td class="col-sm-1">
                                            <input type="checkbox" name="selected[]" value="" />
                                        </td>
                                        <td class="col-sm-2">@{{item.brand_id}}</td>
                                        <td class="col-sm-2">@{{item.brand_name}}</td>
                                        <td class="col-sm-2">@{{item.brand_logo}}</td>
                                        <td class="col-sm-2">
                                            <a href="">@{{item.sort_order}}</a>
                                        </td>
                                        <td class="col-sm-2">
                                            <a :href="item.site_url">原文</a>
                                        </td>
                                        <td class="col-sm-2">
                                            <a href="" data-toggle="tooltip" title="编辑" class="btn btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>

    var data = [];

    var vm = new Vue({
        el : '#content',
        data : {
            lists : data,
            name : 'hufegjiu',
            params : {
                search : '',
                sort : 'asc',
                page : 1,
            },

        },
        methods : {
            searchfun : function(){
                getList(this.params);
            },
            sortfun : function(){
                if(this.params.sort == 'asc'){
                    this.params.sort = 'desc';
                }else{
                    this.params.sort = 'asc';
                }
                getList(this.params);
            },
        }
    })

    const getList = function(params){
        axios.post('/admin/brand/get', params).then(function(response){
            vm.lists = response.data.data;
        });
    };

    getList();


</script>
@endsection