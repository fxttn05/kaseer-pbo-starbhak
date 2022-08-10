@extends('template.template')

@section('container')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Tambah Menu</h1>
            <form method="POST" action="{{route('insertmenu')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama item</label>
                    <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Tambahkan nama menu.."
                        aria-describedby="emailHelp">
                </div>
                
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pilih category menu</label>
                    <select class="form-select" name="category">
                        <option selected>Select Category</option>
                        <option value="1">Makanan</option>
                        <option value="2">Minuman</option>
                        <option value="3">Paketan</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Rp.."
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">qty</label>
                    <input type="number" name="qty" class="form-control" id="exampleInputEmail1" placeholder="Tambahkan qty"
                        aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto item</label>
                    <input type="file" name="picture" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection