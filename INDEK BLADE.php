<html>
<head>
	<title> Membuat CRUD Pada Laravel ->/title>
</head>
<body>
 
	<h3>NILAI KULIAH</h3>
 
	<a href="/NILAIKULIAH/tambah"> + Tambah data nilai</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NILAI ANGKA</th>
			<th>SKS</th>
			<th>nilaihuruf</th>
            <th>nilaiangka</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->mahasiswa_id }}</td>
			<td>{{ $p->mahasiswa_NRP }}</td>
			<td>{{ $p->mahasiswa_SKS }}</td>
			<td>{{ $p->mahasiswa_nilaihuruf}}</td>
			<td>{{ $p->mahasiswa_nilaiangka }}</td>
		
				<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
			</td>
            @foreach($mahasiswa as $p)
	</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>