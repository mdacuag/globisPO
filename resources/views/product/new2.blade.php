
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        POIS
    </title>
    <style>
        table, th, td {
            border: 1px solid ;
            text-align: left;
            border-spacing: 0;
            border-collapse: collapse;
            position: center;
            padding: 2px;
            padding-left: 5px;
            padding-right: 5px;
            vertical-align: middle;
            color: #000;

        }
/*        thead{
            background-color: #f1f1f1;
        }*/

        body {
            font-family: "Open Sans","Helvetica Neue","Helvetica","Arial","sans-serif";
            /*font-family: "Arial";*/
            font-size: 12px;
            line-height: 1.42857143;
            color: #000;
        }

        section {
            text-align: center;
        }


        .pads {                    
            padding-bottom:-15px;                 
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;

        }
        .info{
            margin-left:10px;
        }

        .po {
            font-family: "Arial";
            font-size: 22px;
        }


        tr .adi td {
            border: none;
        }
        .tColor {
            background-color: #00aef0;
            text-decoration-color: #fff;
        }

        .hTitle {
            background-color: #00aef0;
            color: #000;
            text-align: center;
            padding: 15px;
            font-weight: bold;
            border: 1px solid ;

            margin-bottom: 40px;
        }


        .noborders {
            border-left: 1px solid #fff;
            border-bottom:  1px solid #fff;
        }
        .lrborders {
            border-left: 1px solid #fff;
            border-right:  1px solid #fff;
        }
        .thcustom {
            color: #fff;
        }
        h1 {
            font-size: 29px;
        }
        p {
            font-size: 14px;
        }

    </style>


</head>
<body>
    <table border="0" >
        <tr align="left">
            <td width="425px">
                <h1 style="text-align:left;word-wrap: break-word;" class="company"><u>{{$client}}</u></h1>
            </td>

            <td width="260px">
                <br/><h2 class="hTitle" style="text-align:center;">PURCHASE ORDER</h2>
            </td>

        </tr>
    </table>



    @php $mytime = Carbon\Carbon::now(); @endphp
    <p><b>Supplier: </b>&nbsp;&nbsp;&nbsp;&nbsp;Globis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;<b> PO#:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$pocode}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p><b>Address: </b>&nbsp;&nbsp;&nbsp;&nbsp;2/F #105 Calamba Street, Sta. Mesa Heights, Quezon City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;&nbsp;&nbsp;Date:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$mytime->format('m/d/Y')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;&nbsp;&nbsp;Terms: </b>&nbsp;&nbsp;&nbsp; {{$terms}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @if ($vat == 'VAT')
        <u><b>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</b></u>
        VAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        NON-VAT</h5> 
        @else
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        VAT&nbsp;&nbsp;&nbsp;<u><b>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</b></u>
        NON-VAT</h5> 
        @endif
        <br/>
        <table id="logTable" class="table table-striped table-hover " align="center">
            <thead class="thcustom" >

                <tr class="tColor">
                    <th width="1px">#</th>
                    <th width="10%">Stock Code</th>
                    <th width="300px">Description</th>
                    <th width="1px">Qty.</th>
                    <th width="1px">UOM</th>
                    <th width="100px">Unit Price</th>
                    <th width="100px">Amount</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @php $i = 0; @endphp
                @php $j = 0; @endphp
                @php $k = 0; @endphp
                @php $l = 0; @endphp
                @php $m = 0; @endphp
                @php $total = array(); @endphp
                @forelse($products as $product)
                <tr >
                    <td>{{$no++}}</td>

                    <td>{{$product->code}}</td>
                    <td align="left" style="word-wrap: break-word;">{{$product->description}} </td>
                    
                    <td>{{$quan = $quantity[$i++]}} </td>
                    <td>
                        <input type="hidden" value="{{$uo = $uom[$j++]}}">
                        @if ($quan > 1)

                        
                        @if($uo == 'box')
                        {{$uo.'es'}}
                        @else
                        {{$uo.'s'}}
                        @endif
                        
                        @else
                        {{$uo}}
                        @endif
                    </td>
                    <input type="hidden" value="{{$prc = $price[$m++]}}">
                    <td align="right">P {{number_format($prc,2)}}</td>
                    
                    <td align="right">P {{number_format($amount =  $prc * $quantity[$k++],2)}}</td>
                    <input type="hidden" value="{{$total[$l++] = $amount}}">
                </tr>
                @empty
                <tr>
                    <td colspan="6" align="center">
                        <h3>No Products Found</h3>
                    </td>
                </tr>
                @endforelse
                <tr>

                    <td colspan="6"><i>-nothing follows-</i></td>

                    <td align="right">-</td>
                </tr>
                @php 
                $grandtotal = array_sum($total);
                $subtotal = round($grandtotal / 1.12, 2);
                $tax = $grandtotal - $subtotal;

                if ($discount != null) {
                if($vat == 'VAT') {
                $dis = round($grandtotal * ($discount/100), 2);
                $grandtotal = $grandtotal - $dis;
            } else {
            $dis = round($subtotal * ($discount/100), 2);
            $subtotal = $subtotal-$dis;
        }
    }

    @endphp

    @if ($vat == 'VAT')
    <tr >
        <td colspan="3" class="noborders"></td>  
        <td colspan="3" align="left">
            <b>Subtotal  </b>  
        </td>
        <td align="right">

            P {{number_format($subtotal, 2)}}
        </td>
    </tr>
    <tr>
        <td colspan="3" class="noborders"></td>  
        <td colspan="3" align="left">
            <b>12% Vat  </b>  
        </td>
        <td align="right">
            P {{number_format($tax, 2)}}
        </td>
    </tr>
    @else

    @endif
    @if ($discount!=null)
    <tr>
        <td colspan="3" class="noborders"></td>  
        <td colspan="3" align="left">
            <b>Discount ({{$discount}} %)</b>  
        </td>
        <td align="right">
            P {{number_format($dis, 2)}}
        </td>
    </tr>
    @else
    @endif
    <tr>    
        <td colspan="3" class="noborders"></td>  
        <td colspan="3" align="left">

        </td>
        <td align="right">


        </td>
    </tr>
    <tr>    
        <td colspan="3" class="noborders"></td>  
        <td colspan="3" align="left">
            <b>GRAND TOTAL  </b>  
        </td>
        <td align="right">
            @if ($vat == 'VAT')
            P {{number_format($grandtotal, 2)}}
            @else
            P {{number_format($subtotal, 2)}}
            @endif

        </td>
    </tr>
    @if ($instruc != null)
    <tr>

        <td colspan="7"  class="lrborders">
            <br/>


        </td>
    </tr>

    <tr class="tColor">
        <th  colspan="7" align="left"><b>Additional Instructions:</b></th>

    </tr>
    <tr><td colspan="7" align="left">

        <p>{{$instruc}}</p>
        <br/>
        <br/>

    </td></tr>
    @endif
</tbody>
</table>
<br/>
<br/><br/><br/><br/><br/>
<table border="0">
    <tr align="left">
        <th></th>
        <th></th>
        <th width="50%">Prepared by: &nbsp;&nbsp;&nbsp;&nbsp;</th>
        
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

        <th width="50%">Approved by:&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
    <tr>
        <td colspan="7"><br/><br/></td>   
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td align="left">{{$name}}<br/>{{$position}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td align="left">{{$approved}}<br/>{{$aposition}}</td>
    </tr>

</table>



</body>
</html>