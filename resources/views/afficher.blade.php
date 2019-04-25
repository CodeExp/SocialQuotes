@extends('template')

@section('contenu')
    <p>{{{ $quote->content }}}</p>
    <p><a href="/utilisateur/{{{ $quote->user->id }}}">{{{ $quote->user->name }}}</a></p>
@endsection