@extends('layouts.admin')
@section('content')
   <div class="container">
      <div class="row mt-5">
         <div class="col d-flex justify-content-center">
            <div class="card mt-5">
                <div class="card-header" style="background-color:rgb(130, 119, 148);">
                   <h3 class="text-white">تحرير فئة </h3>
                </div>
                <div class="card-body">
                 <form action="{{route('categories.Update')}}" method="POST">
                    @csrf

                    
                    <input type="hidden" name="id" value="{{$catogriess->id}}">
                    <div class="row">
                        <div class="col">
                          <label class="form-label">اسم الفئة</label>
                          <input type="text" class="form-control" name="categ_name" value="{{$catogriess->name}}">
                           
                        </div>
                        <div class="col">
                            <label class="form-label">وصف الفئة</label>
                            <input type="text" class="form-control" name="categ_descreption" value="{{$catogriess->description}}" >
                           
                        </div>
                        <div class="col">
                            <label class="form-label">الايقونة </label>
<<<<<<< HEAD
                            <input type="text" class="form-control" name="cateq_icon" value="{{$catogriess->icon}}">
=======
                            <input type="text" class="form-control" name="icon" value="{{$catogriess->icon}}">
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
                            @error('icon')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
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