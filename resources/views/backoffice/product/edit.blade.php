@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->any())
                        <div class="mb-5" role="alert">
                            <div class="alert alert-danger">
                                There's something wrong!
                            </div>
                            <div class="alert alert-danger">
                                <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="card-header">{{ __('Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update', $product->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Product</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name Product" name="name_product"
                                    value="{{ $product->name_product }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Price" name="price"
                                    value="{{ $product->price }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Url</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter URL" name="url"
                                    value="{{ $product->url }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Image" name="image">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category_id">

                                    @foreach ($category as $item)
                                        {{-- <option value="{{ $item['id'] }}">{{ $item['name'] }}</option> --}}
                                        <option class="mr-3" value="{{ $item['id'] }}"
                                            {{ $product->id == $item['id'] ? 'selected' : '' }}>
                                            {{ $item['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Description" name="description"
                                    value="{{ $product->description }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
