@extends('pasien.layout')

@section('title')
pasien
@endsection

@section('nav')
<li><a href="#">HOME</a></li>
<li><a href="#">KERANJANG</a></li>
<li><a href="#">PROFIL</a></li>
<li><a href="#">SIGN IN</a></li>
<li><a href="#">LOG OUT</a></li>
@endsection

@section('content')
<a href="{{ url('pasien/create') }}" class="btn btn-success btn-sm">
    Tambah data pasien
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>tempat lahir</th>
            <th>umur</th>
            <th>pekerjaan</th>
            <th>alamat</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->jeniskelamin }}</td>
            <td>{{ $value->tempatlahir }}</td>
            <td>{{ $value->umur }}</td>
            <td>{{ $value->pekerjaan }}</td>
            <td>{{ $value->alamat }}</td>
            <td>
                <div class="row">
                    <a href="{{ url('pasien/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="{{url('pasien/'.$value->id)}}" method="POST">
                     {{csrf_field()}}
                     <input type="hidden" name="_method" value="DELETE"> 
                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus ?')"> hapus</button> 
                 </form>
             </div>
         </td>
     </tr>
     @endforeach
 </tbody>
</table>

@endsection