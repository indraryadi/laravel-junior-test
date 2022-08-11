{{-- @dd($companies) --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Companie') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <a href="{{ route('companie.create') }}" class="btn btn-primary mb-3">Add New Company</a>
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($companies as $companie)
                                <tr>
                                    <td>{{ $companie->id }}</td>
                                    <td>{{ $companie->name }}</td>
                                    <td><img src="/images/{{ $companie->logo }}" alt="logo" class="companie_logo"></td>
                                    <td>{{ $companie->email }}</td>
                                    <td>{{ $companie->website }}</td>
                                    <td>
                                        <form action="{{ route('companie.destroy',$companie->id) }}" method="POST">
                                            <a href="{{ route('companie.edit',$companie->id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection