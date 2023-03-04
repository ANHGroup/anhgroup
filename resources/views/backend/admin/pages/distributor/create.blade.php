@extends('backend.admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
         <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="x_content">

                    <span class="section">Distributor Info</span>
                    <form method="POST" action="{{ url('/store_distributor') }}" >
                @csrf
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="name" required />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Code<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="code" type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Type<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="type" type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Mobile<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="mobile" type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">District<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="district" type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Upozila<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="upozila" type="text" />
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
