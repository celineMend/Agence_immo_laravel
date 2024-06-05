<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des Catégories</h1>
        <a href="{{ route('categories.ajouter') }}" class="btn" style="background-color: blueviolet;margin-bottom: 15px;color:white;">Ajouter une Catégorie</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->libelle}}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>
                           <div class= "d-flex">
                            <a href="{{ route('categories.modifier', $categorie->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('categories.supprimer', $categorie->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                            </form>
                           </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="3">Aucune catégorie trouvée.</td>
                        </tr>
                    @endforelse
            </tbody>
        </table>
        <a href="/proprietes">retour</a>
    </div>
</body>
</html>
