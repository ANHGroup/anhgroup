@extends('backend.website.layout.master')
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
                     <table id="datatable-responsive" class="table table-success table-striped -bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Job Title</th>
                          <th>Last Date</th>
                          <th>Apply</th>
                          
                       </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($careers as $career)  
                        <tr>
                        <td>{{$career->id}}</td>  
                        <td>{{$career->title}}</td>  
                        <td>{{$career->last_date}}</td>  
                        <td class="btn btn-success"><a href="" >Apply</td>  
                         
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
          