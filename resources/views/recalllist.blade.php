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
					<h1>Recall List</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head" style="color:  #1a405b;">
						<h3></h3>

					</div>
					<table class="table table-striped " id="myTable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                <thead>
            <tr>
                <th style=" color:#1d1d27; ">Recall ID</th>
                <th style=" color:#1d1d27; ">Merchant</th>
                <th style=" color:#1d1d27; ">Product</th>
                <th style=" color:#1d1d27; ">Quantity</th>
                <th style=" color:#1d1d27; ">Date</th>
                <th style=" color:#1d1d27; ">Status</th>

            </tr>
            </thead>
            <tbody>
  <tr>
    <td>001</td>
    <td>Merchant A</td>
     <td>Product G</td>
     <td>10</td>
    <td>2023-05-01</td>
    <td>Completed</td>
  </tr>
  <tr>
    <td>002</td>
    <td>Merchant B</td>
     <td>Product E</td>
    <td>5</td>
    <td>2023-05-05</td>
    <td>Pending</td>
  </tr>
  <tr>
    <td>003</td>
    <td>Merchant C</td>
     <td>Product Q</td>
    <td>8</td>
    <td>2023-05-10</td>
    <td>In Progress</td>
  </tr>
  <tr>
    <td>004</td>
    <td>Merchant D</td>
     <td>Product I</td>
    <td>12</td>
    <td>2023-05-15</td>
    <td>Completed</td>
  </tr>
  <tr>
    <td>005</td>
    <td>Merchant E</td>
     <td>Product T</td>
    <td>3</td>
    <td>2023-05-20</td>
    <td>Pending</td>
  </tr>
  <tr>
    <td>006</td>
    <td>Merchant F</td>
     <td>Product K</td>
    <td>6</td>
    <td>2023-05-25</td>
    <td>In Progress</td>
  </tr>
</tbody>


            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')
@include('layouts.listjs')
</html>
