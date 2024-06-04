<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interface Utilisateur - Propriétés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card-custom {
      height: 100%;
    }
    .card-img-top-custom {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <a href="{{ route('proprietes.ajouter_traitement') }}" class="btn btn-info mb-3">Ajouter</a>
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

    <div class="row">
      @foreach($proprietes as $propriete)
        <div class="col-md-3 mb-4 d-flex align-items-stretch">
          <div class="card card-custom">
            <img src="{{ $propriete->image }}" class="card-img-top card-img-top-custom" alt="Image de la propriété">
            <div class="card-body">
              <h5 class="card-title">{{ $propriete->nom }}</h5>
              <p class="card-text">{{ $propriete->description }}</p>
              <p class="card-text">Adresse: {{ $propriete->adresse }}</p>
              <p class="card-text">Statut: {{ $propriete->statut }}</p>
              <a href="/proprietes/{{ $propriete->id }}" class="btn btn-info">Voir détail</a><br><br>
              <a href="/modifier/{{ $propriete->id }}" class="btn btn-info">Modifier</a><br>

              <button class="btn btn-danger mt-2" onclick="confirmDelete({{ $propriete->id }})">Supprimer</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    function confirmDelete(id) {
        const confirmed = confirm(`Êtes-vous sûr de vouloir supprimer la propriété avec l'ID ${id} ?`);
        if (confirmed) {
            window.location.href = `/proprietes/supprimer/${id}`;
        }
    }
</script>

</body>
</html>
