
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Propriétés</title>
</head>
<body>

    <div class="container">
        <h1>Liste des Propriétés</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom du Bien</th>
                    <th>Image</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Adresse</th>
                    <th>Status</th>
                    <th>Date d'Ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proprietes as $propriete)
                    <tr>
                        <td>{{ $propriete->nom_du_bien }}</td>
                        <td>{{ $propriete->image }}</td>
                        <td>{{ $propriete->categorie }}</td>
                        <td>{{ $propriete->description }}</td>
                        <td>{{ $propriete->adresse }}</td>
                        <td>{{ $propriete->status ? 'Occupé' : 'Non Occupé' }}</td>
                        <td>{{ $propriete->date_ajout }}</td>
                        <td>
                            -- <a href="{{ route('proprietes.detail', $propriete->id) }}" class="btn btn-info">Voir</a> --
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

