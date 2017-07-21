<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use \PDF;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Po;
use App\StoreProducts;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::All();
        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('product.index', ['products' => $products, 'podrop' => $podrop, 'pocount' => $pocount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $podrop = Po::All();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();
        return view('product.create', ['podrop' => $podrop, 'pocount' => $pocount]);
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
        // $today = Carbon::today()->format('Y-m-d');

        $this->validate($request, [
            'code' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            
            ]);        

        $product = new product;
        $product->code = $request->code;
        $product->description = $request->description;
        $product->price = $request->price;
        

        $desc = "Successfully added a product";
        $product->save();

        return redirect()->route('product.index')->with('status', $desc);
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
        $product = Product::findOrFail($id);

        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('product.edit',['product' => $product, 'podrop' => $podrop, 'pocount' => $pocount]);
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
        $product = Product::findOrFail($id);

        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('product.edit',['product' => $product, 'podrop' => $podrop, 'pocount' => $pocount]);
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
        $this->validate($request, [
            'code' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            
            ]);        

        $product = Product::findOrFail($id);
        $product->code = $request->code;
        $product->description = $request->description;
        $product->price = $request->price;
        

        $desc = "Successfully updated product(".$product->code.")";
        $product->save();

        return redirect()->route('product.index')->with('status', $desc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //For Deleting Users
        $product = Product::destroy($id);

        $desc = 'Product Successfully Deleted.';
        return Redirect::back()->with('status', $desc);
        
    }


    public function download(Request $request) {

        $products = DB::table('products')                
        ->select('*')
        ->get();



        view()->share('products', $products);

        $pdf = PDF::loadView('product.pdfview')->setPaper('Letter', 'portrait');
        return $pdf->download('product.pdf');
    }

    public function select(Request $request) {
        $selected = $request->input('selected');

        $podrop =DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->get();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        if (!empty($selected)) {
            foreach ($selected as &$select) {
                $products[] = Product::findOrFail($select);
            }
            return view('product.selected',['selected' => $selected, 'products' => $products, 'podrop' => $podrop, 'pocount' => $pocount]);
        } else {
            $desc = 'No Products selected';
            return Redirect::back()->with('error', $desc);
        }
    }

    public function createPO(Request $request) {
        $this->validate($request, [
            'selected' => 'required',
            'client' => 'required',
            'name' => 'required',
            'position' => 'required',
            'vat' => 'required',
            'terms' => 'required',
            'quantity' => 'required',
            'uom' => 'required',
            'price' => 'required',
            'approved' => 'required',
            'aposition' => 'required',
            ]);  

        $mytime = Carbon::now();

        $selected = $request->selected;
        $client = $request->client;
        $name = $request->name;
        $position = $request->position;
        $vat = $request->vat;
        $terms = $request->terms;
        $instruc = $request->instruc;

        $approved = $request->approved;
        $aposition = $request->aposition;

        $price = $request->price;
        $uom = $request->uom;
        $quantity = $request->quantity;
        $discount = $request->discount;

        $no = 1; 

        $i = 0; 
        $j = 0; 
        $k = 0; 
        $l = 0; 
        $m = 0; 
        if (!empty($selected)) {
            foreach ($selected as &$select) {
                $products[] = Product::findOrFail($select);
                $sprod = new StoreProducts;
                $sprod->poid = Po::All()->count() + 1;
                $sprod->id = $select;
                $sprod->quantity = $quantity[$i++];
                $sprod->uom = $uom[$j++];
                $sprod->price = $price[$k++];
                $sprod->save();
            }

            view()->share('quantity', $quantity);
            view()->share('uom', $uom);
            view()->share('price', $price);

            view()->share('products', $products);
            view()->share('client', $client);
            view()->share('name', $name);
            view()->share('position', $position);
            view()->share('vat', $vat);
            view()->share('terms', $terms);
            view()->share('instruc', $instruc);
            view()->share('discount', $discount);
            view()->share('approved', $approved);
            view()->share('aposition', $aposition);

            

            $pototal = Po::All()->count() + 350 + 1;
            $pocode = 'IPO-'.$mytime->format('ym').'-'.$pototal;
            view()->share('pocode', $pocode);
            $po = new po;
            $po->code = $pocode;
            $po->client = $client;
            $po->name = $name;
            $po->position = $position;
            $po->vat = $vat;
            $po->discount = $discount;
            $po->terms = $terms;
            $po->instruc = $instruc;
            $po->approved = $approved;
            $po->aposition = $aposition;

            $po->status = 'Pending';

            $po->dateadded = $mytime;
            $po->save();


            $desc = "Successfully added a product";
            $pdf = PDF::loadView('product.new')->setPaper('Letter', 'portrait');        
            return $pdf->download($pocode.' - '.$client.'.pdf');



        } else {
            $desc = 'No Products selected';
            return Redirect::back()->with('error', $desc);
        }
    }

    public function editPO($id)
    {
        //
        //$storeproducts = StoreProducts::findOrFail($id);
        $storeproducts = DB::table('storeproducts')
        ->join('products', 'storeproducts.id', '=', 'products.id')
        ->select('storeproducts.*', 'products.code', 'products.description')
        ->where('storeproducts.poid', $id)
        ->get();

        $po = Po::findOrFail($id);


        $podrop = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->orderBy('dateadded', 'DESC')->limit(5)->get();
        $pocount = DB::table('po')->where('status', '=', 'Pending')->orWhere('status', '=', 'Change')->count();

        return view('product.editPO',['storeproducts' => $storeproducts, 'po' => $po, 'podrop' => $podrop, 'pocount' => $pocount]);
    }

    public function updatePO(Request $request, $id)
    {
        $this->validate($request, [
            'selected' => 'required',
            'client' => 'required',
            'name' => 'required',
            'position' => 'required',
            'vat' => 'required',
            'terms' => 'required',
            'quantity' => 'required',
            'uom' => 'required',
            'price' => 'required',
            'approved' => 'required',
            'aposition' => 'required',
            ]);  

        $mytime = Carbon::now();

        $selected = $request->selected;
        $client = $request->client;
        $name = $request->name;
        $position = $request->position;
        $vat = $request->vat;
        $terms = $request->terms;
        $instruc = $request->instruc;

        $approved = $request->approved;
        $aposition = $request->aposition;

        $price = $request->price;
        $uom = $request->uom;
        $quantity = $request->quantity;
        $discount = $request->discount;

        $no = 1; 

        $i = 0; 
        $j = 0; 
        $k = 0; 
        $l = 0; 
        $m = 0; 
        if (!empty($selected)) {
            $countprod = count($selected);
            $sprodcount = StoreProducts::count();
            $m = $sprodcount - $countprod;
            if ($m == 0)
                $m=1;
            foreach ($selected as &$select) {
                $products[] = Product::findOrFail($select);
                $sprod = StoreProducts::findOrFail($m++);
                $sprod->id = $select;
                $sprod->quantity = $quantity[$i++];
                $sprod->uom = $uom[$j++];
                $sprod->price = $price[$k++];
                $sprod->save();
            }

            view()->share('quantity', $quantity);
            view()->share('uom', $uom);
            view()->share('price', $price);

            view()->share('products', $products);
            view()->share('client', $client);
            view()->share('name', $name);
            view()->share('position', $position);
            view()->share('vat', $vat);
            view()->share('terms', $terms);
            view()->share('instruc', $instruc);
            view()->share('discount', $discount);
            view()->share('approved', $approved);
            view()->share('aposition', $aposition);

            
            
            
            $po = Po::findOrFail($id);
            $pocode = $po->code;
            $po->client = $client;
            $po->name = $name;
            $po->position = $position;
            $po->vat = $vat;
            $po->discount = $discount;
            $po->terms = $terms;
            $po->instruc = $instruc;
            $po->approved = $approved;
            $po->aposition = $aposition;

            $po->datemodified = $mytime;
            $po->save();

view()->share('pocode', $pocode);
$pdf = PDF::loadView('product.new2')->setPaper('Letter', 'portrait');

            return $pdf->download($pocode.' - '.$client.'.pdf');



        } else {
            $desc = 'No Products selected';
            return Redirect::back()->with('error', $desc);
        }
    }

}
