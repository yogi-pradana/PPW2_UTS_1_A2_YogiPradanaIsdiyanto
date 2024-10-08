<body>
    <a href="{{route('/pemain')}}" class="btn btn-primary float-end">Tambah buku</a>
    <table class="table table-striped" border="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach($data_buku as $index => $pemain) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>