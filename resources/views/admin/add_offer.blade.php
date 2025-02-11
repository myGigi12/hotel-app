<x-app-layout>
    <div class="content_page">
        <div class="lh-main-content">
             <!--stat content-->
             <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 content-center">
                        <h1>Add Special Offer</h1>

                        <form action="{{route('admin.store.offer')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group" class="form-control mb-3">
                                <label for="name">Offer Name:</label>
                                <input type="" class="form-control mb-3"  name="name">
                            </div>

                            <div class="form-group">
                                <label for="type_id">Room Type:</label>
                                <select name="type_id">
                                    <option value=""></option>
                                    @foreach ( $types as $type )
                                    <option  value="{{$type->id}}">
                                        {{$type->name}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="" class="form-control mb-3"  name="price">
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control mb-3"  name="image">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Add Room</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

