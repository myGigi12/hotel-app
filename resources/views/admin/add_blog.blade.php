<x-app-layout>
    <div class="content_page">
        <div class="lh-main-content">
            <!--stat content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h4 class="header-tittle mt-0 mb-4">Add Blog</h4>
                            <form action="{{ route ('admin.store.blog')}}" method="POST" enctype="multipart/form-data">@csrf

                                <label for="name">Name</label>
                                <input type="" name="name" class="form-control mb-3">

                                <label for="tittle">Blog tittle</label>
                                <input type="" name="tittle" class="form-control mb-3">

                                <label for="content">Content</label>
                                <input type="" name="content" class="form-control mb-3">

                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control mb-3">


                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

