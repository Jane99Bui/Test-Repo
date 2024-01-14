<div>
    <form action="{{ url('save-image') }}" method="POST"  >
    @csrf

        <input type="text" name="name">
        <input type="file" name="image">

        <button type="submit" name ="submit">Save</button>

    </form>
</div>
