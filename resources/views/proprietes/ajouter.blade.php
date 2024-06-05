<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter une propriété</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col s12">
        <h1>Ajouter une propriété</h1>
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
        <form method="POST" action="/ajouter_traitement"  class="form_group">
            @csrf
            

            <div class="mb-3">
                <label for="nom" class="form-label">Nom de la propriété</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut</label>
                <select name="statut" id="statut" class="form-control" required>
                    <option value="">Sélectionnez un statut</option>
                    <option value="1">Disponible</option>
                    <option value="0">Pas disponible</option>
                </select>
            </div>
            <div>
                <label for="categorie" class="form-label">Catégorie</label>
                <select name="categorie_id" id="categorie" class="form-control" required>
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <br><br>
            <a href="/proprietes" class="btn btn-danger">Retourner à la liste des propriétés</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

