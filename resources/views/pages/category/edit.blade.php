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
        <form method="POST" action="{{ route('category.update',['id'=>$category->id]) }}">
            @method('put')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم القسم</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}"
                        id="exampleInputEmail1" placeholder="Enter email">
                    @error('name')

                    <span class="text-danger">{{ $message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الوصف</label>
                    <textarea name="description" class="form-control" name="" id="" cols="30"
                        rows="10">{{ $category->description }}</textarea>
                    @error('description')

                    <span class="text-danger">{{ $message}}</span>
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