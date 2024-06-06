<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1 class="text-xl font-bold mb-4">Creer un nouveau Personel</h1>

    <form method="POST" action="{{ route('register.store') }}" class="form">
        @csrf
        <input type="text" id="nom" name="nom" value="{{ old("nom") }}" placeholder="nom" class="form-input">

        <input type="email" id="email" name="email" value="{{ old("email") }}" placeholder="email" class="form-input">

        <input type="password" id="mot_de_passe" name="mot_de_passe" value="{{ old("mot_de_passe") }}" placeholder="mot_de_passe" class="form-input">

        <div class="flex items-start justify-center">
            <a href="/" class="btn-secondary flex-1">Connexion</a>
            <button type="submit" class="btn-primary flex-1">Enregistrer</button>
        </div>

        {{-- errors --}}

        @if ($errors->any())
        <div class="bg">
            <ul class="text-sm text-red">
                @foreach ($errors->all() as $key => $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>

</body>
</html>
