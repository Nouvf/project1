@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
      <div class="col">
         <h1 style="color: rgb(130, 119, 148)" > أهلاُ بكم في متجر  Green Oasis</h1>
         <small>  ندعوك إلى عالم أخضر يزخر بآلاف الأنواع من النباتات والزهور الفواحة. اختر من بين تشكيلة واسعة من النباتات المنزلية من متجرنا</small>
         <p>  تصل بين يديك اين ماكنت!</p>
      </div>
    </div>

    <div class="row mt-5">
       <div class="col ">
         @foreach($products as $item)
          <div class="row mt-5">
            <div class="col d-flex justify-content-center">
             <div class="card" style="width: 600px;">
                <div class="card-header" style="background-color:  rgb(130, 119, 148);">
                 <span class="text-white">{{$item->name}}</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                          <ul class="list-unstyled">
                            <li><h3><span class="badge bg-secondary  " style="color:rgb(28, 99, 68);">{{$item->name}}</span></h3></li>
                            <li style="color:rgb(28, 99, 68);">{{$item->descreption}}</li>
                            <li><span class="badge bg-danger"> {{$item->price}}</span></li>
                          </ul>
                        </div>
                        <div class="col  d-flex justify-content-center">
                         <img src="{{$item->image}}" width="100" hoeght="100">
                        </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <a href="{{route('shopping.details',['id'=>$item->id])}}" class="btn btn-success" >اختر هذا المنتج </a>
                      </div>
                    </div>
                </div>
             </div>
            </div>
          </div>
         @endforeach
       </div>
    </div>
</div>

@endsection

