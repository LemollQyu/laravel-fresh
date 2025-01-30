@extends('layout.layout', [
    'judul' => "Ini Kumpulan Buku"
])

@section('content')
<h1>Ini list buku</h1>

{{-- ini tidak mengeksekusi tag htmlnya --}}
{{ $buku1 }}
<br>

{{-- ini tag html di eksekusi --}}
{!! $buku2 !!}

{{-- tampilin data dengan forEach jika datanya berupa array --}}

@foreach ($listBuku as $buku )
    {{ $buku }},
@endforeach

<br>

@for ($a = 1; $a < 10; $a++)
{{$a}}
@endfor



{{-- @while (+)
{{}}

@endwhile --}}

{{-- manggil component --}}
@include('components.footer')
@endsection


