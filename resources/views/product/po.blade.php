
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Globis
    </title>
    <style>
        table, th, td {
            border: 1px solid ;
            text-align: left;
            border-spacing: 0;
            border-collapse: collapse;
            padding: 3px;
            vertical-align: middle;


        }
/*        thead{
            background-color: #f1f1f1;
        }*/

        body {
            /*font-family: "Open Sans","Helvetica Neue","Helvetica","Arial","sans-serif";*/
            font-family: "Arial";
            font-size: 12px;
            line-height: 1.42857143;
            color: #333;
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



    </style>

</head>
<body>

    <table id="logTable" class="table table-bordered" align="center">
        <thead class="thcustom">
            <tr>
                <td colspan="2" align="center">
                    <p class="po"><b>PURCHASE ORDER</b></p>
                </td>
                <td colspan="5" align="center">
                    <h1 class="company">{{$client}}</h1>
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">

                </td>
            </tr>
            <tr>
                <td colspan="7" align="left">
                @php $mytime = Carbon\Carbon::now(); @endphp
                    <p>Supplier: <b><u>Globis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PO#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>IPO-{{$mytime->format('ym')}}-281&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                    </p>
                    <p>Address: <u>2/F #105 Calamba Street, Sta. Mesa Heights, Quezon City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>{{$mytime->format('m/d/Y')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms &nbsp;&nbsp;&nbsp;&nbsp;<b><u>{{$terms}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></b></p>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if ($vat == 'VAT')
                        <u><b>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</b></u>
                        VAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        NON-VAT</h5> 
                        @else
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        VAT&nbsp;&nbsp;&nbsp;<u><b>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</b></u>
                        NON-VAT</h5> 
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="center">

                    </td>
                </tr>
                <tr>
                    <th width="1%">#</th>
                    <th width="15%">Stock Code</th>
                    <th width="45%">Description</th>
                    <th width="2%">Qty.</th>
                    <th width="3%">UOM</th>
                    <th width="10%">Unit Price</th>
                    <th width="25%">Amount</th>
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
                <tr>
                    <td>{{$no++}}</td>

                    <td>{{$product->code}}</td>
                    <td align="left">{{$product->description}} </td>
                    
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
                    <td>P {{number_format($prc,2)}}</td>
                    
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
                    <td></td>
                    <td></td>
                    <td>-Nothing Follows-</td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                        <tr>
                    <td colspan="6" align="left">
                        <b>Subtotal  </b>  
                    </td>
                    <td align="right">
                    
                        P {{number_format($subtotal, 2)}}
                    </td>
                </tr>
                <tr>
                    <td colspan="6" align="left">
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
                    <td colspan="6" align="left">
                        <b>Discount ({{$discount}} %)</b>  
                    </td>
                    <td align="right">
                        P {{number_format($dis, 2)}}
                    </td>
                </tr>
                @else
                @endif

                <tr>
                    <td colspan="6" align="left">
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
                    <td colspan="7" align="left">
                        <p><b>Additional Instructions:</b></p>
                        <p>{{$instruc}}</p>
                        <br/>
                        <br/>

                    </td>
                </tr>
                @endif
            </tbody>
        </table>
        <br/>

        <p><b>&nbsp;&nbsp;Prepared by:</b></p>
        <br/>
        <p>&nbsp;&nbsp;{{$name}}<br/>&nbsp;&nbsp;{{$position}}</p>

    <!-- <script type="text/php">
        if ( isset($pdf) ) { 
        $pdf->page_script('
        if ($PAGE_COUNT > 1) {
        $font = $fontMetrics->get_font("Open Sans, Helvetica Neue, sans-serif", "normal");
        $size = 10;
        $pageText = "Page " . $PAGE_NUM . " of " . $PAGE_COUNT;
        $y = 750;
        $x = 520;
        $pdf->text($x, $y, $pageText, $font, $size);
    } 
    ');
}
</script> -->

</body>
</html>