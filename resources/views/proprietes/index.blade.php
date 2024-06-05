<!doctype html>
<html lang="en">

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
            height: 800px;
            border-radius: none;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(https://img.freepik.com/photos-gratuite/hotel-piscine-station-eau-luxe_1203-4648.jpg?t=st=1717594695~exp=1717598295~hmac=b6d0cb3ccc42ccdb4b9e190be044bc4113f8c70f9069c55dd6a7381542fc80cd&w=1380);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
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
            line-height: 45px;
        }

        .apropos-content {
            margin-top: 70px;
            display: flex;
            gap: 5%;
        }
        .image{
            flex-basis: 48%;
            height: 530px;
            background: url(https://img.freepik.com/photos-gratuite/salon-bois-blanc-rendu-3d-pres-chambre-haut_105762-2197.jpg?t=st=1717576412~exp=1717580012~hmac=16362f39d7716cafaaa29159ba17d474c6cf776462ce6d009fe1c7db802335e8&w=1380);
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
        .section,
        .categorie {
            margin-top: 150px;
        }
        .categorie {
            margin-bottom: 80px;

        }
        .card-group {
            display: flex;
            gap: 2%;
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
    </div>
        <div class="hero-bg">
            <h1>Transformez votre rêve de maison en réalité avec notre expertise immobilière. Chez Célina Immo, nous comprenons que chaque propriété raconte une histoire, et nous sommes là pour vous guider à travers chaque étape de votre parcours immobilier.</h1>
        </div>
    <div class="container">

        <section class="section">

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
                @foreach($categories as $categorie)
                <div class="card text-bg-dark">
                    <img src="https://img.freepik.com/photos-gratuite/villa-luxe-piscine-design-contemporain-spectaculaire-art-numerique-immobilier-maison-maison-propriete-ge_1258-150749.jpg?t=st=1717504664~exp=1717508264~hmac=90f2ff5bbe0034868f6f0aecc7fc21c79be0c1818ebecbf4596fe33878895297&w=1380" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $categorie->libelle }}</h5>
                        <p class="card-text">{{ $categorie->description }}</p>

                    </div>
                </div>
               @endforeach
            </div>
            <a href="/categories" class="btn" style="background-color: blueviolet; color: white;margin-top: 10px;">Gérer les catégories</a>
        </section>

        <section class="section">
            <h2 class="title" style="font-size: 22px; border-bottom: 2px solid blueviolet; padding-bottom: 5px;">Voici la liste de toutes nos proprieté</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($proprietes as $propriete)
                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ $propriete->image }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $propriete->nom }}</h5>
                                    <p class="card-text">{{ $propriete->categorie }}</p>
                                    <p class="card-text">{{ $propriete->adresse }}</p>
                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                        <p class="card-text"><small class="text-muted">{{ $propriete->date_ajout }}</small></p>
                                        <div>
                                            <a href="{{ route('proprietes.detail', $propriete->id) }}" style="font-size: 16px;"><i class="fa-regular fa-eye"></i></a>
                                            <a href="{{ route('proprietes.modifier', $propriete->id) }}" style="font-size: 16px;"><i class="fa-solid fa-pencil"></i>
                                            <a href="{{ route('proprietes.supprimer', $propriete->id) }}" style="font-size: 16px;"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
