<form action="{{route('posts.update',['post' => $post->id])}}">
@csrf
@method("PUT")

</form>