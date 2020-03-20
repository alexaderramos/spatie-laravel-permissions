@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$role->name??old('name')}}">
</div>

<div class="form-group">
    <label for="">Permissions</label>
    @foreach($permissions as $permission)
        <div class="form-check">
            <input class="form-check-input" name="permissions[]" type="checkbox"
                   value="{{$permission->id}}" id="defaultCheck1"
                {{$role->hasPermissionTo($permission->id) ? 'checked':''}}>
            <label class="form-check-label" for="defaultCheck1">
                {{$permission->name}}
            </label>
        </div>
    @endforeach
</div>
<div class="float-right">
    <button type="submit" class="btn btn-primary">Save</button>
</div>

