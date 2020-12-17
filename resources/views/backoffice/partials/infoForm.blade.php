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
    <form role="form" action="/info/{{$infos->id}}" method="post">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">adresse complete </label>
            <input type="text" name="adresse" class="form-control" id="exampleInputEmail1" placeholder="adresse complete" value="{{$infos->adresse}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">adresse rue </label>
            <input type="text" name="adresseRue" class="form-control" id="exampleInputEmail1" placeholder="adresse rue" value="{{$infos->adresseRue}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">adresse numero </label>
            <input type="text" name="numero" class="form-control" id="exampleInputEmail1" placeholder="adresse numero" value="{{$infos->numero}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">téléphone </label>
            <input type="text" name="tel" class="form-control" id="exampleInputEmail1" placeholder="téléphone" value="{{$infos->tel}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">email </label>
            <input type="text" name="mail" class="form-control" id="exampleInputEmail1" placeholder="email" value="{{$infos->mail}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">facebook </label>
            <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="facebook" value="{{$infos->facebook}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">instagram </label>
            <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" placeholder="instagram" value="{{$infos->instagram}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">twitter </label>
            <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="twitter" value="{{$infos->twitter}}">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>