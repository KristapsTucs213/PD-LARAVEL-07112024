<x-app-layout>
    <h1>All posts</h1>
    <a href="/posts/create">Create post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="/posts/{{ $post->id }}">Show</a>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a>
                    <form action="{{ route('post.destroy', $post) }} " method = "POST">
                        @csrf
                        @method('DELETE')
                        <a href="/posts/{{ $post->id }}/destroy">Delete</a>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
