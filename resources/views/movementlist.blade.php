<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


    <script defer src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <title>Document</title>
    @include('layouts.listcss')
    @include('layouts.datatablescss')
</head>
<body>
    {{-- sidenav --}}
    @include('layouts.sidenav')
    <section id="content">
        {{-- navbar --}}
        @include('layouts.navbar')
        <main>
             <div class="head-title" style="padding-bottom: 1.5rem;">
				<div class="left">
					<h1>Movement List</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head" style="color:  #1a405b;">
						<h3></h3>

					</div>
                    @include('layouts.movementtable')
					<table class="table table-striped " id="myTable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                <thead>
            <tr>
                <th style=" color:#1d1d27; ">Movement No</th>
                <th style=" color:#1d1d27; ">Movement Type</th>
                <th style=" color:#1d1d27; ">From</th>
                <th style=" color:#1d1d27; ">To</th>
                <th style=" color:#1d1d27; ">Quantity</th>
                <th style=" color:#1d1d27; ">Status</th>
                <th style=" color:#1d1d27; ">Date</th>
            </tr>
            </thead>
            <tbody>
  <tr>
    <td>MV001</td>
    <td>Bin to Bin</td>
    <td>A1-03-003</td>
    <td>A6-02-001</td>
    <td>100</td>
    <td>Recalled</td>
    <td>2023-05-01</td>
  </tr>
  <tr>
    <td>MV002</td>
    <td>Bin to Bin</td>
    <td>A11-03-003</td>
    <td>A9-04-036</td>
    <td>100</td>
    <td>Recalled</td>
    <td>2023-05-01</td>
  </tr>
  <tr>
    <td>MV003</td>
    <td>Merchant to Merchant</td>
    <td>Merchant B</td>
    <td>Merchant C</td>
    <td>75</td>
    <td>Pending</td>
    <td>2023-05-05</td>
  </tr>
  <tr>
    <td>MV004</td>
    <td>Warehouse to Warehouse</td>
    <td>Warehouse C</td>
    <td>Warehouse Y</td>
    <td>120</td>
    <td>Recalled</td>
    <td>2023-05-08</td>
  </tr>
  <tr>
    <td>MV005</td>
    <td>Warehouse</td>
    <td>Warehouse Z</td>
    <td>Warehouse A</td>
    <td>90</td>
    <td>Recalled</td>
    <td>2023-05-10</td>
  </tr>
  <tr>
    <td>MV006</td>
    <td>Merchant to Merchant</td>
    <td>Merchant x</td>
    <td>Merchant B</td>
    <td>60</td>
    <td>Recalled</td>
    <td>2023-05-12</td>
  </tr>
</tbody>

            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>
