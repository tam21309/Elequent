@extends('shops.layouts.master')
@section('content')
<h1>Danh Sách blog</h1>
<table class="table">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
    </tr>
    @foreach ($blog as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
    </tr>
        
    @endforeach
</table>
@endsection