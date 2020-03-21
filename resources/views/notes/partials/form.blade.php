
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$note->title??''}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" value="{{$note->description?? ''}}">
    </div>
    <div class="float-right">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
