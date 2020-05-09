<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    
    use SoftDeletes;


    protected $table = "customers";
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'nik', 'address', 'phone_number', 'email'];
}
