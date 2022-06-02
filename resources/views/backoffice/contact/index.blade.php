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
                    <div class="card-header">{{ __('Contact') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('contact.update', $contact->id) }}">
                            @csrf
                            @method('put')
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="address" value="{{ $contact->address }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="phone_number" value="{{ $contact->phone_number }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" value="{{ $contact->email }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="instagram" value="{{ $contact->instagram }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Url</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="url" value="{{ $contact->url }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
