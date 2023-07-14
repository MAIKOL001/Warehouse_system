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

                    @include('layouts.merchanttable')
					<table class="table table-striped " id="mytable" style="font-size:1rem; font-family:Mulish, sans-serif;">
                 <thead>
            <tr>
                <th style=" color:#1d1d27; ">Merchant Id</th>
                <th style=" color:#1d1d27; "> Merchant Name</th>
                <th style=" color:#1d1d27; ">Address</th>
                <th style=" color:#1d1d27; ">Phone number</th>
                <th style=" color:#1d1d27; ">Email</th>
                <th style="color:#1d1d27; ">Total SKUs</th>
                <th style=" color:#1d1d27; ">Merchant sign up date</th>
            </tr>
            </thead>
            <tbody>
                  <tr>
      <td>123</td>
      <td>Merchant A</td>
      <td>123 Main St, City A</td>
      <td>555-1234</td>
      <td>merchantA@example.com</td>
      <td>100</td>
      <td>2022-05-15</td>
    </tr>
    <tr>
      <td>456</td>
      <td>Merchant B</td>
      <td>456 Elm St, City B</td>
      <td>555-5678</td>
      <td>merchantB@example.com</td>
      <td>200</td>
      <td>2022-06-20</td>
    </tr>
    <tr>
      <td>789</td>
      <td>Merchant C</td>
      <td>789 Oak St, City C</td>
      <td>555-9012</td>
      <td>merchantC@example.com</td>
      <td>150</td>
      <td>2022-07-10</td>
    </tr>
    <tr>
      <td>1011</td>
      <td>Merchant D</td>
      <td>1011 Pine St, City D</td>
      <td>555-3456</td>
      <td>merchantD@example.com</td>
      <td>75</td>
      <td>2022-08-05</td>
    </tr>
    <tr>
      <td>1213</td>
      <td>Merchant E</td>
      <td>1213 Maple St, City E</td>
      <td>555-7890</td>
      <td>merchantE@example.com</td>
      <td>250</td>
      <td>2022-09-25</td>
    </tr>
            </tbody>
            </table>
				</div>
        </main>
    </section>

</body>
@include('layouts.frontendjs')

</html>
