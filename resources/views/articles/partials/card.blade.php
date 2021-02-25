@foreach($article as $post)

<div class="card flex column">


    <h3>Title: {{$post->title}}</h3>
    <p>{{$post->content}}</p>
    <h4>Author: {{$post->author}}</h4>
    <h4>Id: {{$post->id}}</h4>


    <h4 class="category">Category: {{$post->category->name}}</h4>

    <div class="crud flex">
        <button class="btn btn-dark"><a href="{{ route('articles.show', $post->id) }}"><i class="fas fa-eye"></i></a></button>
        <button class="btn btn-warning" href=""><a href="{{ route('articles.edit', $post->id) }}"><i class="fas fa-edit"></i></a></button>

    </div>



</div>

@endforeach