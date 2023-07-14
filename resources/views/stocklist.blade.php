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
             <div class="head-title">
				<div class="left">
					<h1>Stock List</h1>
					{{-- <ul class="breadcrumb">
						<li>
							<a href="#" style="font-size:1.5rem; color:#be1204;">O r d e r s</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="productlist">Product list</a>
                            <a class="active" href="binlist">/Bin list/</a>

						</li>
					</ul> --}}
				</div>


			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-collection'></i>
					<span class="text">
						<h3>7000</h3>
						<p>Order Count</p>
					</span>
				</li>
				<li>
					<i class='bx bx-loader'></i>
					<span class="text">
						<h3>4500</h3>
						<p>In Processing</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-truck'></i>
					<span class="text">
						<h3>1500</h3>
						<p>Delivered</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
@include('layouts.stocktable')
					<table class="table table-striped " id="mytable" style="font-size:1rem; font-family:Mulish, sans-serif;">


  <thead>
    <tr>
      <th style="color:#1d1d27;">Order number</th>
      <th style="color:#1d1d27;">Merchant name</th>
      <th style="color:#1d1d27;">Receiving date</th>
      <th style="color:#1d1d27;">Total quantities received</th>
      <th style="color:#1d1d27;">Total Quantity Passed QC</th>
      <th style="color:#1d1d27;">Total Quantity Fail QC</th>
      <th style="color:#1d1d27;">Total SKUs Received</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>123456</td>
      <td>Merchant A</td>
      <td>2023-05-10</td>
      <td>100</td>
      <td>90</td>
      <td>10</td>
      <td>50</td>
    </tr>
    <tr>
      <td>789012</td>
      <td>Merchant B</td>
      <td>2023-05-12</td>
      <td>200</td>
      <td>180</td>
      <td>20</td>
      <td>100</td>
    </tr>
    <tr>
      <td>345678</td>
      <td>Merchant C</td>
      <td>2023-05-15</td>
      <td>150</td>
      <td>140</td>
      <td>10</td>
      <td>75</td>
    </tr>
    <tr>
      <td>901234</td>
      <td>Merchant D</td>
      <td>2023-05-18</td>
      <td>75</td>
      <td>70</td>
      <td>5</td>
      <td>40</td>
    </tr>
    <tr>
      <td>567890</td>
      <td>Merchant E</td>
      <td>2023-05-20</td>
      <td>250</td>
      <td>230</td>
      <td>20</td>
      <td>120</td>
    </tr>
  </tbody>
</table>

				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>
