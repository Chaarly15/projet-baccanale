@extends('layouts.admin')

@section('title', 'Mon Profil')

@section('content')
<div class="admin-card shadow-lg">
    <div class="card-header-admin bg-gradient-primary text-white">
        <h1 class="card-title-admin mb-0">
            <i class="fas fa-user-circle me-2"></i>
            Mon Profil
        </h1>
    </div>

    <div class="card-body p-4">
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="mb-4 position-relative">
                    <div class="profile-avatar bg-gradient-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg" style="width: 120px; height: 120px; font-size: 2.5rem; font-weight: 700;">
                        {{ $user->initials() }}
                    </div>
                    <div class="avatar-status position-absolute bottom-0 end-0">
                        @if($user->email_verified_at)
                            <i class="fas fa-check-circle text-success bg-white rounded-circle p-1" style="font-size: 1.2rem;"></i>
                        @else
                            <i class="fas fa-exclamation-triangle text-warning bg-white rounded-circle p-1" style="font-size: 1.2rem;"></i>
                        @endif
                    </div>
                </div>
                <h4 class="fw-bold text-dark mb-2">{{ $user->name }}</h4>
                <span class="badge bg-primary fs-6 px-3 py-2">{{ ucfirst($user->role) }}</span>
            </div>

            <div class="col-md-8">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-user text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Nom complet</label>
                            </div>
                            <p class="mb-0 fw-semibold text-dark">{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Adresse email</label>
                            </div>
                            <p class="mb-0 fw-semibold text-dark">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-user-tag text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Rôle</label>
                            </div>
                            <p class="mb-0 fw-semibold text-dark">{{ ucfirst($user->role) }}</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-plus text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Date d'inscription</label>
                            </div>
                            <p class="mb-0 fw-semibold text-dark">{{ $user->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Dernière connexion</label>
                            </div>
                            <p class="mb-0 fw-semibold text-dark">
                                @if($user->last_login_at)
                                    {{ $user->last_login_at->format('d/m/Y H:i') }}
                                @else
                                    Jamais
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="info-card p-3 rounded-3 border">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-shield-alt text-primary me-2"></i>
                                <label class="form-label fw-bold mb-0 text-muted">Statut email</label>
                            </div>
                            <p class="mb-0 fw-semibold">
                                @if($user->email_verified_at)
                                    <span class="text-success">
                                        <i class="fas fa-check-circle me-1"></i>
                                        Vérifié
                                    </span>
                                @else
                                    <span class="text-warning">
                                        <i class="fas fa-exclamation-triangle me-1"></i>
                                        Non vérifié
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <a href="{{ route('settings.profile') }}" class="btn btn-primary-admin btn-lg px-4 py-2 shadow">
                <i class="fas fa-edit me-2"></i>
                Modifier mon profil
            </a>
        </div>
    </div>
</div>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, var(--baccanale-blue) 0%, var(--baccanale-dark-blue) 100%);
}

.profile-avatar {
    transition: transform 0.3s ease;
}

.profile-avatar:hover {
    transform: scale(1.05);
}

.info-card {
    background: #f8fafc;
    transition: all 0.3s ease;
    border-color: #e2e8f0 !important;
}

.info-card:hover {
    background: white;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.avatar-status {
    transform: translate(10px, -10px);
}
</style>
@endsection
