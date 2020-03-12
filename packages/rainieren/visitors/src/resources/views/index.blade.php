@extends('layouts.layouts.backend')

@section('content')
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>{{ __('Visitors') }}</h3>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-7 mb-3">
                <div class="card card-grey fadeInUp h-100">
                    <div class="card-body">
                        <h5>{{ __('Visitors and Signups chart') }}</h5>
                        <canvas id="visitorsAndSignups" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card card-purple fadeInUp h-100">
                            <div class="card-body">
                                <h5 class="text-white">{{ __('Total visitors') }}</h5>
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card card-purple fadeInUp h-100">
                            <div class="card-body">
                                <h5 class="text-white">{{ __('Visitors this month') }}</h5>
                                <h2 class="text-white">0<i class="far fa-arrow-alt-up"></i></h2>
                            </div>
                            <div class="card-footer">
                                <small class="m-0 text-white">Last month 0 <i class="far fa-arrow-alt-up"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card card-purple fadeInUp h-100">
                            <div class="card-body">
                                <h5 class="text-white">{{ __('Total Signups') }}</h5>
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card card-purple fadeInUp h-100">
                            <div class="card-body">
                                <h5 class="text-white">{{ __('Signups this month') }}</h5>
                                <h2 class="text-white">23 284 <i class="far fa-arrow-alt-up"></i></h2>
                            </div>
                            <div class="card-footer">
                                <small class="m-0 text-white">Last month 0<i class="far fa-arrow-alt-up"></i></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-7">
                <div class="card card-grey fadeInUp">
                    <div class="card-body">
                        <h5>{{ __('History') }}</h5>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">IP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>196.192.55.33</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
