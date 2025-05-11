@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <h6 class="my-5 mx-5" style="font-size: 30px; color: rgb(28, 99, 68)">شكرًا لاختيارك Green Oasis! نباتاتك في طريقها لإضفاء الحياة على مساحتك! 🌱</h6>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">Green Oasis</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #12345</li>
          <li class="text-black mt-1">May 2025</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>Pro Package</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">$199.00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Consulting</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">$100.00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Support</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">$10.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: $10.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">View in browser</u></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>

    </div>
  </div>
</div>
@endsection