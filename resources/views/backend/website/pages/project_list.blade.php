@include('backend.layout.header')
@include('backend.layout.js')
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Title</th>
                          <th>Factory Name</th>
                          <th>Product</th>
                          <th>Manufacturer</th>
                          <th>Model</th>
                          <th>Quantity</th>
                          <th>Origin</th>
                          <th>Project Status</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($projects as $project)  
                        <tr>
                        <td>{{$project->id}}</td>  
                        <td>{{$project->title}}</td>  
                        <td>{{$project->factory_name}}</td>  
                        <td>{{$project->product}}</td>  
                        <td>{{$project->manufacturer}}</td>  
                        <td>{{$project->model}}</td>  
                        <td>{{$project->quantity}}</td>  
                        <td>{{$project->origin}}</td>  
                        <td>{{$project->status}}</td>  
                        <td><iframe width="100px" height="55px" src="http://www.youtube.com/embed/SQEbPn36m1c" frameborder="0" allowfullscreen class="youtubeiframe"></iframe></td>  
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
     <script type="text/javascript">
  $(document).ready(function () {
    var youtubeid = $(".youtubeimg").attr("src").match(/[\w\-]{11,}/)[0];
       alert(youtubeid);
     });
  });
</script>
