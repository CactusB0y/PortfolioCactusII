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
    <form role="form" action="/tag/{{$tags->id}}" method="post">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tag</label>
            <input type="text" value="{{$tags->tag}}" name="tag" class="form-control" id="exampleInputEmail1" placeholder="Tag">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>