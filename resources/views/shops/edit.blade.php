@extends("layouts.base")

@section("main")
<h1>New Shop</h1>

<form action="/shop/{{$shop->id}}" method="post">
  @csrf
  <input type="hidden" name="_method" value="patch">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" value="{{$shop->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Owner</label>
    <input type="text" name="owner_name" class="form-control" value="{{$shop->owner_name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="number" name="age" class="form-control" value="{{$shop->age}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" value="{{$shop->address}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" value="{{$shop->phone_number}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="description" class="form-control">{{$shop->description}}</textarea>
  </div>
  <a href="/shops" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection