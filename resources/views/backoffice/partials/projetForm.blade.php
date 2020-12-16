@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <form role="form" action="/projet/{{$projets->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">nom</label>
            <input type="text" name="nom" value="{{$projets->nom}}" class="form-control" id="exampleInputEmail1" placeholder="nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">date</label>
            <input type="text" name="date" value="{{$projets->date}}" class="form-control" id="exampleInputEmail1" placeholder="date">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">link</label>
            <input type="text" name="link" value="{{$projets->link}}" class="form-control" id="exampleInputEmail1" placeholder="link">
        </div>
        <div class="form-group">
            <label>Choisir un tag</label>
            <select class="form-control" name="tag_id">
                @foreach ($tags as $tag)
                <option {{$tag->id == $tag->id ? 'selected' : ""}} value="{{$tag->id}}">{{$tag->tag}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Upload</label>
            <div class="input-group col-2">
              <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choisir une image</label>
              </div>
            </div>
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>