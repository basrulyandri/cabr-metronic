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
                    <button type="submit" class="btn blue">Simpan</button>                    
                </div>
            </form>
        </div>
    </div>
@stop

@section('footer')
    <script src="{{asset('assets/metronic')}}/global/plugins/moment.min.js" type="text/javascript"></script>   
    
@stop