<?php

namespace App\Http\Controllers;

use App\Car;
use App\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\CarImage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{

    public function __construct()
    {
        $this->car = new Car();
        $this->image = new CarImage();
    }

    public function index()
    {
        $data = DB::table('cars')
        ->select('cars.*','manufactures.name as manufacture')
        ->join('manufactures','manufactures.id','=','cars.manufacture_id')
        ->get();
        $no =1;
        return view('backend.car.index',compact('data','no'));
    }

    public function create()
    {
        $data = Manufacture::all();
        return view('backend.car.create',compact('data'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $car = $this->car->create($request->all());
            $no=1;
            foreach($request->image as $row){
                $fileName = Str::uuid();
                $file = $row->storeAs(
                    'public/image/car',$fileName.'.'.$row->extension()
                );
                $this->image->create([
                    'car_id'=>$car->id,
                    'image'=>'storage/image/car/'.$fileName.'.'.$row->extension()
                ]);
            }
            
            DB::commit();
            alert()->success('Berhasil.','Data telah ditambahkan!');
            return redirect()->route('car.index');
        } catch (\exception $e) {
            DB::rollback();
            return redirect()->route('car.index')->with('error-message',$e->getMessage());
        }


    }

    public function show($id)
    {
        $data = $this->car->find($id);
        return $data;

    }

    public function edit($id)
    {
        $data = $this->car->find($id);
        $merk = Manufacture::all();
        return view('backend.car.edit',compact('data','merk'));

    }

    public function update(Request $request, $id)
    {
        if($request->has('image')){
            foreach($request->image as $row){
                $fileName = Str::uuid();
                $file = $row->storeAs(
                    'public/image/car',$fileName.'.'.$row->extension()
                );
                $this->image->create([
                    'car_id'=>$id,
                    'image'=>'storage/image/car/'.$fileName.'.'.$row->extension()
                ]);
            }
        }
        $this->car->find($id)->update($request->all());
        alert()->success('Berhasil.','Data telah diperbarui!');
        return redirect()->route('car.index');
    }

    public function destroy($id)
    {
         $this->car->destroy($id);
         alert()->success('Berhasil.','Data berhasil dihapus!');
         return redirect()->route('car.index');

    }

    public function getImage($id){
        return $this->image->where('car_id',$id)->get();
    }

    public function destroyImage($id){
        $this->image->destroy($id);
    }


}
