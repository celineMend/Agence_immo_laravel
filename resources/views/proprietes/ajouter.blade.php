<!-- resources/views/proprietes/create.blade.php -->

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

