@extends('layouts.backend.master')
@section('header')
    <link href="{{url('assets/backend')}}/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{url('assets/backend')}}/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="{{url('assets/backend')}}/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
@endsection
@section('title')
  Permissions
@stop

@section('content')
  	  <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                   
                    <div class="actions">
                        <div class="btn-group btn-group-devided">
                            <a href="{{route('permission.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add Permission</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">                    
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th> Label </th>
                                    <th> Name </th>                                   
                                    <th> ACTIONS </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>                                   
                                    <td>
                                        <a href="{{route('permission.edit',$permission)}}" class="primary-link">{{$permission->label}}</a>
                                    </td>
                                    <td> {{$permission->name_permission}} </td>                                    
                                    <td>                                                                                
                                        <a  class="btn btn-danger btn-xs hapus" id="{{$permission->id}}" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{$permissions->links()}}            
        </div>
    </div>
@stop

@section('footer')
   
<script src="{{url('assets/backend')}}/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<script>
        $(document).ready(function() {
            $('#datatables').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "{{url('assets/backend')}}/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });
            $('body').on('click','.btn-danger',function(){
                //alert('test');
                var id = $(this).attr('id');
                swal({
                  title:'SURE ?',
                   text: "Want to delete this permission ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Yes, delete it!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    window.location = "permission/"+id+"/delete";
                  }
                });
              });   
        });        
    </script>
@endsection
