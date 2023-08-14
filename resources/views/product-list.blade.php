@extends('master')

@section('content')


    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Product List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover table-bordered text-center">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Product ID</th>
                                    <th>Price</th>
                                    <th>description</th>
                                    <th>Action</th>
                                </tr>
                                @php $i = 1 @endphp
                                @foreach($products as $product)
                                <tr>
                                    <td> <b>{{ $i++ }}</b></td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="img" style="height: 100px; width: 100px ">
                                    </td>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('edit.product', ['id'=>$product->id]) }}" class="btn btn-outline-primary mx-1 btn-sm">Edit</a>
{{--                                        <a href="{{ route('delete.student', ['id'=>$student->id]) }}" class="btn btn-outline-danger  btn-sm" onclick="return confirm('Are you sure Delete This !! ')">Delete</a>--}}
                                        <form action="{{ route('delete.product') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$product->id}}" name="id">
                                            <button type="submit" class="btn btn-outline-danger  btn-sm" onclick="return confirm('Are you sure Delete This !! ')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
