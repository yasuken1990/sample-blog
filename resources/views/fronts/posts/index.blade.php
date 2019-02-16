@foreach($posts as $post)
    <p>{{ $post->id }} {{ $post->title }} {{ $post->created_at }}</p>
@endforeach