<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <!--stat content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h4 class="header-tittle mt-0 mb-4">Edit Offers</h4>
                            <img src="/storage/{{$offers->image}}" width="100px" id="">
                            <form action="{{route('admin.offer.update', $offers->id)}}" method="POST" enctype="multipart/form-data">@csrf
                                <label for="name">Name</label>
                                <input type="" value="{{$offers->name}}" name="name" class="form-control mb-3">

                                <label for="type_id">Type id</label>
                                <select name="type_id" id="" class="form-control mb-3">
                                    <option value="{{$offers->type->id}}">{{$offers->type->name}}</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">
                                            <img src="/storage/{{$type->image}}" alt="">
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <label for="image">Price</label>
                                <input type="" value="{{$offers->price}}" name="price" class="form-control mb-3">

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

