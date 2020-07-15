@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Item Update') }}</div>
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<form action = "/edit/<?php echo $items[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Item ID</td>
<td>
<input type = 'text' name = 'code'
value = '<?php echo$items[0]->code; ?>'/> </td>
</tr>
<tr>
<td>Item Name</td>
<td>
<input type = 'text' name = 'item'
value = '<?php echo$items[0]->item; ?>'/>
</td>
</tr>
<tr>
<td>Category</td>
<td>
<input type = 'text' name = 'category'
value = '<?php echo$items[0]->category; ?>'/>
</td>
</tr>
<tr>
<td>Price</td>
<td>
<input type = 'text' name = 'price'
value = '<?php echo$items[0]->price; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update Item" />
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
@endsection