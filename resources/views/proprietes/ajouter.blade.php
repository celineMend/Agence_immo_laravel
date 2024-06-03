<!-- resources/views/proprietes/create.blade.php -->

    <div class="container">
        <h1>Ajouter une Propriété</h1>
        <form action="{{ route('proprietes.ajouter') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom_du_bien">Nom du Bien</label>
                <input type="text" name="nom_du_bien" id="nom_du_bien" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select name="categorie_id" id="categorie_id" class="form-control" required>
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
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
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

