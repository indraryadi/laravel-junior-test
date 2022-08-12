{{-- @dd($companies) --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employee') }}</div>
                
                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <a href="{{ route('employee.index') }}" class="btn btn-primary mb-3">Back to home</a>
                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Your First Name" class="form-control mb-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="last_name">First Name</label>
                                    <input type="text" name="last_name" id="last_name" placeholder="Your Last Name" class="form-control mb-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="Company">Company</label>
                                    <input type="text" name="Company" id="Company" placeholder="Your Company" class="form-control mb-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" class="form-control mb-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" placeholder="Your Phone" class="form-control mb-3">
                                </div>
                            </div>
                        </div>
                        <button type="sumbit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection