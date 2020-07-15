@extends("layouts.base")
@section("main")
<h1>shop list</h1>

<table class="table">
  <tr>
    <th>Name</th>
    <th>Owner</th>
    <th>Description</th>
  </tr>
  @foreach($shops as $shop)
  <tr>
    <td>{{$shop->name}}</td>
    <td>{{$shop->owner_name}}</td>
    <td>{{$shop->description}}</td>
  </tr>
  @endforeach
</table>
@endsection