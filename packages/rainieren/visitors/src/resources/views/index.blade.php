@extends('layouts.layouts.backend')

@section('content')
    <div class="container-fluid pt-5 ">
        <div class="row">
            <div class="col-md-6">
                <h3>{{ __('Visitors') }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card p-4 card-purple fadeInUp h-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('Total visitors') }}</h5>
                                <h2>5.839</h2>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 card-purple fadeInUp h-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('This month visitors') }}</h5>
                                <h2>5.839</h2>
                            </div>
                            <div class="card-footer">
                                14,3% less than last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 card-purple fadeInUp h-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('Total signups') }}</h5>
                                <h2>4.392</h2>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 card-purple fadeInUp h-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('This months signups') }}</h5>
                                <h2>4.392</h2>
                            </div>
                            <div class="card-footer">
                                28,7% less than last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 card-grey fadeInUp h-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('Visitors and signups') }}</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
