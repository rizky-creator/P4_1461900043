<!DOCTYPE html>
<html>
<head>
<title>1461900043</title>
</head>
<body>
    <h2>HOME</h2>
    <h2>M Rizky Sulistyawan</h2>
    <a href="/export"> Export Excel </a>
    <h3>Buku</h3>
    <p>Cari Buku :</p>
        <form action="/buku/cari" method="GET">
        <input type="text" name="lihat" placeholder="Masukan disini .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
    <table border="1">
<tr>
<th bgcolor="Turquoise">Id Buku</th>
<th bgcolor="yellow">Judul Buku</th>
<th bgcolor="yellow">Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>
</html>