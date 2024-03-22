@extends('dashboard.layout.dashboard')
@section('body')
<a href="{{ route('categry.create') }}">
    <div class="btn btn-primary">اضافة قسم</div>
</a>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>الاسم</th>
                            <th>التفاصيل</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>183</td>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->description}}</td>
                            <td>

                                <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn
                                    btn-success">تعديل</a>
                                <form action="{{ route('category.remove',['id'=>$category->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" href="{{ route('category.remove', ['id'=>$category->id]) }}"
                                        class=" btn btn-danger">حذف</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="javascript:void(0)" id="categoryForm" name="categoryForm">
                            <input type="hidden" value="myidd" name="id" id="id">
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
                                    <textarea name="description" class="form-control" name="" id="" cols="30"
                                        rows="10"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message }}</span>
                                    @enderror

                                </div>



                            </div>
                            <!-- /.card-body -->

                            {{-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->



@endsection