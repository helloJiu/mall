<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Log;

class BrandController extends Controller
{
    public function index(Request $request){
        return view('admin.brand.index');
    }

    public function getList(Request $request){
        $search = $request->input('search', '');
        $sort = $request->input('sort', 'desc');
        $lists = Brand::getList($search, $sort);
        return $this->jsonResOk($lists);
    }

    public function add(Request $request){
        return view('admin.brand.add');
    }

    public function addPost(Request $request){
        return $this->jsonResOk($request->all());
    }

    public function validateField(Request $request){
        try{
            $name = $request->input('brand_name', '');
            if($name == ''){
                return $this->jsonResErr('不能为空');
            }
            $count = Brand::where('brand_name', $name)->count();
            if($count == 0){
                return $this->jsonResOk('名称可用');
            }else{
                return $this->jsonResErr('名称已被占用');
            }
        }catch(\Exception $e){
            Log::error($e);
            return $this->jsonResErr('系统错误');
        }
    }
}
