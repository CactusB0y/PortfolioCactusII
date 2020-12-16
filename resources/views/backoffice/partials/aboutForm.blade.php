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
    <form role="form" action="/about/{{$abouts->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom </label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom complet" value="{{$abouts->nom}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Profil </label>
            <input type="text" name="profil" class="form-control" id="exampleInputEmail1" placeholder="Profil" value="{{$abouts->profil}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail4">Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail4" placeholder="email" value="{{$abouts->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail5">Téléphone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail5" placeholder="Nom complet" value="{{$abouts->phone}}">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Photo</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="src" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>