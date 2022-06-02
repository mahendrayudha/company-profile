@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Product') }}</div>
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>
                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($product as $item)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $item->name_product }}</td>
                                        <td>{{ number_format($item->price) }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>
                                            <a href="{{ route('product.show', $item->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                                class="inline-block">
                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
