@extends('template')

@section('contenu')
    @foreach($quotes as $quote)
        <p><a href="/citation/{{{ $quote->id }}}">{{{ $quote->content }}}</a></p>
        <p><a href="/utilisateur/{{{ $quote->user->id }}}">{{{ $quote->user->name }}}</a></p>
    @endforeach
@endsection