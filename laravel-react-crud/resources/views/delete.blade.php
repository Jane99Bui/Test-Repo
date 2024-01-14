<div class="container">
    <div class="row">
        <div class="col-md-12">

   
            <div class="card">
                <div class="card-header">
                    <h4>Edit and Update
                      <a href="{{ url('student') }}">Add</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('delete/'.$student->id) }}" method="POST">
                        @csrf
                        @method('delete')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" value="{{$student->course}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="text" name="section" value="{{$student->section}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

