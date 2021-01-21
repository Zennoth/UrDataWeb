@extends('Admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <div class="row no-gutters">
                <div class="col md-10">
                    <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">List Prestasi ( ADMIN )</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Lecturer Name</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            <th>Location</th>
                            <th>Detaiil</th>
                        </tr>
                        </thead>
                        
            </div>
        </div>
@endsection
