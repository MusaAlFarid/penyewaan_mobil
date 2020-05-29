<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Car;
use App\Customer;
use App\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->car = new Car();
        $this->customer = new Customer();
        $this->transaction = new Transaction();
    }

    public function index()
    {
        $no = 1;
        // $data = Customer::all();
        $data = DB::table('transaksi')
        ->join('customers', 'transaksi.customer_id', '=', 'customers.id')
        ->join('cars', 'transaksi.car_id', '=', 'cars.id')
        ->select('*','transaksi.id AS id_transaksi','customers.name AS name_customer','cars.name AS name_car')
        ->where('transaksi.deleted_at','=',Null)
        ->where('transaksi.status_transaksi','=',1)
        ->get();
        return view('backend.transaksi.riwayat',compact('data','no'));
    }

    public function destroy($id){
        $id_transaksi = $id;
        $transaksi = Transaction::find($id);
        if(!empty($transaksi)){
            Transaction::destroy($id);
            alert()->success('Berhasil Hapus','Transaksi telah dihapus!');
            return redirect()->route('riwayat.index');
        }else{
            alert()->warning('Gagal','ID tidak ditemukan!');
            return redirect()->route('riwayat.index');
        }
    }
}
