@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto my-24 w-full p-4">
        <ul class="list-disc">
            @foreach ($transcripts as $transcript)
                <li><a href="/transcript/{{$transcript->id}}">{{$transcript->hash}}</a> ({{$transcript->created_at}})</li>
            @endforeach
        </ul>
    </div>
@endsectionß