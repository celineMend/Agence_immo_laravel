<!-- resources/views/proprietes/index.blade.php -->

    <div class="container">
        <h1>Liste des Propriétés</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom du Bien</th>
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
                        <td>{{ $propriete->categorie->libelle }}</td>
                        <td>{{ $propriete->description }}</td>
                        <td>{{ $propriete->adresse }}</td>
                        <td>{{ $propriete->status ? 'Occupé' : 'Non Occupé' }}</td>
                        <td>{{ $propriete->date_ajout }}</td>
                        <td>
                            <a href="{{ route('proprietes.show', $propriete->id) }}" class="btn btn-info">Voir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

