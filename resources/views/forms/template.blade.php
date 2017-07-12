<form action="">
    {{ method_field('PUT') }}
    <div class="input-group">
        <label for="event">Name:</label>
        <input type="text" name="name" class="form-control" value="">
    </div>
    <div class="input-group">
        <label for="event">Content:</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
</form>