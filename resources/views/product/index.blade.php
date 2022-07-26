@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h3 style="color: blue">Category</h3>
<table class="table table-hover">
<thead>
<tr>
<td>Judul</td>
<td>Penulis</td>
<td>Harga</td>
</tr>
</thead>
<tbody>
@foreach($book as $books)
<tr>
<td>{{ $books->title }}</td>
<td>{{ $books->writer }}</td>
<td>{{ $books->price }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection