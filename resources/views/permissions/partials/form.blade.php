@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$permission->name??old('name')}}">
</div>
<div class="float-right">
    <button type="submit" class="btn btn-primary">Save</button>
</div>

