<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Toyota','Suzuki','Honda','Mercedes-Benz','BMW','Daihatsu','Nissan','Isuzu','KIA','Mitsubishi','Datsun','Mazda','Hyundai','Chevrolet'];
        arsort($name);

        for($i=0;$i<count($name);$i++){
            App\Manufacture::create([
                'name'=> str::slug($name[$i]),
            ]);
        }
    }
}
