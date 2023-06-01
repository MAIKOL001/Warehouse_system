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
    @include('layouts.detailscss')
    @include('layouts.datatablescss')
</head>
<body>
    {{-- sidenav --}}
    @include('layouts.sidenav')
    <section id="content">
        {{-- navbar --}}
        @include('layouts.navbar')
        <main>
		      <div class="table-data">
			  <div class="order">
			<div class="container" style="color: #1a405b;">
  <div class="row">
     <div class="col">
      <strong><a href="productlist">
        <i class='bx bx-arrow-back' style='color:#be1204; font-size:1.5rem;'  ></i>
        </a>
    </strong>
    </div>
    <div class="col">
      <strong>Merchant name :</strong>
    </div>
    <div class="col">
      <strong>Product name :</strong>
    </div>
  </div>
</div>


					<table class="table table-striped " id="myTable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                <thead>
                    <th>Barcode</th>
                    <th>Name</th>
                    <th>Quality check</th>
                    <th>Bin code</th>
                    </tr>
                </thead>
               <tbody>
    <tr>
      <td>1234567890</td>
      <td>Product 1</td>
      <td>Passed</td>
      <td>A1-03-002</td>
    </tr>
    <tr>
      <td>9876543210</td>
      <td>Product 2</td>
      <td>Failed</td>
      <td>B2-05-001</td>
    </tr>
    <tr>
      <td>5432167890</td>
      <td>Product 3</td>
      <td>Passed</td>
      <td>C3-01-003</td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')
@include('layouts.listjs')
</html>
