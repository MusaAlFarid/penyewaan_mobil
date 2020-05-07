<?php

namespace App;

use App\Traits\Uuids;
use Carbon\Carbon;
use App\Car;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use SoftDeletes;
    use Uuids;
   
    protected $table = 'transaksi';
    protected $dates = ['deleted_at'];
    protected $fillable = ['car_id','customer_id','invoice_no','rent_date','back_date','return_date','price','amount','penalty','status'];
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
