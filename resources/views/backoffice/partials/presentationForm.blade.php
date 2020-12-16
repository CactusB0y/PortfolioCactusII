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
              <form role="form" action="/presentation/{{$presentations->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom complet</label>
                    <input type="text" name="nom_complet" class="form-control" id="exampleInputEmail1" placeholder="Nom complet" value="{{$presentations->nom_complet}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Catch phrase</label>
                    <input type="text" name="catch_phrase" class="form-control" id="exampleInputPassword1" placeholder="Catch phrase" value="{{$presentations->catch_phrase}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
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