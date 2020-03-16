@extends('layouts.main')
@section('content')

@foreach ($brani as $brano)
<div class="cd">
        <img src="{{$brano['imgpath']}}" />

        <h3>{{$brano['album']}}</h3>
        <small>{{$brano['artist']}}</small>
        <strong>{{$brano['year']}}</strong>
    </div>
@endforeach

@endsection
