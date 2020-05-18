<?php

namespace App;

use App\Car;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $table = 'transaksi';
    protected $dates = ['deleted_at', 'rent_date','return_date'];
    protected $fillable = ['customer_id','car_id','invoice_no','rent_date','return_date','final_date','amount_price','amount_penalty','status'];

    public function customer()
    {
        return $this->belongsTo('Customer');
    }

    public function car()
    {
        return $this->belongsTo('Car');
    }
    // public function getCreatedAtAttribute()
    // {
    //     return Carbon::parse($user->attributes['rent_date'])
    //     ->format('d, M Y H:i');
    // }
}
