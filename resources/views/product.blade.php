@extends('abc::template')

@section('content')
    <h1>Привет, {{ $product->name }}!</h1>
    {{ route('shop.product', $product)  }}
@endsection

