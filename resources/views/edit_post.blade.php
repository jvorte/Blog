@include('layouts.layout')



    <div class="container">


    <div class="row mt-5">

        <div class="col">
            <img class="img1" src="/images/photo_4.jpg" alt="" title="">
        </div>


        <div class="col">
            <h1>EDit your new Post</h1>
            <h6 class="pt-3">*Lorem ipsum dolor Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat,
                atqu
                e? sit, amet consectetur adipisicing elit. Commodi, autem?</h6>
       <form action=""  method="post">
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="{{$post -> user}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"   placeholder="{{$post -> email}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="title" placeholder="" value="{{$post -> ttle}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post</label>
                <textarea class="form-control" name="post"  value="{{$post -> post}}" id="exampleFormControlInput1"  rows="3"></textarea>
            </div>
            <button type="" class="btn btn-primary">Send</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </form>
        </div>

    </div>
</div>



