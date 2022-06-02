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
                    <div class="card-header">{{ __('Team') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter File" name="image">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Github</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Github" name="github">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Facebook" name="facebook">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Gmail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Gmail" name="gmail">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Instagram" name="instagram">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
