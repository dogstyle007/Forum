
  @extends('layouts.masters.main')

  @section('title') @stop

  @section('page-content')


   {{--welcome section--}}
     {{-- <div class="container" style="margin-top:5%;">
        <div class="row">
        <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
            <h2 class="text-center"><span style="color:#26A65B;">Welcome to Wisconsin International University College Forum </span>
            <center><div style="margin-top:10px;">
                <img src="
/image/WIUC-LOGO.png">
            </div></center>
        </div>
  </div>
</div>--}}

@include('layouts.partials.slider')


<div>
  
            <center><div class="btn-group" style="margin-top:50px;">
                <a href="
/

" class="btn btn-lg btn-primary">Recent Posts</a>
                
            </div></center>

</div>

<br>

    <div class="container">


    {{--@include('layouts.partials.nav')--}}

      @forelse($posts as $post)
      
        <div class="well">
          <div class="media">
            <div class="media-body">
              <h4 class="media-heading"><a href="
/

question/{{$post->slug}}">{{ $post->title}}</a></h4>
              <br>
             
             <u>
             <p class="text-right"> By: {{$post->user->name }} <img src="/uploads/avatars/{{ $post->user->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%"> <br> {{$post->user->dept }} </p>
             </u>

            

              {!! Markdown::parse (str_limit ($post->body, 200)) !!}

              

              <a href="
/

question/{{$post->slug}}">Read more &rarr;</a>

              <ul class="list-inline list-unstyled">
                <li><span> <i class="glyphicon glyphicon-calendar">
                <p>Published</p></i> {{ $post->created_at->diffForHumans()}} </i></span></li>
                <li>|</li>

                @if( $post->replies->count() > 0 )

                  <li> {{ $post->replies->count() }} comment(s) </li>

                  @else

                  <li>Be the first to comment :)</li>

               @endif

                <li>|</li>

                @if( $currentUser && $currentUser->id == $post->user_id )
                <li><span> <i class="glyphicon glyphicon-pencil">
                </i> <a href="{{ URL::route('get_edit_post', ['id' => $post->id])}}">Edit</a></i></span></li>

                @endif

              </ul>
            </div>

          @if( $currentUser && $currentUser->id == $post->user_id )

            {!! Form::open(['route' => 'delete_question', 'id' => 'delete-question-form', 'method' => 'DELETE', 'class' => 'text-right']) !!}
  
              {!! Form::hidden('post_id', $post->id) !!}
  
              {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}

            {!! Form::close() !!}

          @endif

      
          </div>
        </div>
      @empty
        <p>No posts found</p>
      @endforelse

      <center>{!! $posts->appends(Request::all())->render() !!}</center>


    </div> <!-- /container -->

     @include('layouts.partials.footer')

    @stop