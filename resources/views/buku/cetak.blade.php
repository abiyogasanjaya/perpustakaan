<html>

<head>
    <title>Laporan Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
    table tr td,
    table tr th {
        font-size: 9pt;
    }
    </style>
    <H3 align="center">SanberLib</H3>
    <!-- <h2 align="center">PERPUSTAKAAN</h2> -->
    <h6 align="center">http://lib.sanbercode.com</h6>
    <hr />
    <H4 align="center">Daftar Buku</H4>
    <h4> </h4>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 3%">#</th>
                <th style="width: 40%">Judul</th>
                <th style="width: 20%">Penerbit</th>
                <th style="width: 20%">Pengarang</th>
                <th style="width: 17%">Tahun</th>
            </tr>
        </thead>
        <tbody>
            @forelse($list as $key => $buku)
            <!-- dd('$data'); -->
            <tr>
                <td> {{ $key + 1}} </td>
                <td> {{ $buku->judul }} </td>
                <td> {{ $buku->pengarang}} </td>
                <td> {{ $buku->penerbit }} </td>
                <td> {{ $buku->tahun }} </td>

            </tr>
            @empty
            <tr>
                <td colspan=5> Tidak Ada Data </td>
            </tr>
            @endforelse

        </tbody>
    </table>

</body>

</html>