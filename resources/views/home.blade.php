@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-info">
                                    {{ __('You are logged in!') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (Auth::User()->role == 'Admin')
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="alert alert-info" role="button">
                                    {{ __('Show products') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="alert alert-info" role="button">
                                    {{ __('Show orders') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="alert alert-info" role="button">
                                    {{ __('Import/ Export orders') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="alert alert-info" role="button">
                                    {{ __('Show orders') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="alert alert-info" role="button">
                                    {{ __('Show products') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
