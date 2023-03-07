@extends('backend.admin.layout.master')
@section('content')

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
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Code</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Mobile</th>
                          <th>District</th>
                          <th>Upozila</th>
                          <th>Action</th>
                       </tr>
                      </thead>
                      <tbody>

                      @foreach($distributors as $distributor)
                        <tr>
                        <td>{{$distributor->id}}</td>
                        <td>{{$distributor->code}}</td>
                        <td>{{$distributor->name}}</td>
                        <td>{{$distributor->type}}</td>
                        <td>{{$distributor->mobile}}</td>
                        <td>{{$distributor->district}}</td>
                        <td>{{$distributor->upozila}}</td>
                        <td><a href="{{url('edit_distributor/'.$distributor->id)}}" class="btn btn-success">Edit ||<a href="{{url('delete_distributor/'.$distributor->id)}}" class="btn btn-danger">Delete</td>
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