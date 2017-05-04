@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-top:10px;" class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div style="padding-top:10px;" class="pull-right">
                <a class="btn btn-success" href="{{ route('productCRUD.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Amazon Product Link</th>
			<th>Amazon Price</th>
			<th>Flipkart Product Link</th>
			<th>Flipkart Price</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->Amazon_Product_Link}}</td>
		<td>{{ $product->Amazon_Price}}</td>
		<td>{{ $product->Flipkart_Product_Link}}</td>
		<td>{{ $product->Flipkart_Price}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('productCRUD.show',$product->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('productCRUD.edit',$product->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['productCRUD.destroy', $product->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $products->render() !!}
@endsection