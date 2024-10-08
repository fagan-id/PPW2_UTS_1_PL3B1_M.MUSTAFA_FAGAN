@extends('layout/main')

@section('container')
    <div class="pb-2">
        <h1>Ini Adalah Sekumpulan Pemain</h1>
    </div>
    <table class="table table-light table-striped">
        <tr>
            <td>#</td>
            <td>Nama Pemain</td>
            <td>No Punggung</td>
            <td>Posisi</td>
        </tr>
        @foreach ($pemain as $index => $pe)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $pe->nama_pemain }}</td>
                <td>{{ $pe->no_punggung }}</td>
                <td>{{ $pe->posisi }}</td>
            </tr>
        @endforeach

    </table>
@endsection
