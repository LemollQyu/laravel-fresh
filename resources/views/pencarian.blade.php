
@extends('layout.layout', [
    'judul' => "Pencarian"
])


@section('content')
    <h1>Buku</h1>
    {{-- ini untuk mendapatkan data paramsnya --}}
    <p>Yang dicari {{ request()->search }}</p>
    <p>Harga : {{ formatRupiah(500000) }}</p>


    @include('components.footer')
@endsection


