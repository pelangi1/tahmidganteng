@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
{{-- <h3 style="color: blue">Halo ges</h3> --}}
{!! Form::open(['url' => 'book', 'method'=>'get', 'class'=>'form-inline'])!!}
<div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
{!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Judul Buku..']) !!}
{!! $errors->first('q', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
<br>
<div class="new-class"><h3>Data Produk</h3></div>
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
{{ $book->links() }}
</div>
</div>
</div>
@endsection