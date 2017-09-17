<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brand';

    protected $primaryKey = 'brand_id';

//    const CREATED_AT = 'created_at';
//
//    const UPDATED_AT = 'updated_at';
    public $timestamps = false;

    public static function getList($search, $sort){
        $query = static::query();
        if(!empty($search)){
            $query->where('brand_name', 'like', '%'.$search.'%');
        }
        return $query->orderBy('sort_order', $sort)->get();
    }
}
