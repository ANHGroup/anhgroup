@extends('backend.website.layout.master')
@section('content')

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">

            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>


            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div class="container">
                                <h2>Small Modal</h2>
                                <!-- Button to Open the Modal -->


                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">

                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <div class="x_content">

                                                    <span class="section">Applicant Info</span>
                                                    <form method="POST" action="{{ url('store_applicant') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Job Title<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" type="text" name="title"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Candidate Name<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" type="text" name="name"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Phone<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="phone" type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Present Address<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="present_address" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Permanent Address<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="permanent_address" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Expected Salary<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="expected_salary" type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Job Experience<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="experience" type="number" />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">CV/Resume<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="cv" type="file" required />
                                                            </div>
                                                        </div>
                                                        <div class="field item form-group">
                                                            <label
                                                                class="col-form-label col-md-3 col-sm-3  label-align">Phone<span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input class="form-control" class='optional'
                                                                    name="phone" type="number" />
                                                            </div>
                                                        </div>

                                                        <div class="ln_solid">
                                                            <div class="form-group">
                                                                <div class="col-md-6 offset-md-3">
                                                                    <button type="submit" id=""
                                                                        class="btn btn-primary">Submit</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->


                                        </div>
                                    </div>
                                </div>

                            </div>

                            </body>

                            </html>
                            <table id="datatable-responsive"
                                class="table table-success table-striped -bordered dt-responsive nowrap" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Job Title</th>
                                        <th>Last Date</th>
                                        <th>Details</th>
                                        <th>Apply</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($careers as $career)
                                    <tr>
                                        <td>{{$career->id}}</td>
                                        <td>{{$career->title}}</td>
                                        <td>{{$career->last_date}}</td>
                                        <td><a href="{{ asset('file/' . $career->job_details) }}" class="fa fa-eye"
                                                style="width:70px;">Open</a></td>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#myModal">
                                                Apply Job
                                            </button>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
