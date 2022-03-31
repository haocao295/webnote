<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    public $timestamp = false; // set time null
    protected $fillable =['admin_email','admin_password','admin_name','admin_phone']; //Cột SQL
    
    protected $primaryKey = 'admin_id'; //Khóa chính 
    protected $table = 'tbl_admin'; //tên table
}
