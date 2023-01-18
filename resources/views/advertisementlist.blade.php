
@extends('homepage')

@section('advertisementlist')
    <p> Here is the list of all the items that are currently on sale: </p>
    @foreach ($advertisements as $item)
        <p>Here is the name {{$item->name}} <br/></p>
        <p>Over here is the description {{$item->description}}</p>
    @endforeach
@endsection