<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data pendaftaran</h3>
 
	<a href="form-pendaftaran/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table>
		<tr>
			<th>Nama</th>
		</tr>
		@foreach($pendaftaran as $p)
		<tr>
			<td>{{ $p->nama_siswa }}</td>
			<td>
				<a href="form-pendaftaran/edit/{{ $p->id_pendaftaran }}">Edit</a>
				|
				<a href="form-pendaftaran/hapus/{{ $p->id_pendaftaran }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>