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
                    <div class="card-header">{{ __('Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('category.update', $category->id) }}">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Category</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Category" name="name"
                                    value="{{ $category->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
