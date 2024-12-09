@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')
    @if (session('mess'))
        <div class="col-sm-4">
            <div class="d-flex align-items-center justify-content-between p-4">
                !!!Notif
                <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                    {{ session('mess') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h3>Orders Detail</h3>
                <a href="{{ url('/detailtransaksi') }}" class="btn btn-primary">View
                    Details</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h3>Down Payments Detail</h3>
                <a href="{{ url('/detailhutang') }}" class="btn btn-primary">View
                    Details</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h3>Repayment Details</h3>
                <a href="{{ url('/pembayaran') }}" class="btn btn-primary">View
                    Details</a>
            </div>
        </div>
    </div>

@endsection
