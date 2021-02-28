<div class="card flex column">

    <h3>Name: {{$category->name}}</h3>
    <div class="crud flex">
        <button class="btn btn-dark">
            <a href="{{ route('categories.show', $category->id) }}">
                <i class="fas fa-eye"></i>
            </a>
        </button>
        <button class="btn btn-warning" href="">
            <a href="{{ route('categories.edit', $category->id) }}">
                <i class="fas fa-edit"></i>
            </a>
        </button>
        <form action="{{route('categories.destroy', $category->id)}}" method="post">
        @METHOD ('DELETE')
        @csrf
        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>

    </div>

</div>