@extends('layouts.backend.master')

@section('header')    
    <link href="{{asset('assets/metronic')}}/global/plugins/loader/css/style.css" rel="stylesheet" type="text/css">
@stop

@section('content')

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="icon-settings font-red-sunglo"></i>
                <span class="caption-subject bold uppercase"> {{ucfirst($category)}} Setting</span>
            </div> 
            <div class="actions">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                    Add Setting
                  </button>
            </div>           
        </div>
        <div class="portlet-body form">
            {!!Form::open(['route' =>'settings.update', 'class' => 'form-horizontal'])!!}
                <div class="form-body">
                    @foreach($settings as $setting)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{$setting->setting_label}}</label>
                                <input name="{{$setting->setting_key}}" type="text" class="form-control" value="{{$setting->setting_value}}"> 
                            </div>
                        </div>
                    </div>
                    @endforeach                    
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue">Update</button>                    
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Setting</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="portlet light">
                    <div class="portlet-body form">
                        {!!Form::open(['route' =>'settings.create', 'class' => 'form-horizontal'])!!}
                        <div class="form-group">
                            <label>Key *</label>
                            <input name="setting_key" type="text" class="form-control">
                            <span class="help-block">Setting unique identifier. Space not allowed. Use underscore to make it readable</span>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <input name="setting_category" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Form Type</label>
                            {!!Form::select('setting_form_type',['text','number','textarea','select'],'text',['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            <label>Label *</label>
                            <input name="setting_label" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="setting_description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Value *</label>
                            <input name="setting_value" type="text" class="form-control">
                            <span class="help-block">Default value first time generate. It can be updated later.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
@stop

@section('footer')
    <script src="{{asset('assets/metronic')}}/global/plugins/moment.min.js" type="text/javascript"></script>   
    
@stop