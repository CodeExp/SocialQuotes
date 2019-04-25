@extends('template')

@section('contenu')
    {!! Form::open(['url' => 'afficher']) !!}
        {!! Form::label('quote', 'Votre citation :') !!}
        {!! Form::textarea('quote') !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection