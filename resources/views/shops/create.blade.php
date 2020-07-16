@extends("layouts.base")

@section("main")
<h1>New Shop</h1>

@if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
      <li class="alert alert-warning">{{$error}}</li>
    @endforeach
  </ul>
@endif

<form action="/shops" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Owner</label>
    <input type="text" name="owner_name" class="form-control" value="{{old('owner_name')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="number" name="age" class="form-control" value="{{old('age')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" value="{{old('address')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" value="{{old('phone_number')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="description" class="form-control">{{old('description')}}</textarea>
  </div>
  <a href="/shops" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection