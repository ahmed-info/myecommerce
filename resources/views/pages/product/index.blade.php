@extends('dashboard.layout.dashboard')
@section('body')
<a href="{{ route('product.create') }}">
    <div class="btn btn-primary">اضافة منتج</div>
</a>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">تيست</h3>

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
                            <th>اسم القسم</th>
                            <th>اسم المنتج</th>
                            <th>السعر</th>
                            <th>الصورة</th>
                            <th>الحدث</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index=> $product)
                        <tr>
                            <td>{{ $index}}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->productname}}</td>
                            <td>{{ $product->price}}</td>
                            {{-- product/svddbfb.png--}}
                            <td><img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->productname }}"
                                    width="100">
                            </td>
                            <td>

                                <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn
                                    btn-success">تعديل</a>
                                <form action="{{ route('product.remove',['id'=>$product->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" btn btn-danger">حذف</button>
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