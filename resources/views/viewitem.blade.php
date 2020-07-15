@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Entry') }}</div>
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<table border = "1" style="width: 500px">
<tr>
<td>Id</td>
<td>Item ID</td>
<td>Item Name</td>
<td>Category</td>
<td>Price</td>
<td>Edit</td>
<td>Delete</td>
</tr>
@foreach ($items as $item)
<tr>
<td>{{ $item->id }}</td>
<td>{{ $item->code }}</td>
<td>{{ $item->item }}</td>
<td>{{ $item->category }}</td>
<td>{{ $item->price }}</td>
<td><a href = 'edit/{{ $item->id }}'>Edit</a></td>
<td><a href = 'delete/{{ $item->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
<a href="{{ url('/home') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
