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
                          <th>Title</th>
                          <th>Description</th>
                          <th>Logo</th>
                          <th>URL</th>

                       </tr>
                      </thead>
                      <tbody>

                      @foreach($companies as $company)
                        <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->title}}</td>
                        <td>{{$company->description}}</td>
                        <td><img src="{{ asset('logo/' . $company->logo) }}" class="image" alt="image"
                                                style="width:70px;">Open</a></td>
                        <td>{{$company->link}}</td>


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
