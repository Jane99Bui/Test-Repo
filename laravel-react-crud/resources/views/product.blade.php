<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Student Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('save-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="mota" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="gia" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" required class="course form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>