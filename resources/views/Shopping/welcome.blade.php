@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1 style="color: rgb(28, 99, 68);text-shadow: 0 0 10px #496958, 0 0 20px #3d6a57;">  نبذة عن  Green Oasis:</h1>
            <h6 style="color: rgb(28, 99, 68)">استكشف عالم النباتات: في "الواحة الخضراء"، ندعوك إلى عالم أخضر يزخر بآلاف الأنواع من النباتات والزهور الفواحة. اختر من بين تشكيلة واسعة من النباتات المنزلية، والنباتات الخارجية، والصباريات، والتعرف على أسرار العناية بكل نوع من خلال تجربة تسوق فريدة من نوعها، حيث يمكنك الاسترخاء والاستمتاع بجو هادئ ومريح محاطًا بالخضرة والألوان الزاهية.</h6>
            <p style="color: rgb(28, 99, 68);text-shadow: 0 0 10px #ba5b5b, 0 0 20px #3d6a57;" >تصل بين يديك أينما كنت!</p>
        </div>
    </div>
    </div>
    <div class="row">
      <div class="col ">
        <div class="row">
          @foreach($categories2s as $item)

          <div class="col sm-5 col-md-6 col-12 d-flex justify-content-center mb-5">
            <a href="{{route('shopping.list',['categories_id'=>$item->id])}}">
              <div class="card"  style="width: 300px;">
                  <div class="card-header" style="background-color: rgb(130, 119, 148);">
                    <h3 style="color: rgb(236, 241, 239)">{{$item->name}}</h3>
                    </div>
                    <div class="card-body">
                      <div class="row mt-5">
                        <div class="col d-flex justify-content-center">
                          <small style="color: rgb(55, 123, 94)">{{$item->description}}</small>
                        </div>
                        <div class="col ">
                          <i class="{{$item->icon}}" style="font-size: 100px; color:rgb(130, 119, 148);"></i>
                        </div>
                      </div>
        
                    </div>

    

              </div>
            </a>

           

          </div>
          @endforeach

        </div>
      </div>

    </div>
    </div>

    @endsection