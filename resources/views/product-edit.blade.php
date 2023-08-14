@extends('master')

@section('content')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Update Product </h1>
                            <h4 class="text-success bg-warning text-center"></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Product ID</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="product_id" value="{{ $product->product_id }}">

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" >

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Product Description </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="description" value="{{ $product->description }}" >

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" >

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" class="form-control btn btn-outline-primary" value="Save info">

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
