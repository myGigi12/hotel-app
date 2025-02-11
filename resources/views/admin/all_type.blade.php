<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <div class="container-fluid" >
                <div class="row">
                    @foreach ($types as $type)
                    <div class="col-md-5" style="display:grid; margin: 0px 10px ">
                        <div class="card card-body" style="margin: 0px 10px">
                            <h4>{{$type->name}}</h4>
                            <img src="/storage/{{ $type->image }}" width="80px">
                            <br>
                            <h6>{{$type->description}}</h6>
                            <span>{{$type->created_at->format('d M Y, h:ia')}}</span>
                            <span>{{$type->created_at->diffForHumans()}}</span>
                            <br>
                           <a href="{{route('admin.type.edit', $type->id)}}">
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
