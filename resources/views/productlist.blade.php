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
					<h1>Product List</h1>
					{{-- <ul class="breadcrumb">
						<li>
							<a href="#" style="font-size:1.5rem; color:#be1204;">P r o d u c t s</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="orderlist">Order list</a>
                            <a class="active" href="binlist">/Bin list/</a>

						</li>
					</ul> --}}
				</div>


			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-package'></i>
					<span class="text">
						<h3>126013</h3>
						<p>Product Count</p>
					</span>
				</li>
				<li>
					<i class='bx bx-check'></i>
					<span class="text">
						<h3>126000</h3>
						<p>Passed quality Check</p>
					</span>
				</li>
				<li>
					<i class='bx bx-x' ></i>
					<span class="text">
						<h3>13</h3>
						<p>Failed Quality Check</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head" style="color:  #1a405b;">
						<h3 ></h3>

					</div>
                    @include('layouts.producttable')
					<table class="table table-striped " id="mytable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                <thead>
                    <th>SKU</th>
                    <th>Merchant Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Quality check<br>Passed</th>
                    <th>Quality check<br>Failed</th>
                    <th>Location</th>
                    <th>Items pending</th>
                    <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KLI001</td>
                        <td>Merchant A</td>
                        <td>Product X</td>
                        <td>100</td>
                        <td>80</td>
                        <td>20</td>
                        <td>A1-003-027</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>KEL002</td>
                        <td>Merchant B</td>
                        <td>Product Y</td>
                        <td>50</td>
                        <td>40</td>
                        <td>10</td>
                        <td>A1-004-026</td>
                        <td>0</td>
                       <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>USK003</td>
                        <td>Merchant C</td>
                        <td>Product Z</td>
                        <td>200</td>
                        <td>180</td>
                        <td>20</td>
                        <td>A1-005-025</td>
                        <td>0</td>
                       <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>KUS004</td>
                        <td>Merchant A</td>
                        <td>Product X</td>
                        <td>75</td>
                        <td>60</td>
                        <td>15</td>
                        <td>A1-006-024</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>UTI005</td>
                        <td>Merchant B</td>
                        <td>Product Y</td>
                        <td>30</td>
                        <td>25</td>
                        <td>5</td>
                        <td>A1-007-023</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>MLR006</td>
                        <td>Merchant C</td>
                        <td>Product Z</td>
                        <td>150</td>
                        <td>130</td>
                        <td>20</td>
                        <td>A1-008-022</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>FGH007</td>
                        <td>Merchant A</td>
                        <td>Product X</td>
                        <td>50</td>
                        <td>40</td>
                        <td>10</td>
                        <td>A1-009-021</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>
                    <tr>
                        <td>DER008</td>
                        <td>Merchant B</td>
                        <td>Product Y</td>
                        <td>100</td>
                        <td>80</td>
                        <td>20</td>
                        <td>A1-010-020</td>
                        <td>0</td>
                        <td><a href="productdetails"><i class='bx bx-clipboard' style="color:#be1204;"></i></a></td>
                    </tr>

                </tbody>
            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>

