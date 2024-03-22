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
        <form method="POST" action="{{ route('category.insert') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم القسم</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        placeholder="ادخل اسم القسم">
                    @error('name')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الوصف</label>
                    <textarea name="description" class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    @error('description')
                    <span class="text-danger">{{$message }}</span>
                    @enderror

                </div>



            </div>
            <!-- /.card-body -->

            <div class="col-sm-offset-2 col-sm-10"><br />
                <button type="submit" class="btn btn-primary" id="btn-save">Save changes</button>
            </div>
        </form>
    </div>
    <!-- /.card -->


    <!-- /.card -->


    <!-- /.card -->


    <!-- /.card -->

</div>
@endsection