<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <div class="container-fluid" >
                <div class="row">
                    @foreach ($rooms as $room)
                    <div class="col-md-5" style="display:grid; margin: 0px 10px ">
                        <div class="card card-body" style="margin: 0px 10px">
                            <h4>{{$room->room_no}}</h4>
                            <img src="/storage/{{ $room->type->image }}" width="80px">
                            <br>
                            <p><strong>{{$room->type->name}}</strong></p>
                            <span>{{$room->created_at->format('d M Y, h:ia')}}</span>
                            <span>{{$room->created_at->diffForHumans()}}</span>
                            <br>
                            <a href="{{route('admin.room.edit', $room->id)}}">
                                <button class="btn btn-danger">Edit</button>
                            </a>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
