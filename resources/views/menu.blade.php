@extends('template.template')

@section('container')
<div class="container">
    <div class="judul">
        <a type="button" href="/tambahmenu" class="btn btn-success mt-5 mb-4 ">Tambah +</a>
    </div>

    <h3> Makanan </h3>
    <div class="d-flex justify-content-start flex-row mb-3">
        @foreach ($data as $item)

        
        @if ($item->category == 'makanan')
        <div class="card me-3" style="width: 12rem;">
            <img src="{{ asset('picture/'.$item->picture) }}" alt="" style="width: 12rem; height: 14rem">
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
        @endif
        @endforeach
    </div>

    <h3> Minuman </h3>
    <div class="d-flex justify-content-start flex-row mb-3">
        @foreach ($data as $item)

        
        @if ($item->category == 'minuman')
        <div class="card me-3" style="width: 12rem;">
            <img src="{{ asset('picture/'.$item->picture) }}" alt="" style="width: 12rem; height: 14rem">
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
        @endif
        @endforeach 
    </div>

    <h3> Paketan </h3>
    <div class="d-flex justify-content-start flex-row mb-3">
        @foreach ($data as $item)
        
        @if ($item->category == 'paket')
        <div class="card me-3" style="width: 12rem;">
            <img src="{{ asset('picture/'.$item->picture) }}" alt="" style="width: 12rem; height: 14rem">
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
        @endif
        
        @endforeach 
    </div>

        

    

</div>
@endsection