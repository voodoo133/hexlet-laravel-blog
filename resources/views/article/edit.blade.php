{{ Form::model($article, [ 'url' => route('articles.update', $article->id), 'method' => 'PATCH' ]) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}