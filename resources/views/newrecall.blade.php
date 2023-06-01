<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Warehouse</title>

    @include('layouts.listcss')
    @include('layouts.formcss')
  <style>



</style>

</head>
<body>
    {{-- sidenav --}}
    @include('layouts.sidenav')
    {{-- end of sidenav --}}
<section id="content">
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- end of navbar --}}
    <main>

        <H1 style="position:relative;
               left:1rem;
               bottom:1rem;
               color:#10405b;">
        <i class="fa-solid fa-pen-to-square"></i>Recall Form
    </H1>

 <form class="form_container " >

  <div class="row">
    <div class="col-md-6">
  <div class="input_container">
    <label class="input_label" for="movement_type">Merchant:</label>
    <select class="input_field" id="movement_type" style="background: white;">
       <option value="" disabled selected hidden></option>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
    </select>
  </div>
</div>

    <div class="col-md-6">
      <div class="input_container">
        <label class="input_label" for="merchant">Product:</label>
    <select class="input_field" id="merchant" style="background: white;">
      <option value="" disabled selected hidden></option>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
    </select>
      </div>
    </div>
  </div>



  <div class="row">

    <div class="col-md-6">
      <div class="input_container">
        <label class="input_label" for="from">Quantity:</label>
        <input placeholder="" title="from" name="from" type="text" class="input_field" id="quantity_failed">
      </div>
    </div>
  </div>

  <br>
  <button title="add" type="add" class="submit_btn" style="position:relative; bottom:3rem;">
    <span>Add to list</span>
  </button>
</form><hr>
<table class="table table-striped" id="myTable" cellpadding="10" cellspacing="20" style="padding-left:50px; border-collapse: collapse; width: 100%;">
 <thead>
            <tr>
                <th style=" color:##10405b; ">Movement No</th>
                <th style=" color:#10405b; ">Movement Type</th>
                <th style=" color:#10405b; ">From</th>
                <th style=" color:#10405b; ">To</th>
                <th style=" color:#10405b; ">Quantity</th>
                <th style=" color:#10405b; ">Date</th>
            </tr>
            </thead>

</table>
<button title="submit" type="submit" class="submit_btn" style="margin-top:5rem; width:6rem; float:left;">
    <span>Submit</span>
  </button>
</div>



    </main>
</section>
</body>
@include('layouts.frontendjs')
</html>
