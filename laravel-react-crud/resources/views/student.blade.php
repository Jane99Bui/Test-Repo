<h4>Edit and Update
<a href="{{ url('add-student') }}">Add</a>
</h4>
<table border="1">
    <thead>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Section</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($student as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->course}}</td>
            <td>{{$row->section}}</td>
            <td><a href="{{ url('edit-student/'.$row->id) }}" >Edit</a></td>
            <td><a href="{{ url('delete-student/'.$row->id) }}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>