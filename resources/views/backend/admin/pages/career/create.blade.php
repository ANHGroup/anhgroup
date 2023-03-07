@extends('backend.admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
        <div class="col-lg-8">
            @if(session()->has('message'))
            <div class="btn btn-success waves-effect waves-light btn-sm" id="toastr-five">

              {{ session()->get('message') }}

              <span aria-hidden="true">&times;</span>
          </div>
          @endif
      </div>
      <div class="col-lg-8">
          @if (count($errors) > 0)
          <div class = "alert alert-danger">
          @if ($message = Session::get('error'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif
       </div>
       @endif
   </div>
        </div>
         <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="x_content">

                    <span class="section">Career Info</span>
                    <form method="POST" action="{{ url('store_career') }}"  enctype="multipart/form-data">
                      @csrf
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Job Title<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="title" required />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Expired Date<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="last_date" type="date" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Job Details<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="job_details" type="file" />
                        </div>
                    </div>

                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" id="" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
