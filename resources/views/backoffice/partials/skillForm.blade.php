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
    <form role="form" action="/skill/{{$skills->id}}" method="post">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom </label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom complet" value="{{$skills->nom}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Maitrise </label>
            <input type="text" name="maitrise" class="form-control" id="exampleInputEmail1" placeholder="maitrise" value="{{$skills->maitrise}}">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>