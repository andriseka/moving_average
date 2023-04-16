@extends('layouts.general')


@section('content')

<div class="col-md-12 mb-3">
    <h1>Moving Average</h1>
</div>

<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-header">
            <h3>Data Saham</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-3">
                    <thead>
                        <th>No</th>
                        <th>Date</th>
                        <th>High</th>
                    </thead>
                    <tbody>
                        @foreach ($stocks as $stock => $result)
                            <tr>
                                <td>{{$stock + $stocks->firstitem()}}</td>
                                <td>
                                    {{$result->date}}
                                </td>
                                <td>{{$result->high}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$stocks->links()}}
                </div>
            </div>

        </div>
    </div>
</div>

<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-header">
            <h3>Prediksi</h3>
        </div>
        <div class="card-body">
            <div class="text-end mb-3">
                <button class="btn btn-success">Prediksi</button>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                                            <path d="M9 17v-5"></path>
                                            <path d="M12 17v-1"></path>
                                            <path d="M15 17v-3"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="fw-bold">
                                        Hasil Prediksi
                                    </div>
                                    <div class="text-muted">
                                        2400
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-warning text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-sentry" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 18a1.93 1.93 0 0 0 .306 1.076a2 2 0 0 0 1.584 .924c.646 .033 -.537 0 .11 0h3a4.992 4.992 0 0 0 -3.66 -4.81c.558 -.973 1.24 -2.149 2.04 -3.531a9 9 0 0 1 5.62 8.341h4c.663 0 2.337 0 3 0a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-1.84 3.176c4.482 2.05 7.6 6.571 7.6 11.824"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="fw-bold">
                                        MAPE
                                    </div>
                                    <div class="text-muted">
                                        10.45
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" disabled style="height: 160px;" placeholder="Kesimpulan"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
