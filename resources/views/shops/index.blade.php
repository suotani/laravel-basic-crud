@extends("layouts.base")
@section("main")
<h1>shop list</h1>

<a class="btn btn-info" href="/shops/create">+Add Shop</a>
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
    <td>
      <form action="/shops/{{$shop->id}}" method="post">
        <a href="/shops/{{$shop->id}}/edit" class="btn btn-success">EDIT</a>
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection