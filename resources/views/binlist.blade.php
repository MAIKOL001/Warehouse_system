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
					<h1>Bins</h1>
					{{-- <ul class="breadcrumb">
						<li>
							<a href="#" style="font-size:1.5rem; color:#be1204;">B I N S</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="productlist">Product list</a>
                            <a class="active" href="binlist">/Order list/</a>

						</li>
					</ul> --}}
				</div>


			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>234</h3>
						<p>Bin Count</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>150</h3>
						<p>Full</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>50</h3>
						<p>Empty</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3></h3>

					</div>
                    @include('layouts.bintable')
					<table class="table table-striped " id="myTable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                <thead>
            <tr>
                <th style=" color:#1d1d27; ">Bin code</th>
                <th style=" color:#1d1d27; ">Item code</th>
                <th style=" color:#1d1d27; ">Product Name</th>
                <th style=" color:#1d1d27; ">Total Quantity</th>
                <th style=" color:#1d1d27; ">Quantity passed</th>
                <th style=" color:#1d1d27; ">Quantity Failed</th>
                <th style=" color:#1d1d27; ">Mechant Name</th>
            </tr>
            </thead>
            <tbody>
                  <tr>
      <td>BIN001</td>
      <td>ITEM001</td>
      <td>Product 1</td>
      <td>10</td>
      <td>8</td>
      <td>2</td>
      <td>Merchant A</td>
    </tr>
    <tr>
      <td>BIN002</td>
      <td>ITEM002</td>
      <td>Product 2</td>
      <td>15</td>
      <td>12</td>
      <td>3</td>
      <td>Merchant B</td>
    </tr>
            </tbody>

            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>
