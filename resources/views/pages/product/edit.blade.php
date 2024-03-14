@extends('dashboard.layout.dashboard')
@section('body')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('product.update',['id'=>$product->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-10">
                <label for="">ادخل القسم</label>
                <select name="category_id" class="form-control">
                    <option>اختر القسم</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $product->category_id) selected="selected"
                        @endif>{{
                        $item->name}}
                    </option>
                    @endforeach

                </select>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم المنتج</label>
                    <input type="text" name="productname" value="{{ $product->productname }}" class="form-control"
                        id="exampleInputEmail1" placeholder="ادخل اسم المنتج">
                    @error('productname')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">بلد المنشأ</label>
                    <input type="text" name="country" value="{{ $product->country }}" class="form-control"
                        id="exampleInputEmail1" placeholder="ادخل بلد المنشأ">
                    @error('country')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">السعر</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control"
                        id="exampleInputEmail1" placeholder="ادخل السعر">
                    @error('price')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">التفاصيل</label>
                    <input type="text" name="detail" value="{{ $product->detail }}" class="form-control"
                        id="exampleInputEmail1" placeholder="ادخل التفاصيل">
                    @error('detail')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">اللون</label>
                    <input type="text" name="color" value="{{ $product->color }}" class="form-control"
                        id="exampleInputEmail1" placeholder="ادخل اللون">
                    @error('color')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الصورة</label>
                    @if($product->image > 0)
                    <img src="{{ asset('images/'.$product->image) }}" height="100vh" alt="">
                    @else
                    <img src="{{ asset('images/default.jpg') }}" height="100vh" alt="">
                    @endif
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                        placeholder="ادخل الصورة">
                    @error('color')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الوصف</label>
                    <textarea name="detail" class="form-control" id="" cols="30" rows="10"></textarea>
                    @error('detail')
                    <span class="text-danger">{{$message }}</span>
                    @enderror

                </div>



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->


    <!-- /.card -->


    <!-- /.card -->


    <!-- /.card -->

</div>
@endsection