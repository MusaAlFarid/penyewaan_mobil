<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Car;
use App\Customer;
use App\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        ->select('*','customers.name AS name_customer','cars.name AS name_car')
        ->get();
        
        return view('backend.transaksi.index',compact('data','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function riwayat()
    {
        return view('backend.transaksi.riwayat');
    }

    public function create()
    {
        $data = Customer::all();
        $item = Car::all();
        return view('backend.transaksi.create',compact('data','item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'car_id' => 'required',
            'rent_date' => 'required|date',
            'return_date' => 'required|date',
        ]);

        $car = Car::find($request->car_id);
        Transaction::create([
            'customer_id' => $request->customer_id,
            'car_id' => $request->car_id,
            'invoice_no' => $this->generateInvoice(date('d-m-Y')),
            'rent_date' => $request->rent_date,
            'return_date' => $request->return_date,
            'final_date' => null,
            'amount_price' => Carbon::parse($request->rent_date)->diffInDays($request->return_date) * $car->price,
            'amount_penalty' => 0,
            'status' => 0
        ]);

        alert()->success('Berhasil','Data telah ditambahkan!');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    private function generateInvoice($date){
        $tanggal = substr($date,8,2);
        $bulan = substr($date,5,2);
        $tahun = substr($date,2,2);
        $transaction = $this->transaction->whereDate('created_at',$date)->get();
        $no = 'RM-'.$tanggal.$bulan.$tahun.'-'.sprintf('%05s',$transaction->count()+1);
        return $no;
    }

   

    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
