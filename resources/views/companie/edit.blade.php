{{-- @dd($companie) --}}
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
                    <form action="{{ route('companie.update',$companie->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Companie Name" value="{{ $companie->name }}" class="form-control mb-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="logo">Company Logo</label>
                                    <input type="file" name="logo" id="logo" placeholder="Your Companie Logo" class="form-control mb-3">
                                    <img src="/images/{{ $companie->logo }}" alt="logo" class="companie_logo">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="email">Company Email</label>
                                    <input type="text" name="email" id="email" placeholder="Your Companie Email" class="form-control mb-3" value="{{ $companie->email }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group">
                                    <label for="website">Company Website</label>
                                    <input type="text" name="website" id="website" placeholder="Your Companie Website" class="form-control mb-3" value="{{ $companie->website }}">
                                </div>
                            </div>
                        </div>
                        <button type="sumbit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection