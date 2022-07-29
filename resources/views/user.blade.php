@extends('template.template')

@section('container')
    <div class="row justify-content-center">
    <div class="card col-11 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data karyawan</h2>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama karyawan</th>
                <th scope="col">email</th>
                <th scope="col">jabatan</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($data as $index => $row)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->role}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          
      </div>
    </div>
</div>
@endsection