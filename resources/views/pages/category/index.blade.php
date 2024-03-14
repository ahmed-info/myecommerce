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
    </div>
</div>
@endsection