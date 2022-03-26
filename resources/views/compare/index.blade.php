@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <p class="px-5 mx-5">Daftar HP yang akan di compare</p>

            <div class="card-body py-4 d-flex flex-nowrap">

                @foreach ($alternatif_selected as $item)

                <div class="card w-25 p-5 mx-5" >
                    <img src="{{ asset("storage/$item->img") }}" />
                    <p>{{ $item->nama }}</p>
                    <p>Harga : Rp. {{ $item->harga }}</p>
                    <p>Ongkos: Rp. {{ $item->ongkos_kirim }}</p>
                    <p>Internal: {{ $item->internal }}</p>
                    <p>Kamera: {{ $item->kamera }}</p>
                    <form action="{{ "/compare/$item->id" }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-warning">batal</button>
                    </form>
                    
                </div>

                @endforeach
            </div>

            @if (count($alternatif_selected) > 1 )

            <form action="{{ "/calculasi" }}" method="POST">
                @csrf
                {{-- @method("DELETE") --}}
                <button type="submit" class="btn btn-primary ms-10">Calculasi</button>
            </form>
                
            @endif
            

            <!--begin::Card-->
            <div class="">

                <p class="p-5 mx-5">Daftar HP</p>

                <form class="d-flex ms-10" method="GET" action="{{ url("/compare") }}">
                    <input class="form-control w-25 me-5" name="nama" value="{{request()->get('nama') ? request()->get('nama') : ""}}" />
                    <button class="btn btn-secondary">Cari</button>
                </form>

                <div class="card-body py-4 d-flex flex-nowrap">

                    @foreach ($alternatif_not_selected as $item)

                    <div class="card w-25 p-5 mx-5" >
                        <img src="{{ asset("storage/$item->img") }}" />
                        <p>{{ $item->nama }}</p>
                        <p>Harga : Rp. {{ $item->harga }}</p>
                        <p>Ongkos: Rp. {{ $item->ongkos_kirim }}</p>
                        <p>Internal: {{ $item->internal }}</p>
                        <p>Kamera: {{ $item->kamera }}</p>
                        <form action="{{ "/compare/$item->id" }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Pilih</button>
                        </form>
                        
                    </div>

                    @endforeach
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
