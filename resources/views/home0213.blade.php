@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Pelanggan</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>


	<form action="/pelanggan0213/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>


    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Nama Pelanggan </th> 
                      <th>Alamat</th>
                      
                      <th>Nama Barang</th>
                      <th>Harga</th>
                      <th>Akses</th>

                     
                     
                  </tr>
              </thead>
              <tbody style="color:white;">
                
                  @foreach ($home as $Home)
                  <tr>
                      
                      <td>{{ $Home->Nama_pelanggan }}</td>
                      
                      <td>{{ $Home->Alamat}}</td>
                      <td>{{ $Home->Nama_barang }}</td>
                      <td>{{ $Home->Harga }}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                    
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
@endsection