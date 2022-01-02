@extends('abc::template')

@section('content')
    <h1>Привет, {{ $category->name }}!</h1>
    {{ route('shop.index')  }}
    <br>
    {{ route('shop.category', ['category' => 'kjk']) }}
@endsection

