<div class="card flex column">

    <h3>Name: {{$tag->arguments}}</h3>
    <h3>Views: {{$tag->views}}</h3>
    <h3>Shares: {{$tag->shares}}</h3>

    <div class="crud flex">
        <button class="btn btn-dark">
            <a href="{{ route('tags.show', $tag->id) }}">
                <i class="fas fa-eye"></i>
            </a>
        </button>
        <button class="btn btn-warning" href="">
            <a href="{{ route('tags.edit', $tag->id) }}">
                <i class="fas fa-edit"></i>
            </a>
        </button>
        <form action="{{route('tags.destroy', $tag->id)}}" method="post">
            @METHOD ('DELETE')
            @csrf
            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>

    </div>

</div>