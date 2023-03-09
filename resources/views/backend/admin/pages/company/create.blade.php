@extends('backend.admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="x_panel">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <span class="section">Distributor Info</span>
            <div class="">
                        @if(session()->has('message'))
                        <div class="btn btn-success waves-effect waves-light btn-sm" id="toastr-five">

                          {{ session()->get('message') }}

                          <span aria-hidden="true">&times;</span>
                      </div>
                      @endif
</div>
 <div class="">
          @if (count($errors) > 0)
          <div class = "alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
     @endif
</div>
            <div class="x_content">


                <form method="POST" action="{{ url('/store_company') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="title" required />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="description" type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Logo<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="logo" type="file" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">URL<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="link" type="text" />
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
