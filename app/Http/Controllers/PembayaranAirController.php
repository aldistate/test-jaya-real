<?php

namespace App\Http\Controllers;

use App\Models\PembayaranAir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PembayaranAirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaranAir = PembayaranAir::latest()->paginate(10);

        return view('index', [
            'pembayaranAir' => $pembayaranAir
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request parameters
        $validator = Validator::make($request->all(), [
            'bill_id' => 'required|string|size:12|unique:pembayaran_air,bill_id',
            'bill_name' => 'required|string|max:100',
            'bill_address' => 'required|string|max:10',
            'bill_periode' => 'required|integer|min:6',
            'bill_due_date' => 'required|date',
            'bill_desc' => 'nullable|string|max:100',
            'bill_abonemen' => 'required|numeric',
            'bill_air' => 'required|numeric',
            'bill_ipl' => 'required|numeric',
            'bill_disc_air' => 'nullable|numeric',
            'bill_disc_ipl' => 'nullable|numeric',
            'bill_denda' => 'nullable|numeric',
            'bill_total_amount' => 'required|numeric',
            'bill_resp_stat' => 'required|string|size:2',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create new Pembayaran air record
        $pembayaranAir = new PembayaranAir;
        $pembayaranAir->bill_id = $request->input('bill_id');
        $pembayaranAir->bill_name = $request->input('bill_name');
        $pembayaranAir->bill_address = $request->input('bill_address');
        $pembayaranAir->bill_periode = $request->input('bill_periode');
        $pembayaranAir->bill_due_date = $request->input('bill_due_date');
        $pembayaranAir->bill_desc = $request->input('bill_desc');
        $pembayaranAir->bill_abonemen = $request->input('bill_abonemen');
        $pembayaranAir->bill_air = $request->input('bill_air');
        $pembayaranAir->bill_ipl = $request->input('bill_ipl');
        $pembayaranAir->bill_disc_air = $request->input('bill_disc_air');
        $pembayaranAir->bill_disc_ipl = $request->input('bill_disc_ipl');
        $pembayaranAir->bill_denda = $request->input('bill_denda');
        $pembayaranAir->bill_total_amount = $request->input('bill_total_amount');
        $pembayaranAir->bill_resp_stat = $request->input('bill_resp_stat');

        // Save the record to the database
        $pembayaranAir->save();

        // Return view index and success response
        return Redirect::route('index')->with('sukses', 'Data berhasil ditambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembayaran_air = PembayaranAir::find($id);

        return view('show', [
            'pembayaran_air' => $pembayaran_air
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaranAir = PembayaranAir::find($id);
        return view('edit', [
            'pembayaranAir' => $pembayaranAir
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate request parameters
        $validator = Validator::make($request->all(), [
            'bill_id' => 'required|string|size:12',
            'bill_name' => 'required|string|max:100',
            'bill_address' => 'required|string|max:10',
            'bill_periode' => 'required|integer|min:6',
            'bill_due_date' => 'required|date',
            'bill_desc' => 'nullable|string|max:100',
            'bill_abonemen' => 'required|numeric',
            'bill_air' => 'required|numeric',
            'bill_ipl' => 'required|numeric',
            'bill_disc_air' => 'nullable|numeric',
            'bill_disc_ipl' => 'nullable|numeric',
            'bill_denda' => 'nullable|numeric',
            'bill_total_amount' => 'required|numeric',
            'bill_resp_stat' => 'required|string|size:2',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create new Pembayaran air record
        $pembayaranAir = PembayaranAir::find($id);
        $pembayaranAir->bill_id = $request->input('bill_id');
        $pembayaranAir->bill_name = $request->input('bill_name');
        $pembayaranAir->bill_address = $request->input('bill_address');
        $pembayaranAir->bill_periode = $request->input('bill_periode');
        $pembayaranAir->bill_due_date = $request->input('bill_due_date');
        $pembayaranAir->bill_desc = $request->input('bill_desc');
        $pembayaranAir->bill_abonemen = $request->input('bill_abonemen');
        $pembayaranAir->bill_air = $request->input('bill_air');
        $pembayaranAir->bill_ipl = $request->input('bill_ipl');
        $pembayaranAir->bill_disc_air = $request->input('bill_disc_air');
        $pembayaranAir->bill_disc_ipl = $request->input('bill_disc_ipl');
        $pembayaranAir->bill_denda = $request->input('bill_denda');
        $pembayaranAir->bill_total_amount = $request->input('bill_total_amount');
        $pembayaranAir->bill_resp_stat = $request->input('bill_resp_stat');

        // Save the record to the database
        $pembayaranAir->save();

        // Return view index and success response
        return Redirect::route('index')->with('sukses', 'Data berhasil diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus berdasarkan id
        $pembayaranAir = PembayaranAir::findOrFail($id);
        $pembayaranAir->delete();

        // Return view index and success response
        return Redirect::route('index')->with('sukses', 'Data berhasil dihapus!!');
    }
}
