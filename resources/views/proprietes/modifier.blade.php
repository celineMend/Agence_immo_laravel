<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier une propriété</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="col s12">
            <h1>Modifier une propriété</h1>
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
            <form action="/modifier_traitement" method="POST" class="form_group">
                @csrf
                <input type="hidden" name="id" style="display:none;" value="{{ $proprietes->id }}"required>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de la propriété</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $proprietes->nom }}"required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $proprietes->description }}"required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="url" class="form-control" id="image" name="image" value="{{ $proprietes->image }}"required>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $proprietes->adresse }}"required>
                </div>
                <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select name="statut" id="statut" class="form-control" required>
                        <option value="">Sélectionnez un statut</option>
                        <option value="1" {{ old('statut', $proprietes->statut) == 1 ? 'selected' : '' }}>Disponible</option>
                        <option value="0" {{ old('statut', $proprietes->statut) == 0 ? 'selected' : '' }}>Pas disponible</option>
                    </select>
                </div>
                <div>
                    <label for="categorie" class="form-label">Catégorie</label>
                    <select name="categorie_id" id="categorie" class="form-control" required>
                        <option value="">Sélectionnez une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ old('categorie_id', $proprietes->categorie_id) == $categorie->id ? 'selected' : '' }}>
                                {{ $categorie->libelle }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier une propriété</button>
                <br><br>
                <a href="/proprietes" class="btn btn-danger">Revenir aux propriétés</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
