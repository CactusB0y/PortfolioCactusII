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
      <h3 class="card-title">Ajouter un Skill</h3>
    </div>
    <form role="form" action="/skill" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom </label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Maitrise </label>
            <input type="text" name="maitrise" class="form-control" id="exampleInputEmail1" placeholder="maitrise">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
  @endcan