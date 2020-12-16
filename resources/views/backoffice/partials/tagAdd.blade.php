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
      <h3 class="card-title">Ajouter un Tag</h3>
    </div>
    <form role="form" action="/tag" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tag</label>
            <input type="text" name="tag" class="form-control" id="exampleInputEmail1" placeholder="Tag">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>