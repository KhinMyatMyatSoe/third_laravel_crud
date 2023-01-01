@extends("layouts.app")
@section("content")

    <div class="container text-center">
        <div class="row">
            <div class="col col-lg-3 mt-5">
                <form method="post" enctype="multipart/form-data" action="{{ route('categories.store')}}" >
                    @csrf
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" name="phone">
                </div>
                <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email">
                </div>
                 <div class="file btn btn-secondary form-control mb-4">
                    <input type="file" name="image"/>
                </div>
                <input type="submit" class="btn btn-success" value="Add Category">
                </form>
            </div>
            <div class="col col-lg-9">

                    <table class="table table-striped" >
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                         <th scope="col">Action</th>
                        <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($categories as $category)
                         <tr>
                            <td scope="col">{{$category->id}}</td>
                            <td scope="col">{{$category->name}}</td>
                            <td scope="col">{{$category->address}}</td>
                            <td scope="col">{{$category->phone}}</td>
                            <td scope="col">{{$category->email}}</td>
                            <td scope="col"><img src="{{asset('uploads/user_images/'.$category->image) }}" width="75px" height="75px"></td>

                            <td>


                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>


                                <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>


                                <form action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline">
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                            <td scope="col">{{$category->created_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
