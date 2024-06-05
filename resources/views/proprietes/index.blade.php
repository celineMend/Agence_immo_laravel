
{{-- <!DOCTYPE html>
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
</html> --}}



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Agence Immobilière</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .navbar {
            padding: 30px 0px;
        }
        .hero-bg {
            height: 700px;
            border-radius: 25px;
            background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px 250px;
            margin-bottom: 80px;
        }
        .hero-bg h1{
            font-size: 28px;
            text-align: center;
            color: white;
        }

        .apropos-content {
            margin-top: 70px;
            display: flex;
            gap: 5%;
        }
        .image{
            flex-basis: 48%;
            height: 530px;
            background: url(https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380);
            background-size: cover;
            box-shadow: -15px -15px 1px blueviolet;
            border: 1px solid white;
            border-radius: 25px;
        }
        .txt {
            flex-basis: 50%;
        }
        .txt p {
            font-size: 20px;
            line-height: 36px;
            text-align: justify;
        }
        .categorie {
            margin-top: 80px;
            margin-bottom: 80px;

        }
        .card-group {
            margin-top: 50px;
            display: flex;
            gap: 2%;
        }
        .card {
            height: 200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
            /* overflow-y: hidden; */
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-img-start {
            width: 100%;
            height: 200px;
        }
        .card-body {
            padding: 2rem;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        .card-text small {
            font-weight: normal;
        }
        .card-text a {
            color: blueviolet;
            text-decoration: none;
            margin-left: 1rem;
        }
        .card-text a:hover {
            text-decoration: underline;
        }


    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span style="color: blueviolet;">Célina</span>Immo</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Propriétées</a>
                        </li>
                    </ul>
                </div>
                <div class="btns">
                    <a class="btn btn-light" href="">Connexion</a>
                    <a class="btn btn-" style="background-color: blueviolet; color: white;" href="">Contact</a>
                </div>
            </div>
        </nav>

        <div class="hero-bg">
            <h1>Transformez votre rêve de maison en réalité avec notre expertise immobilière.</h1>
        </div>

        <section class="">
            <hr>
            <div class="apropos-content">
                <div class="image">
                </div>
                <div class="txt">
                    <h3>Lorem ipsum dolore !</h3>
                    <hr>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, dolor ipsam? Nostrum ducimus, quas quasi error consequatur illum neque tenetur mollitia delectus reprehenderit dolorum dolor?
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, dolor ipsam? Nostrum ducimus, quas quasi error consequatur illum neque tenetur mollitia delectus reprehenderit dolorum dolor?
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, dolor ipsam? Nostrum ducimus, quas quasi error consequatur illum neque tenetur mollitia delectus reprehenderit dolorum dolor?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis possimus corporis quia repellendus ratione quibusdam eum amet consequatur laborum eius!
                    </p>
                </div>
            </div>
        </section>

        <section class="categorie">
            <h2 class="title" style="font-size: 22px; border-bottom: 2px solid blueviolet; padding-bottom: 5px;">Nos différente catégories de proprietées</h2>
            <div class="card-group">
                <div class="card text-bg-dark">
                    <img src="https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card text-bg-dark">
                    <img src="https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card text-bg-dark">
                    <img src="https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="title" style="font-size: 22px; border-bottom: 2px solid blueviolet; padding-bottom: 5px;">Voici la liste de toutes nos proprieté</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($proprietes as $propriete)
                {{-- <div class="col">
                    <div class="card">
                        <img src="{{ $propriete->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $propriete->nom }}</h5>">
                            <p class="card-text">{{ $propriete->categorie }}</p>
                            <p class="card-text">{{ $propriete->adresse }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text"><small class="text-muted">{{ $propriete->date_ajout }}</small></p>
                                <a href="{{ route('proprietes.detail', $propriete->id) }}" style="font-size: 16px;"><i class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </section>






        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 CélinaImmo, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Acceuil</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Propriétés</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Connexion</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contact</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        </ul>
        </footer>


    </div>


</body>
</html>
