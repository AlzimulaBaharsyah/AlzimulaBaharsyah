@extends('layouts.main')

@section('container')
@php
use App\Models\Barang;
$barang=Barang::get();
@endphp

<main role="main">
    <section class="py-5 text-center container">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($barang as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ url('/larave/public/download/'.$item->foto) }}"
                                class="bd-placeholder-img card-img-top" width="100" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em"></text></img>
                            <div class="card-body">
                                <p class="card-text">{{ $item->nama }}</p>
                                <p class="card-text">{{ $item->harga }}</p>
                                <p class="card-text" id="card-description">{{ $item->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/form-pembayaran')}}" class="btn btn-primary">Buy</a>
                                    <small class="text-muted">{{ $item->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section>
</main>

@endsection
