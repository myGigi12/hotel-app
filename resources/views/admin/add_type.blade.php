<x-app-layout>

    <div class="content_page">
        <div class="lh-main-content">
            <!--stat content-->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 content-center">
                        <h1>Add type</h1>

                        <form action="{{ route('admin.store.type') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="type_name">Name:</label>
                                <input type="text" class="form-control" name="type_name">
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control"  name="description">
                            </div>

                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control"  name="price">
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control"  name="image">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Add Type</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
