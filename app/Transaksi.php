<?php

namespace App;


use App\Car;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;
   
    protected $table = 'transaksi';
    protected $dates = ['deleted_at', 'rent_date','return_date'];
    protected $fillable = ['car_id','customer_id','invoice_no','rent_date','return_date','price','penalty','status'];
    public $incrementing = false;

    public function customer()
    {
        return $this->belongsTo('Customer');
    }

    public function car()
    {
        return $this->belongsTo('Car');
    }
    public function getCreatedAtAttribute()
{
    return Carbon::parse($user->attributes['rent_date'])
       ->format('d, M Y H:i');
}
    
}
