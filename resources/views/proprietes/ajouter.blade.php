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

    <div class="container">
        <h1>Ajouter une Propriété</h1>
        <form action="{{ route('proprietes.ajouter_traitement') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom du Bien</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select name="categorie_id" id="categorie_id" class="form-control">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required name = "description"></textarea>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="statut">Status</label>
                <select name="statut" id="statut" class="form-control" required>
                    <option value="1">Occupé</option>
                    <option value="0">Non Occupé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_ajout">Date d'Ajout</label>
                <input type="date" name="date_ajout" id="date_ajout" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

