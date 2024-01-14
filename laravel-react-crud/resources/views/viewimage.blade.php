<h4>Edit and Update
<a href="{{ url('image') }}">Add</a>
</h4>
<table border="1">
    <thead>

        <tr>
            <th>ID</th>
            <th>Name</th>
           
        </tr>
    </thead>
    <tbody>
    @foreach($image as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td><a href="{{ url('view-imageid/'.$row->id) }}">Xem chi tiết</a></td>
        </tr>
        @endforeach
    </tbody>
</table>