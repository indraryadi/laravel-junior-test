{{-- @dd($companies) --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Companie') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('companie.index') }}" class="btn btn-primary mb-3">Back to home</a>
                    <form action="{{ route('companie.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label for="name">Company Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Companie Name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocuss>
                                    @error('name')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group mb-3">
                                    <label for="logo">Company Logo</label>
                                    <input type="file" name="logo" id="logo" placeholder="Your Companie Logo" class="form-control @error('logo') is-invalid @enderror" >
                                    @error('logo')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group mb-3">
                                    <label for="email">Company Email</label>
                                    <input type="text" name="email" id="email" placeholder="Your Companie Email" class="form-control @error('email') is-invalid  @enderror" required autocomplete="email" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">  
                                <div class="form-group mb-3">
                                    <label for="website">Company Website</label>
                                    <input type="text" name="website" id="website" placeholder="Your Companie Website" class="form-control @error('website') is-invalid @enderror" required autocomplete="website" autofocus>
                                    @error('website')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
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