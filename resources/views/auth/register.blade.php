<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="flex items-center mb-6 text-2xl font-semiblod text-gray-900 dark:text-white">
                Register
            </div>
            <div>
                <div>
                    <h1>Creer un compte</h1>
                    <form action="{{ route('register.save') }}" method="post">
                        @csrf
                        <div>
                            <label for="nom"></label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez le nom...">
                            @error('nom')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email"></label>
                            <input type="email" name="email" id="email" placeholder="Entrez l'email...">
                            @error('email')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="mot_de_passe"></label>
                            <input type="password" name="mot_de_passe" id="mot_de_passe"
                            @error('mot_de_passe')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="flex w-full justify-center">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
