@extends("layouts.base")
@section("main")
<h1>Detail for 「{{$shop->name}}」</h1>

<table class="table">
  <tr>
    <th>Owner</th>
    <td>{{$shop->owner_name}}</td>
  </tr>
  <tr>
    <th>創業</th>
    <td>{{$shop->age}}年</td>
  </tr>
  <tr>
    <th>Address</th>
    <td>{{$shop->address}}</td>
  </tr>
  <tr>
    <th>Phone</th>
    <td>{{$shop->phone_number}}</td>
  </tr>
  <tr>
    <th>Description</th>
    <td>{{$shop->description}}</td>
  </tr>
</table>
<a href="/shops" class="btn btn-primary">Back</a>
@endsection

