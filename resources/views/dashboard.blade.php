@extends('layout.master')


<!-- we are making sections according to the Dashboard division -->

<!-- First section for title -->
@section('title', 'QalamMovement Dashboard')

@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon traffic">
            <div class="body">
                <h6>Registered Students</h6>
                @php
                    $st = App\Models\student::all();
                    $statistic=count($st);
                @endphp
                
                <h2>{{ count($st) }} <small class="info">of 1Tb</small></h2>
                <small>Total Students</small>
                <div class="progress">
                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon sales">
            <div class="body">
                <h6>RegisteredVolunteers</h6>
                @php
                $user = App\Models\User::all();
            @endphp
            <h2>{{ count($user) }} </h2>
                <small>Total Volunteers</small>
                <div class="progress">
                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon email">
            <div class="body">
                <h6>Registered Institutions</h6>
                @php
                $school = App\Models\InstitutionModel::all();
            @endphp
            <h2>{{ count($school) }} <small class="info">of 1Tb</small></h2>
                <small>Total Institutions</small>
                <div class="progress">
                    <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon domains">
            <div class="body">
                <h6>Registered Teams</h6>
                <h2>5 <small class="info">of 10</small></h2>
                <small>Total Teams</small>
                <div class="progress">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

