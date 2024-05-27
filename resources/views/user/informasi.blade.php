@extends('layouts.app')

@section('content')
@include('includes.landingpage')
<div class="container">
    <div class="layout-home">
        <div class="informasi-container">
            <h1>Informasi Ketersediaan Barang</h1>

            <form method="POST" action="{{ route('informasi.check') }}">
                @csrf
                <label for="pinjam_date">Tanggal Peminjaman:</label>
                <input type="date" id="pinjam_date" name="pinjam_date" required>

                <label for="pengembalian_date">Tanggal Pengembalian:</label>
                <input type="date" id="pengembalian_date" name="pengembalian_date" required>

                <button type="submit">Check Availability</button>
            </form>

            @if(isset($results))
                @if(count($results) > 0)
                    <h2>Hasil Ketersediaan:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah Tersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{ $result->nama_barang }}</td>
                                    <td>{{ $result->jumlah_tersedia }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada data tersedia untuk tanggal yang dipilih.</p>
                @endif
            @endif
        </div>
    </div>
</div>

@endsection
