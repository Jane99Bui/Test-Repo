<div>
    <form action="{{ url('save-account') }}" method="POST" enctype="multipart/form-data" >
    @csrf

        <input type="text" name="name">
        <input type="password" name="password">

        <button type="submit" name ="submit">Save</button>

    </form>
</div>
