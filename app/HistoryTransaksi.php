<?php

namespace App;


use App\Car;
use App\Customer;
use App\Transaksi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryTransaksi extends Model
{
    use SoftDeletes;
   
    protected $table = 'history';
    protected $dates = ['deleted_at'];
    protected $fillable = ['car_id','customer_id','invoice_no','rent_date','back_date','return_date','price','penalty','status'];
    public $incrementing = false;

    public function customer()
    {
        return $this->belongsTo('Customer');
    }

    public function car()
    {
        return $this->belongsTo('Car');
    }
    
}
