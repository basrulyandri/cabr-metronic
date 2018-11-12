@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Messages
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                
                <div class="portlet-body">   
                  <div class="row">                    
                    <div class="mt-comments">
                        @foreach($receivedMessages as $inbox)
                        
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="{{$inbox->userSender->getAvatarUrl()}}" style="width: 45px;"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">{{$inbox->userSender->getNameOrEmail(true)}}</span>
                                    <span class="mt-comment-date">{{$inbox->created_at->diffForHumans()}}</span>
                                </div>
                                <div class="mt-comment-text"> {{$inbox->body}}</div>
                                <div class="mt-comment-details">                                    
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                  </div>                    
                </div>
            </div>
        </div>
    </div>
    
   
@stop

@section('footer')
<script>
   
</script>
@endsection
