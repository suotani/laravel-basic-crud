@extends("layouts.base")
@section("main")
<h1>shop list</h1>

<a class="btn btn-info" href="/shops/new">+Add Shop</a>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Owner</th>
    <th>Description</th>
    <th></th>
  </tr>
  @foreach($shops as $shop)
  <tr>
    <td><a href="/shops/{{$shop->id}}">{{$shop->name}}</a></td>
    <td>{{$shop->owner_name}}</td>
    <td>{{$shop->description}}</td>
    <td><a href="/shop/{{$shop->id}}/edit" class="btn btn-success">EDIT</a></td>
  </tr>
  @endforeach
</table>
@endsection