<form action = "{{route('posts.store')}}" method="post">
@csrf
<div class = "form-group">
    <label>Título</label>
    <input type="text" name = "title" class="form-control" value="{{old('title')}}">
    <div class = "form-group">
    <label>Descrição</label>
    <input type = "text" name="description" class="form-control">
    </div>

    <div class = "form-group">
    <label>Conteúdo</label>
    <textarea name="content" cols="30" rows="10"class="form-control"></textarea>
    </div>

    <div class = "form-group">
    <label>Slug</label>
    <input type = "text" name="slug" class="form-control">
    </div>


</div>
<button class="btn btn-lg btn-success">Postar</button>
</form>