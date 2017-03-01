{!! Form::open(['route' => 'articles.store']) !!}
@include ('articles.form', ['submitButtonText' => 'Запостить'])
{!! Form::close() !!}