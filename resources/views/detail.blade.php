@extends('layout.layout', [
    'judul' => "Detail Buku"
])


@section('content')
    <h1>Ini detail buku</h1>

    <p>Kode Buku: {{ $id }}</p>


    @include('components.footer')
@endsection

@section('script')
<script>alert("holla")</script>
@endsection


