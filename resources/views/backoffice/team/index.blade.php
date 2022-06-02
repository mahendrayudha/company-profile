@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Team') }}</div>
                    <div class="card-body">
                        <a href="{{ route('team.create') }}" class="btn btn-primary">Add New Team</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Github</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Gmail</th>
                                    <th scope="col">Instagram</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($team as $item)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td><img src="{{ $item->image }}" alt="" width="120px"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->github }}</td>
                                        <td>{{ $item->facebook }}</td>
                                        <td>{{ $item->gmail }}</td>
                                        <td>{{ $item->instagram }}</td>
                                        <td>
                                            <a href="{{ route('team.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                            <form action="{{ route('team.destroy', $item->id) }}" method="POST"
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
