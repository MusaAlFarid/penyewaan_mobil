<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\CarImage;
use Illuminate\Support\Str;

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
        return view('backend.car.index',compact('data'));
    }

    public function create()
    {
        return view('backend.car.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request = $request->merge(['name'=>$request->name,'status'=>'0']);
            $car = $this->car->create($request->all());
            $no=1;
            foreach($request->image as $row){
                $fileName = date('YmdHis').".e";
                $file = $row->storeAs(
                    'public/image/car',$fileName.'.'.$row->extension()
                );
                $this->image->create([
                    'car_id'=>$car->id,
                    'image'=>'storage/image/car/'.$fileName.'.'.$row->extension()
                ]);
            }
            DB::commit();
            return redirect()->route('car.index')->with('success-message','Data telah disimpan');
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
        return view('backend.car.edit',compact('data'));

    }

    public function update(Request $request, $id)
    {
        $request = $request->merge(['slug'=>str_slug($request->name)]);
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
        return redirect()->route('car.index')->with('success-message','Data telah dirubah');
    }

    public function destroy($id)
    {
         $this->car->destroy($id);
         return redirect()->route('car.index')->with('success-message','Data telah dihapus');

    }

    public function getImage($id){
        return $this->image->where('car_id',$id)->get();
    }

    public function destroyImage($id){
        $this->image->destroy($id);
    }


}
