<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Customer extends Model
{
    
    use SoftDeletes;
    use Uuids;

    protected $table = "customers";
    
    protected $fillable = ['name', 'nik', 'address', 'phone_number', 'email'];
}
