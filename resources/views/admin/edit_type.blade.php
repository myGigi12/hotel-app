<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <!--stat content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h4 class="header-tittle mt-0 mb-4">Edit Type</h4>
                            <img src="/storage/{{$types->image}}" width="100px" id="">
                            <form action="{{route('admin.type.update', $types->id)}}" method="POST" enctype="multipart/form-data">@csrf
                                <label for="name">Name</label>
                                <input type="" value="{{$types->name}}" name="name" class="form-control mb-3">

                                <label for="image">Price</label>
                                <input type="" value="{{$types->price}}" name="price" class="form-control mb-3">

                                <label for="image">Write description</label>
                                <input type="" value="{{$types->description}}" name="description" class="form-control mb-3">

                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control mb-3"></input>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

