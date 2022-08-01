@extends('template.template')

@section('container')
<div class="container">

    <div class="row">
        <div class="col-8">
            <h3> Makanan </h3>
            <div class="d-flex justify-content-start flex-row mb-3">
                @foreach ($data as $item)


                @if ($item->category == 'makanan')
                <div class="card" style="width: 12rem;">
                    <img src="{{ asset('picture/'.$item->picture) }}" alt="" style="width: 12rem">
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
                        </div>
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
                @foreach ($data as $item2)


                @if ($item2->category == 'minuman')
                <div class="card" style="width: 12rem;">
                    <img src="{{ asset('picture/'.$item2->picture) }}" alt="" style="width: 12rem">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item2->item }}</h5>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <h6>Harga</h6>
                        </div>
                        <div>
                            <p>{{ $item2->price }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <h6>Stock</h6>
                        </div>
                        <div>
                            <p>{{ $item2->qty }}</p>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach
            </div>

            <h3> Paketan </h3>
            <div class="d-flex justify-content-start flex-row mb-3">
                @foreach ($data as $item3)

                @if ($item3->category == 'paketan')
                <div class="card" style="width: 12rem;">
                    <img src="{{ asset('picture/'.$item3->picture) }}" alt="" style="width: 12rem">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item3->item }}</h5>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <h6>Harga</h6>
                        </div>
                        <div>
                            <p>{{ $item3->price }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <h6>Stock</h6>
                        </div>
                        <div>
                            <p>{{ $item3->qty }}</p>
                        </div>
                    </div>

                </div>
                @endif

                @endforeach
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                   <h3>Transaksi</h3>
                    <form method="POST" action="{{route('inserttransaksi')}}" enctype="multipart/form-data">
                        @csrf
    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama menu</label>
                            <select class="form-select" name="menu_id">
                                <option selected>Select item</option>
                                @foreach($data as $item4)
                                <option value="{{$item4->id}}">{{$item4->item}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">qty</label>
                            <input type="number" name="qty" class="form-control" id="exampleInputEmail1" placeholder="Tambahkan qty"
                            aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama user</label>
                            {{-- @foreach($data as $item5) --}}
                                <input class="form-control" name="user_id" type="text" placeholder="Fattan" aria-label="Disabled input example" disabled>
                            {{-- @endforeach --}}
                            
                        </div>
                        
    
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form> 
                </div>
                
            </div>
        </div>

    </div>







</div>
@endsection
