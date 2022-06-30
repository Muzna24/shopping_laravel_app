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
                            <div class="col-4">
                                <button class="btn btn-info" onclick="location.href='{{ url('product/show') }}'">
                                    {{ __('Show products') }}
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" onclick="location.href='{{ url('order/show') }}'">
                                    {{ __('Show orders') }}
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" onclick="location.href='{{ url('import-file') }}'">
                                    {{ __('Import/ Export orders') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-info" onclick="location.href='{{ url('order/list') }}'">
                                    {{ __('Show orders') }}
                                </button>
                            </div>
                            <div class="col-4">
                                <div class="btn btn-info" onclick="location.href='{{ url('product/list') }}'">
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
