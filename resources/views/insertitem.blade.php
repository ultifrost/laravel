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
                    <div align="center" class="pr-3">
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Item ID</td>
<td><input type='text' name='code' /></td>
<tr>
<td>Item Name</td>
<td><input type="text" name='item'/></td>
</tr>
<tr>
<td>Category</td>
<td>
<select name="category">
<option value="Raw Material">Raw Material</option>
<option value="Ready-to-Eat">Ready to eat</option>
</select></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name='price'/></td>
</tr>
</tr>
<tr>
<td colspan = '2' align="center">
<input type = 'submit' value = "Add Item"/>
</td>
</tr>
</table>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{ url('/home') }}">Back</a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection