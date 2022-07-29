@extends('template.template')

@section('container')
<div class="container">
    <div class="judul">
        <h1 class="text-center">Menu</h1>
        <a type="button" href="/tambahmenu" class="btn btn-success mt-5 mb-4 ">Tambah +</a>
    </div>

    
    <div class="d-flex justify-content-around">
        @foreach ($data as $item)
        <div class="card" style="width: 18rem;">
            <img src="../public/ayamgeprek.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item->item }}</h5>
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <h6>Harga</h6>
                </div>
                <div>
                    <p>{{ $item->price }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <h6>Stock</h6>
                </div >
                <div>
                    <p>{{ $item->qty }}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>

    

</div>
@endsection