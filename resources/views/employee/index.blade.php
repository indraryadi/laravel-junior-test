@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employee') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3">Add New Employee</a>
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                    {{-- companie is function from employee model --}}
                                    <td>{{ $employee->companie->name }}</td> 
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                                            <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                </div>
                {{-- <div class="card-footer">
                    {{ $employees->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>    
@endsection