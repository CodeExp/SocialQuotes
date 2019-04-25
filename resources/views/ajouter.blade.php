@extends('template')
 
@section('contenu')
    <div class="message">{{{ $message }}}</div>
    {!! Form::open(['url' => 'citation/ajouter']) !!}
        {!! Form::label('quote', 'Votre citation :') !!}
        {!! Form::textarea('quote') !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection