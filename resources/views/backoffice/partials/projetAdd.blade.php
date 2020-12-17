@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@can('look', Auth::user())
  

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter un Projet</h3>
    </div>
    <form role="form" action="/projet" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date de création</label>
            <input type="text" name="date" class="form-control" id="exampleInputEmail1" placeholder="date">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">link</label>
            <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="link">
        </div>
        <div class="form-group">
            <label>Choisir un tag</label>
            <select class="form-control" name="tag_id">
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->tag}}</option>
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
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
  @endcan