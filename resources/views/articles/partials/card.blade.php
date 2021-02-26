<div class="card flex column">


    <h3>Title: {{$article->title}}</h3>
    <p>{{$article->content}}</p>
    <h4>Author: {{$article->author}}</h4>


    <h4 class="category">Category: {{$article->category->name}}</h4>

    <h4 class="tag-post">
        Tag:
        @if (count($article->tags) > 0 )

        @foreach ($article->tags as $tag)
        <span class="tag"> {{$tag->arguments}} </span>
        @endforeach
        @else
        N/a
        @endif
    </h4>

    <div class="crud flex">
        <button class="btn btn-dark">
            <a href="{{ route('articles.show', $article->id) }}">
                <i class="fas fa-eye"></i>
            </a>
        </button>
        <button class="btn btn-warning" href="">
            <a href="{{ route('articles.edit', $article->id) }}">
                <i class="fas fa-edit"></i>
            </a>
        </button>
        <form action="{{route('articles.destroy', $article->id)}}" method="post">
            @METHOD ('DELETE')
            @csrf
            <button class=" btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>

    </div>



</div>