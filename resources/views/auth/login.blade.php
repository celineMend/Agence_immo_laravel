<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .error-list {
            background-color: #ffe6e6;
            border: 1px solid #ffcccc;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .error-list ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .error-list li {
            color: #d9534f;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Connexion</h1>

    <form method="POST" action="{{ route('authenticate') }}">
        @csrf

        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-input">
        <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Mot de passe" class="form-input">

        <button type="submit" class="btn-primary">Connexion</button>

        {{-- errors --}}
        @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</div>

</body>
</html>
