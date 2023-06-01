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
					<h1>Orders</h1>
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

					<table class="table table-striped " id="mytable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                {{-- <thead>
    <tr>
      <th>Order No.</th>
      <th>Merchant Name</th>
      <th>Customer Name</th>
      <th>Cust PhoneNo.</th>
      <th>Address</th>
      <th>Status</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>12345</td>
      <td>ABC Store</td>
      <td>John Doe</td>
      <td>123456</td>
      <td>123 Main St.</td>
      <td>Processing</td>
      <td class="details-control"><i class="fa-solid fa-eye"></i></td>
    </tr>
    <tr>
      <td>67890</td>
      <td>XYZ Store</td>
      <td>Jane Smith</td>
      <td>789012</td>
      <td>456 Maple Ave.</td>
      <td>Dispatched</td>
     <td class="details-control"><i class="fa-solid fa-eye"></i></td>
    </tr>
    <tr>
      <td>24680</td>
      <td>123 Store</td>
      <td>Bob Johnson</td>
      <td>345678</td>
      <td>789 Oak St.</td>
      <td>Delivered</td>
     <td class="details-control"><i class="fa-solid fa-eye"></i></td>
    </tr>
    <tr>
      <td>13579</td>
      <td>XYZ Store</td>
      <td>Sally Williams</td>
      <td>901234</td>
      <td>789 Elm St.</td>
      <td>Cancelled</td>
     <td class="details-control"><i class="fa-solid fa-eye"></i></td>
    </tr>
  </tbody>
            </table> --}}
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')
@include('layouts.order-listjs')
</html>
