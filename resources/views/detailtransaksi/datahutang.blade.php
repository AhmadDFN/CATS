@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')

    <div class="bg-info rounded">
        @if (session('text'))
            <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                {{ session('text') }}
            </div>
        @endif
    </div>
    {{--  @dd($title)  --}}
    <div class="col-12">
        <div class="rounded p-4 bg-info bg-opacity-10" style="min-height: 65vh;">
            <div class="table-responsive">
                <table id="dtCustomer" class="table table-striped table-hover table-light">
                    <thead>
                        <tr>
                            <th>Pelanggan</th>
                            <th>Nota</th>
                            <th>Tanggal</th>
                            <th>Ppn 11%</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hutangs as $item)
                            <tr>
                                <td>{{ $item->pelanggan_nama }}</td>
                                <td>{{ $item->trans_nota }}</td>
                                <td>{{ $item->trans_tanggal }}</td>
                                <td style="text-align: right;">{{ number_format($item->trans_ppn, 0, ',', '.') }}</td>
                                <td style="text-align: right;color:red;font-weight: bold;">
                                    {{ number_format($item->trans_gtotal, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
