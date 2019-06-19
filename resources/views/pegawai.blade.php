<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>

 	<style type="text/css">
 		.pagination li{
 			float: left;
 			list-style-type: none;
 			margin:5px;
 		}
 	</style>
<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>

<!-- <ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul> -->

<table border="1">
  <tr>
        <th>Nama</th>
        <th>Alamat</th>
  </tr>
    @foreach($pegawai as $p)
    <tr>
      <td>{{$p->nama}}</td>
      <td>{{$p->alamat}}</td>
    </tr>
  @endforeach
</table>
<br/>
Halaman : {{ $pegawai->currentPage() }} <br/>
Jumlah Data : {{ $pegawai->total() }} <br/>
Data Per Halaman : {{ $pegawai->perPage() }} <br/>


{{ $pegawai->links() }}
</body>
</html>
