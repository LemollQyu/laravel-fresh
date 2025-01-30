@extends('layout.layout', [
    'judul' => 'List Produk'
])


@section('content')
    <h1>Ini list testing Product</h1>

    @foreach ($products as $product )
        <ul>
            <li>Nama produk : {{ $product->name }}</li>
            <li>Description produk : {{ $product->description }}</li>
            <li>Harga produk : {{ $product->price }}</li>
            {{-- memanggil accessor --}}
            <li>Seller : {{ $product->user->name_with_panggilan}}</li>
        </ul>

    @endforeach

    @include('components.footer')
@endsection


