@extends('admin.layouts.app')

@section('content')
	<div id="content">
    <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right">
          <button @click="submit()" data-toggle="tooltip" title="保存" class="btn btn-primary">
            <i class="fa fa-save"></i>
          </button>
          <a href="/admin/brand/index" data-toggle="tooltip" title="取消" class="btn btn-default">
            <i class="fa fa-reply"></i>
          </a>
        </div>
        <h1>品牌</h1>
        <ul class="breadcrumb">
          <li>
            <a href="{:U('Manage/index')}">首页</a>
          </li>
          <li>
            <a href="">品牌</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-pencil"></i>
            添加品牌
          </h3>
        </div>
        
        <div class="panel-body">
          <form {{--enctype="multipart/form-data"--}} id="form-brand" class="form-horizontal">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab-general" data-toggle="tab">基本信息</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-general">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-name2">品牌名称</label>
                  <div class="col-sm-8">
                    <input type="text"  v-model="form.brand_name" class="form-control" @keyup="validateName('brand_name')"/>
                      <span>@{{ mess }}</span>
                  </div>
                </div>

                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-name2">品牌LOGO</label>
                  <div class="col-sm-8">
                      <input type="text"  v-model.lazy="form.brand_logo" class="form-control" />
                  </div>
                </div>
                  <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">站点名称</label>
                      <div class="col-sm-8">
                          <input type="text"  v-model.lazy="form.site_url" class="form-control" />
                      </div>
                  </div>
                  <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">排序</label>
                      <div class="col-sm-8">
                          <select v-model.lazy="form.sort_order" class="col-sm-3" class="form-control">
                              <option value="30">30</option>
                              <option value="40">40</option>
                              <option value="50">50</option>
                              <option value="60">60</option>
                          </select>
                      </div>
                  </div>

                  <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">是否可以展示</label>
                      <div class="col-sm-8">
                          支持: <input type="radio"  name="is_show" value="1" v-model.lazy.number="form.is_show" class="form-control">
                          不支持: <input type="radio"  name="is_show" value="0" v-model.lazy.number="form.is_show" class="form-control">
                      </div>
                  </div>

                  <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">描述</label>
                      <div class="col-sm-8">
                          <textarea class="col-sm-6" v-model.lazy="form.brand_desc" class="form-control"></textarea>
                      </div>
                  </div>
              
                {{--<div class="form-group">--}}
                  {{--<label class="col-sm-2 control-label">图片</label>--}}
                  {{--<div class="col-sm-10">--}}
                    {{--<input id="input-logo_ori" type="file" name="logo_ori" class="">--}}
                  {{--</div>--}}
                {{--</div>--}}
   
              </div>
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
	<script src="/back/validate/jquery.validate.min.js"></script>
	<script src="/back/validate/additional-methods.min.js"></script>
	<script src="/back/validate/localization/messages_zh.min.js"></script>
    <script>
        var vue = new Vue({
            el : '#content',
            data : {
                form : {
                    brand_name : '',
                    brand_logo : '',
                    brand_desc : '',
                    site_url : '',
                    sort_order : '',
                    is_show : '',
                },
                mess : '',
            },
            methods : {
                submit : function(){
                    submitForm(this.form);
                },
                validateName : function(field){
                    var params = {'brand_name' : this.form.brand_name};
                    axios.post('/admin/brand/validate', params).then(function(res){
                        if(res.data.status == 1){
                            this.mess = res.data.statusinfo;
                        }else{
                            this.mess = '名称可用';
                        }
                        console.log(this.mess);
                    }).catch(function(error){
                        console.log(error);
                        throw error;
                    });
                },
            }
        })


        const submitForm = function(params){
            axios.post('/admin/brand/add', params).then(function(response){
                if(response.data.status == 0){
                    console.log('添加成功');
                }else{
                    console.log(response.data.statusinfo);
                }
            }).catch(function(error){
                console.log(error);
                throw error;
            });
        };
    </script>
@endsection

