<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - BACCANALE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6c757d);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            max-width: 480px;
            width: 100%;
        }
        .card-header {
            border-bottom: none;
        }
        .card-header h3 {
            font-size: 1.6rem;
        }
        .card-header p {
            font-size: 1rem;
        }
        .card-body {
            padding: 2rem;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }
        .btn-primary {
            border-radius: 8px;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.75rem;
        }
        .card-footer {
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <div class="card shadow-lg border-0">

        <!-- Body -->
        <div class="card-body">
            <!-- Messages de session -->
            @if (session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Erreurs -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autofocus
                           placeholder="email@example.com">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password"
                           name="password"
                           required
                           placeholder="••••••••">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Options -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="small text-decoration-none">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <!-- Bouton -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer -->
        @if (Route::has('register'))
            <div class="card-footer text-center bg-light border-top">
                <span class="text-muted">Pas encore de compte ?</span>
                <a href="{{ route('register') }}" class="ms-1 text-decoration-none">S'inscrire</a>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
