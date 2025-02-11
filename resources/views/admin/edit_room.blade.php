<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <!--stat content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h4 class="header-tittle mt-0 mb-4">Edit Product</h4>
                            <form action="{{route('admin.room.update', $rooms->id)}}" method="POST" enctype="multipart/form-data">@csrf
                                <img src="/storage/{{$rooms->type->image}}" width="80px" id="">
                                <br>
                                <label for="room_no">Room No</label>
                                <input type="" value="{{$rooms->room_no}}" name="room_no" class="form-control mb-3">

                                <label for="type_id">Type id</label>
                                <select name="type_id" id="" class="form-control mb-3">
                                    <option value="{{$rooms->type->id}}">{{$rooms->type->name}}</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">
                                            <img src="/storage/{{$type->image}}" alt="">
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

