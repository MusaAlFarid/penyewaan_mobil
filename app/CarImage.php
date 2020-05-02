<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarImage extends Model
{
    use SoftDeletes;
    

    protected $table = 'car_images';
    protected $dates = ['deleted_at'];
    protected $fillable = ['car_id','image'];

    public function car()
    {
        return $this->hasOne('App\Car');
    }

}
