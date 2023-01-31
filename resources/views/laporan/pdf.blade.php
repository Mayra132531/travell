
<h3>Laporan Transaksi Stationery</h3>


<table border="2">
    <thead>
        <tr>
            <tr >
                <th>Id</th>
                <th>Name</th>
                <th>Pesawat</th>
                <th>Harga</th>
                <th>Pembayaran</th>
                <th>Status Pembayaran</th>
            </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
        @php $i=1 @endphp
        @foreach($transaksi as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->pemesanan->name }}</td>
            <td>{{ $row->detail_pemesanan->pesawat }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->pembayaran }}</td>
            <td>{{ $row->status }}</td>
        </tr>
        </tr>
        @endforeach
    </tbody>
</table>
