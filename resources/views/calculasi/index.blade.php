@extends('layouts.app')

@section('content')
<div class="container mx-5 my-5 d-flex flex-wrap">

<h1>Hasil Kalkulasi </h1>

</div>
    <div class="container mx-5 my-5 d-flex flex-wrap">

        @foreach ($result as $item)
        <div class="card w-25 p-5 m-5" >
            <img src="{{ asset("storage/$item->img") }}" />
            <p>{{ $item->nama }}</p>
            <p>Harga : Rp. {{ $item->harga }}</p>
            <p>Ongkos: Rp. {{ $item->ongkos_kirim }}</p>
            <p>Internal: {{ $item->internal }}</p>
            <p>Kamera: {{ $item->kamera }}</p>
            <p>Rangking : {{$loop->iteration }}</p>
        </div>
        @endforeach
    </div>
@endsection