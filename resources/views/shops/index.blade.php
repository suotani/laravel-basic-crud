@extends("layouts.base")
@section("main")
<h1>shop list</h1>

<a class="btn btn-info" href="/shops/new">+Add Shop</a>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Owner</th>
    <th>Description</th>
  </tr>
  @foreach($shops as $shop)
  <tr>
    <td><a href="/shops/{{$shop->id}}">{{$shop->name}}</a></td>
    <td>{{$shop->owner_name}}</td>
    <td>{{$shop->description}}</td>
  </tr>
  @endforeach
</table>
@endsection