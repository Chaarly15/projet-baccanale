@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-tachometer-alt me-2"></i>
                        Tableau de bord
                    </h4>
                </div>

                <div class="card-body p-4">
                    <div class="alert alert-success border-0 rounded-3">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Connexion réussie !</strong> Bienvenue {{ auth()->user()->name }}.
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    <h5>Mon Profil</h5>
                                    <p class="text-muted">Gérer mes informations personnelles</p>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="fas fa-edit me-2"></i>Modifier
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-home fa-3x text-success mb-3"></i>
                                    <h5>Site Web</h5>
                                    <p class="text-muted">Retourner sur le site BACCANALE</p>
                                    <a href="{{ route('home') }}" class="btn btn-outline-success">
                                        <i class="fas fa-external-link-alt me-2"></i>Visiter
                                    </a>
                                </div>
                            </div>
                        </div>

                        @if(auth()->user()->role === 'admin')
                        <div class="col-12">
                            <div class="card bg-warning bg-opacity-10 border-warning">
                                <div class="card-body text-center">
                                    <i class="fas fa-crown fa-3x text-warning mb-3"></i>
                                    <h5>Administration</h5>
                                    <p class="text-muted">Accéder à l'interface d'administration</p>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-warning">
                                        <i class="fas fa-cogs me-2"></i>Interface Admin
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="text-center mt-4">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>Se déconnecter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-1px);
    }

    .bg-primary {
        background: linear-gradient(135deg, #77ACDC, #5a9bd4) !important;
    }
</style>
@endsection
