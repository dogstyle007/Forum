
  @extends('layouts.masters.main')

  @section('title'){{ $post->title}} @stop

  @section('page-content')


  <div>
  
            <center><div class="btn-group" style="margin-top:50px;">
                <a href="http://localhost/forum/public/" class="btn btn-lg btn-primary">Recent Posts</a>
                
            </div></center>

</div>

    <div class="container">

   {{--@include('layouts.partials.nav')--}}

        <div class="well">
          <div class="media">
            <div class="media-body">
             <h4> <a href="http://localhost/forum/public/question/{{$post->slug}}">{{$post->title}}</a></h4>

              <p class="text-right"> By: {{$post->user->name}} <img src="/forum/public/uploads/avatars/{{ $post->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%"></p>

              {!! Markdown::parse ($post->body) !!}
              
              <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"></i><h4>Published</h4>{{ $post->created_at->diffForHumans()}}</span></li>
              </ul>
            </div>
          </div>
        </div>

    @forelse($post->replies as $reply)

          <div class="well">
             <div class="media">
                <div class="media-body">

                  <p class="text-right">By: {{$reply->user->name}} <img src="/forum/public/uploads/avatars/{{ $reply->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%"></p>

                    <p>{{$reply->body}}</p>

                   <ul class="list-inline list-unstyled">
                     <li><span><i class="glyphicon glyphicon-calendar"></i>{{ $reply->created_at->diffForHumans()}}</span></li>
                  </ul>
                </div>
             </div>

          @if( $currentUser && $currentUser->id == $reply->user_id )

            {!! Form::open(['route' => 'delete_reply', 'id' => 'delete-reply-form', 'method' => 'DELETE', 'class' => 'text-right']) !!}
  
              {!! Form::hidden('reply_id', $reply->id) !!}
  
              {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}

            {!! Form::close() !!}

          @endif


          </div>
                 
            @empty

             @if( ! $currentUser )
            
             <p> (You must <a href="{{ route('get_login')}}"> <b>LOGIN!</b></a> or <a href="{{ route('get_register')}}">Register</a> to reply here.)</p>

            @else

              <p>Be the first to reply</p>            

            @endif


            @endforelse

    @if( $currentUser )

     {!! Form::open(['route' => 'save_reply', 'id' => 'reply-question-form']) !!}
  
        {!! Form::hidden('slug', $post->slug) !!}



        {!!  Form::textarea( 'body', null, ['id' => 'summernote', 'class' => 'required']) !!}

        <!--<textarea name="body" id="editor1" rows="10" cols="80">
            </textarea>-->


        <br/>
        {!! Form::button('Reply', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

      {!! Form::close() !!}
     
    @endif


<br>


 @include('layouts.partials.footer')


  </div>

  

@stop