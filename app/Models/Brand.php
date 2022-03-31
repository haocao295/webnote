<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public $timestamp = false; // set time null
    protected $fillable =['brand_name','brand_desc','brand_status']; //Cột SQL
    
    protected $primaryKey = 'brand_id'; //Khóa chính 

    protected $table = 'tbl_brand'; //tên table
    // public function products(){
    //     return $this->belongsTo('App\Product','brand_id'); //1 sp có 1 thương hiệu
    // }
}