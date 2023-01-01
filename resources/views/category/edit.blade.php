@extends("layouts.app")
@section("content")

    <div class="container text-center">

            <div class="col col-lg-6 mt-5 m-auto" >
                <form method="post" enctype="multipart/form-data" action="{{ route('categories.update',$category->id)}}" >
                    @csrf
                    @method('PUT')
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{$category->name}}">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address" value="{{$category->address}}">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" name="phone" value="{{$category->phone}}">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{$category->email}}">
                </div>
                <div class="input-group mb-4">
                        <img src="{{asset('uploads/user_images/'.$category->image) }}" width="75px" height="75px">
                </div>
                <input type="submit" class="btn btn-success" value="Update">
                </form>
            </div>
    </div>
@endsection
