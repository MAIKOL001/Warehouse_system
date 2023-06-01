<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
    @include('layouts.listcss')

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
					<h1>Merchants</h1>

				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Merchants Count</p>
					</span>
				</li>
				<li>
					<i class='bx bx-smile' ></i>
					<span class="text">
						<h3>1000</h3>
						<p>Active</p>
					</span>
				</li>
				<li>
					<i class='bx bx-sad' ></i>
					<span class="text">
						<h3>20</h3>
						<p>Passive</p>
					</span>
				</li>
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="head" style="color:  #1a405b;">
						<h3></h3>
					</div>

                    @include('layouts.table')
					{{-- <table class="table table-striped " id="mytable" style="font-size:1rem; font-family:Mulish, sans-serif;"> --}}
                {{-- <thead>
            <tr>
                <th style="width:10%; color:#1d1d27; ">SKU</th>
                <th style="width:20%; color:#1d1d27; ">Name</th>
                <th style="width:10%; color:#1d1d27; ">Address</th>
                <th style="width:20%; color:#1d1d27; ">Phone number</th>
                <th style="width:20%; color:#1d1d27; ">Email</th>
                <th style="width:10%; color:#1d1d27; ">Details</th>
            </tr>
            </thead>
            <tbody>
                  <td>ABC</td>
    <td>John Smith</td>
    <td>123 Main St</td>
    <td>(555) 555-1234</td>
    <td>john.smith@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>DEF</td>
    <td>Jane Doe</td>
    <td>456 Oak Ave</td>
    <td>(555) 555-5678</td>
    <td>jane.doe@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>GHI</td>
    <td>Bob Johnson</td>
    <td>789 Elm St</td>
    <td>(555) 555-9012</td>
    <td>bob.johnson@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>JKL</td>
    <td>Susan Lee</td>
    <td>321 Maple Ave</td>
    <td>(555) 555-3456</td>
    <td>susan.lee@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>MNO</td>
    <td>David Chen</td>
    <td>654 Birch Rd</td>
    <td>(555) 555-7890</td>
    <td>david.chen@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>PQR</td>
    <td>Alice Kim</td>
    <td>987 Cedar St</td>
    <td>(555) 555-2345</td>
    <td>alice.kim@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>STU</td>
    <td>Michael Brown</td>
    <td>246 Pine Rd</td>
    <td>(555) 555-6789</td>
    <td>michael.brown@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
  <tr>
    <td>VWX</td>
    <td>Emily Davis</td>
    <td>369 Oak St</td>
    <td>(555) 555-0123</td>
    <td>emily.davis@example.com</td>
    <td><a href="#">View details</a></td>
  </tr>
            </tbody>
            </table> --}}
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>
