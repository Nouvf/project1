@extends('layouts.admin')
@section('content')
   <div class="container">
      <div class="row mt-5">
         <div class="col d-flex justify-content-center">
            <div class="card mt-5">
                <div class="card-header" style="background-color: rgb(109, 24, 200);">
                   <h3 class="text-white">تحرير منتج </h3>
                </div>
                <div class="card-body">
                 <form action="{{route('categories.Update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$products->id}}">
                    <div class="row">
                        <div class="col">
                          <label class="form-label">اسم المنتج</label>
                          <input type="text" class="form-control" name="name" value="{{$products->name}}">
                           
                        </div>
                        <div class="col">
                            <label class="form-label">وصف المنتج</label>
                            <input type="text" class="form-control" name="descreption" value="{{$products->descreption}}" >
                           
                        </div>
                        <div class="col">
                            <label class="form-label">سعر المنتج</label>
                            <input type="text" class="form-control" name="price" value="{{$products->price}}" >
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                          <label class="form-label"> كمية المخزون</label>
                          <input type="text" class="form-control" name="stock" value="{{$products->stock}}">
                           
                        </div>
                        <div class="col">
                            <label class="form-label"> الفئة</label>
                            <input type="text" class="form-control" name="categories2_id" value="{{$products->categories2_id}}" >
                           
                        </div>
                        <div class="col">
                            <label class="form-label">صورة المنتج</label>
                            <input type="file" class="form-control" name="image" value="{{$products->image}}" >
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
         </div>
      </div>
   

   
   </div>
@endsection