<?php

namespace App\Http\Controllers;

use App\Manufacture;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ManufactureController extends Controller
{

    public function __construct()
    {
        $this->manufacture = new Manufacture();
    }

    public function index()
    {
        return view('backend.manufacture.index');
    }

    public function create()
    {
        return view('backend.manufacture.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->manufacture->create($request->all());
            DB::commit();
            return redirect()->route('manufacture.index')->with('success-message','Data telah disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }

    }

    public function show($id)
    {
        $data = $this->manufacture->find($id);
        return $data;

    }

    public function edit($id)
    {
        $data = $this->manufacture->find($id);
        return view('backend.manufacture.edit',compact('data'));

    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->manufacture->find($id)->update($request->all());
            DB::commit();
            return redirect()->route('manufacture.index')->with('success-message','Data telah d irubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }

    }

    public function destroy($id)
    {
        $this->manufacture->destroy($id);
        return redirect()->route('manufacture.index')->with('success-message','Data telah dihapus');
    }

    public function getManufacture(Request $request){
        if ($request->has('search')) {
            $cari = $request->search;
    		$data = $this->manufacture->where('name', 'LIKE', '%'.$cari.'%')->get();
            return response()->json($data);
    	}
    }

    public function find($id){
        return $this->manufacture->find($id);
    }

}
