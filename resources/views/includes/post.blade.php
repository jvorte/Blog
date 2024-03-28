

<div class="card text-center ">
  <div class="card-header bg-primary text-light ">
  Writed from : {{$post -> user}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$post -> title}}</h5>
    <p class="card-text">{{$post -> post}}</p>
<p class="card-text"> <a href="{{route('view_post',$post)}}">View Post</a></p>
  </div>
  <div class="card-footer bg-light ">
  {{$post -> created_at}}
  </div>
</div>

