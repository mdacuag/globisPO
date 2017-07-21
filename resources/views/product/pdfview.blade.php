<!DOCTYPE html>
<html lang="en">
<head>
    <title>
    Globis
    </title>
    <style>
        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
            border-spacing: 0;
            border-collapse: collapse;
            padding: 6px;
            vertical-align: middle;
        }
        thead{
            background-color: #f1f1f1;
        }
        th{
            border-bottom-width: 2px;
        }
        body {
            font-family: "Open Sans","Helvetica Neue","Helvetica","Arial","sans-serif";
            font-size: 14px;
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
    </style>
</head>
<body>

    <table id="logTable" class="table table-bordered table-hover" align="center">
        <thead class="thcustom">
            <tr>
                <th width="5%">ID</th>
                <th width="15%">CODE</th>
                <th width="40%">DESCRIPTION</th>
                <th width="20%">PRICE</th>
            </tr>
        </thead>
        <tbody>

            @forelse($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->description}} </td>
                <td>{{$product->price}}</td>

            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">
                    <h3>No Products Found</h3>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
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