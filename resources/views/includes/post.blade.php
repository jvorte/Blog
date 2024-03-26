

<div class="card float-start mx-2 my-2" style="width: 18rem;">
    <h5 class="card-header">{{$post -> user}}</h5>
    <div class="card-body">
    <h5 class="card-title">{{$post -> email}}</h5>

    <p class="card-text"> <a href="{{route('view_post',$post)}}">{{$post-> title}}</a></p>

    <p class="card-text">{{$post -> post}}</p>

    <a href="#" class="btn btn-primary">btn</a>
    </div>
   
</div> 

