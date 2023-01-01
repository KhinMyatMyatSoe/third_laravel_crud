@extends("layouts.app")
@section("content")

    <div class="container text-center">

            <div class="col col-lg-8 mt-5 m-auto" >


                <div class="card" style="width: 30rem;">
                    <ul class="list-group list-group-flush">
                        {{-- <li class="list-group-item">{{$category->id}}</li> --}}
                        <li class="list-group-item">{{$category->name}}</li>
                        <li class="list-group-item">{{$category->address}}</li>
                        <li class="list-group-item">{{$category->phone}}</li>
                        <li class="list-group-item">{{$category->email}}</li>
                        <li class="list-group-item">
                            <img src="{{asset('uploads/user_images/'.$category->image) }}" width="75px" height="75px">
                        </li>
                    </ul>
                    <a href="{{route('categories.index')}}" class="btn btn-success my-3">Back</a>
            </div>
            </div>
    </div>
@endsection
