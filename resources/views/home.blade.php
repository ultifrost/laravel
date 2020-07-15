@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Dashboard') }}</div>
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="{{ url('/insertitem') }}" class="pr-3">Insert</a>               
                  
                   <a href="{{ url('/viewitem') }}" class="pr-3">View Record</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
