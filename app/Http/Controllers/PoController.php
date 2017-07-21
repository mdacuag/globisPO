<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use App\Po;
use DB;


class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $po = DB::table('po')->orderBy('dateadded', 'DESC')->get();
        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();	
        $pocount = Po::where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('po.index', ['po' => $po, 'podrop' => $podrop, 'pocount' => $pocount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = Po::where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();
        return view('po.create', ['po' => $po, 'podrop' => $podrop, 'pocount' => $pocount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $po = Po::findOrFail($id);

                $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = Po::where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('po.edit',['po' => $po, 'podrop' => $podrop, 'pocount' => $pocount]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $po = Po::findOrFail($id);

                $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = Po::where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('po.edit',['po' => $po, 'podrop' => $podrop, 'pocount' => $pocount]);
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
        //
        $mytime = Carbon::now();    
         $this->validate($request, [
            'status' => 'required',
            'remarks' => 'required',

            ]);        

        $po = Po::findOrFail($id);
        $po->status = $request->status;
        $po->remarks = $request->remarks;
        $po->datemodified = $mytime;

        

        $desc = "Successfully updated po status(".$po->code." - ".$po->client.")";
        $po->save();

        return redirect()->route('po.index')->with('status', $desc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    

}
