<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<!-- Boxicons -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <a href="https://canvasjs.com/javascript-charts/multiple-axis-column-chart/" target="_blank" title="JavaScript Column Charts with Multiple Axes "></a></div>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	{{-- <link rel="stylesheet" href="style.css"> --}}
     @include('layouts.homecss')
	<title>AdminHub</title>

 <style>
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  border-radius:12px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>


	<!-- SIDEBAR -->
	@include('layouts.sidenav')
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		@include('layouts.navbar')
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>

				</div>

			</div>
 <div class="filter" style="padding-bottom:1rem; position: relative; left:1rem; bottom:3.1rem; color:#1a405b">
				<div class="order">
					<div class="head" style="color:grey;">
                        Filter Options
                    </div>
                     <div style="display: flex;">
    <div style="flex: 1;">
        <div class="input_container">
           <div id="reportrange" style="background: #ccc; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 97%; border-radius:8px;">
   <i class='bx bxs-calendar'></i></i>&nbsp;
    <span></span><i class='bx bx-caret-down'></i>
</div>
        </div>
    </div>



</div>

                    </div>
				</div>

             <div class="table-data">
				<div class="order">
					<div class="head">
                    </div>
                        <div id="chartContainer" style="height: 300px; width:auto;  bottom:1rem;"></div>
                    </div>
				</div>



            </div>
			<!-- Modal HTML -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3 id="modalTitle"></h3>
    <p id="modalText"></p>
  </div>
</div>

<!-- List with modal triggers -->
<ul class="box-info">
  <li>
    <a href="#" id="modalTrigger1">
      <i class='bx bx-package'></i>
    </a>
    <span class="text">
      <h3>234670</h3>
      <p>Stock Count</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger2">
      <i class='bx bxs-group'></i>
    </a>
    <span class="text">
      <h3>334</h3>
      <p>Merchants</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger3">
      <i class='bx bx-box'></i>
    </a>
    <span class="text">
      <h3>764</h3>
      <p>Bins</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger4">
      <i class='bx bx-loader'></i>
    </a>
    <span class="text">
      <h3>2398</h3>
      <p>Pending Orders</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger5">
      <i class='bx bx-error-circle'></i>
    </a>
    <span class="text">
      <h3>116</h3>
      <p>Orders with Disputes</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger6">
      <i class='bx bx-arrow-to-bottom'></i>
    </a>
    <span class="text">
      <h3>6435</h3>
      <p>Orders Received</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger7">
      <i class='bx bx-pin'></i>
    </a>
    <span class="text">
      <h3>5678</h3>
      <p>Total orders placed</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger8">
      <i class='bx bx-refresh'></i>
    </a>
    <span class="text">
      <h3>134</h3>
      <p>SKUs Reorder</p>
    </span>
  </li>

  <li>
    <a href="#" id="modalTrigger9">
      <i class='bx bx-body'></i>
    </a>
    <span class="text">
      <h3>2543</h3>
      <p>Clients Served</p>
    </span>
  </li>
</ul>




		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	{{-- <script src="script.js"></script> --}}
</body>
@include('layouts.filterjs')
@include('layouts.frontendjs')
@include('layouts.chartjs')

<script>
// Get the modal elements
const modal = document.getElementById("myModal");
const modalTitle = document.getElementById("modalTitle");
const modalText = document.getElementById("modalText");

// Get the trigger elements
const modalTrigger1 = document.getElementById("modalTrigger1");
const modalTrigger2 = document.getElementById("modalTrigger2");
const modalTrigger3 = document.getElementById("modalTrigger3");
const modalTrigger4 = document.getElementById("modalTrigger4");
const modalTrigger5 = document.getElementById("modalTrigger5");
const modalTrigger6 = document.getElementById("modalTrigger6");
const modalTrigger7 = document.getElementById("modalTrigger7");
const modalTrigger8 = document.getElementById("modalTrigger8");
const modalTrigger9 = document.getElementById("modalTrigger9");


// Get the close button element
const closeBtn = document.getElementsByClassName("close")[0];

// Function to open the modal with the given title and text
function openModal(title, text) {
  modalTitle.textContent = title;
  modalText.textContent = text;
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Open the corresponding modal when a trigger is clicked
modalTrigger1.onclick = function() {
  openModal("Stock Count", "234670");
};

modalTrigger2.onclick = function() {
  openModal("Merchants", "334");
};

modalTrigger3.onclick = function() {
  openModal("Bins", "764");
};
modalTrigger4.onclick = function() {
  openModal("Pending Orders", "764");
};
modalTrigger5.onclick = function() {
  openModal("Orders with disputes", "764");
};
modalTrigger6.onclick = function() {
  openModal("Orders Received", "764");
};
modalTrigger7.onclick = function() {
  openModal("Total Orders Placed", "764");
};
modalTrigger8.onclick = function() {
  openModal("SKUs to Reorder", "764");
};
modalTrigger9.onclick = function() {
  openModal("Clients Served", "764");
};

// Close the modal when the close button is clicked
closeBtn.onclick = function() {
  closeModal();
};

// Close the modal when the user clicks outside of it
window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
};
</script>


</html>
