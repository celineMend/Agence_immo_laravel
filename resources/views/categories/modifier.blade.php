<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier une Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="col s12">
            <h1>Modifier une Catégorie</h1>
            <hr>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('categories.modifier_traitement') }}" method="POST" class="form_group">
                @csrf
                <input type="hidden" name="id" style="display:none;" value="{{ $categories->id }}"required>
                <div class="mb-3">
                    <label for="libelle" class="form-label">libelle de la catégorie</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $categories->libelle }}"required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $categories->description }}"required>
                </div>

                <button type="submit" class="btn btn-primary">Modifier une catégories</button>
                <br><br>
                <a href="/proprietes" class="btn btn-danger">Revenir aux catégories</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
