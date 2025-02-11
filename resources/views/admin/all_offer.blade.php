<x-app-layout>
    <div class="content-page">
        <div class="lh-main-content">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($offers as $offer)
                    <div class="col-md-5">
                        <div class="card card-body" style="margin: 15px 0px ">
                            <h4>{{$offer->name}}</h4>
                            <img src="/storage/{{ $offer->image }}" width="80px">
                            <br>
                            <span><strong>N</strong>{{$offer->price}}</span>
                            <span>{{$offer->created_at->format('d M Y, h:ia')}}</span>
                            <span>{{$offer->created_at->diffForHumans()}}</span>
                            <br>
                            <a href="{{route('admin.offer.edit', $offer->id)}}">
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
