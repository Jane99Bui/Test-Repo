
<div>
   
    <table border="1">

<tr border="1">
<td> ID : {{$image->id}}</td>
<td> Name : {{$image->name}}</td>

<td> <img src="{{ asset('uploads/students/'.$image->image) }}" style="height: 50px;width:100px;"></th>
    </tr>
   </table>
</div>
