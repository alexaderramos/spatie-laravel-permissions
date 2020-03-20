@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$user->name??old('name')}}">
</div>

<div class="form-group">
    <label for="">Roles</label>
        @foreach($roles as $role)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="exampleRadios1"
                       value="{{$role->id}}"
                {{$user->hasRole($role->id) ? 'checked':''}}>
                <label class="form-check-label" for="exampleRadios1">
                    {{$role->name}}
                </label>
            </div>
        @endforeach
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="exampleRadios1"
               value=""
            {{$user->roles->count()==0 ? 'checked':''}}>
        <label class="form-check-label" for="exampleRadios1">
            Sin rol
        </label>
    </div>
</div>

<div class="form-group">
    <div class="float-right">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</div>

