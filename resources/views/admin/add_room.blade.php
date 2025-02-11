<x-app-layout>

    <div class="content_page">
        <div class="lh-main-content">
            <!--stat content-->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 content-center">
                        <h1>Add Room</h1>

                        <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="room_no">Room No:</label>
                                <input type="" class="form-control mb-3"  name="room_no">
                            </div>

                            <div class="form-group" class="form-control mb-3">
                                <label for="type">Room type:</label>
                                <select name="type_id">
                                    <option value="">Select type </option>
                                    @foreach ( $types as $type )
                                    <option  value="{{$type->id}}">
                                        {{$type->name}}
                                    </option>

                                    @endforeach
                                </select>
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
