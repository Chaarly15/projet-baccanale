@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Bienvenue, {{ Auth::user()->name }} !</h2>
                <p class="text-muted mb-0">Voici un aperçu de votre site BACCANALE</p>
            </div>
            <div class="text-end">
                <small class="text-muted">Dernière connexion : {{ now()->format('d/m/Y à H:i') }}</small>
            </div>
        </div>
    </div>
</div>

<!-- === MÉTRIQUES PRINCIPALES === -->
<!-- Statistiques principales -->
<div class="row mb-4">
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="admin-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                            <i class="fas fa-box text-primary fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="mb-1">{{ $stats['products'] }}</h3>
                        <p class="text-muted mb-0">Produits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-3">
        <div class="admin-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 rounded-3 p-3">
                            <i class="fas fa-tags text-success fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="mb-1">{{ $stats['categories'] }}</h3>
                        <p class="text-muted mb-0">Catégories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-3">
        <div class="admin-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-info bg-opacity-10 rounded-3 p-3">
                            <i class="fas fa-file-alt text-info fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="mb-1">{{ $stats['pages'] }}</h3>
                        <p class="text-muted mb-0">Pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-3">
        <div class="admin-card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-warning bg-opacity-10 rounded-3 p-3">
                            <i class="fas fa-envelope text-warning fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="mb-1">{{ $stats['contacts'] }}</h3>
                        <p class="text-muted mb-0">Messages</p>
                        @if($stats['recent_contacts'] > 0)
                            <small class="text-success">
                                <i class="fas fa-arrow-up"></i>
                                {{ $stats['recent_contacts'] }} cette semaine
                            </small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- === ACTIONS RAPIDES === -->
<!-- Actions rapides -->
<div class="row mb-4">
    <div class="col-12">
        <div class="admin-card">
            <div class="card-header-admin">
                <h5 class="card-title-admin">Actions rapides</h5>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-admin w-100 py-3">
                            <i class="fas fa-plus mb-2 d-block"></i>
                            Nouveau produit
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-file-plus mb-2 d-block"></i>
                            Nouvelle page
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-tag mb-2 d-block"></i>
                            Nouvelle catégorie
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.faqs.create') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-question mb-2 d-block"></i>
                            Nouvelle FAQ
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.documents.create') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-upload mb-2 d-block"></i>
                            Nouveau document
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-3">
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-envelope-open mb-2 d-block"></i>
                            Voir messages
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- === ACTIVITÉ RÉCENTE === -->
<!-- Activité récente -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="admin-card">
            <div class="card-header-admin">
                <h5 class="card-title-admin">Derniers produits ajoutés</h5>
                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
            </div>
            <div class="card-body p-0">
                @if($recent['products']->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-admin mb-0">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent['products'] as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                                                <i class="fas fa-box text-primary"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">{{ $product->name }}</h6>
                                                <small class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if($product->category)
                                            <span class="badge bg-secondary">{{ $product->category->name }}</span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->price)
                                            <strong>{{ number_format($product->price, 0, ',', ' ') }} FCFA</strong>
                                        @else
                                            <span class="text-muted">Sur devis</span>
                                        @endif
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-box text-muted fs-1 mb-3"></i>
                        <p class="text-muted">Aucun produit ajouté récemment</p>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-admin">Ajouter un produit</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="admin-card">
            <div class="card-header-admin">
                <h5 class="card-title-admin">Messages récents</h5>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-primary">Voir tout</a>
            </div>
            <div class="card-body">
                @if($recent['contacts']->count() > 0)
                    @foreach($recent['contacts'] as $contact)
                    <div class="d-flex align-items-start mb-3 {{ !$loop->last ? 'border-bottom pb-3' : '' }}">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="fas fa-envelope text-warning"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">{{ $contact->name }}</h6>
                            <p class="text-muted mb-1 small">{{ $contact->email }}</p>
                            <p class="mb-1 small">{{ Str::limit($contact->message, 80) }}</p>
                            <small class="text-muted">{{ $contact->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-envelope text-muted fs-3 mb-2"></i>
                        <p class="text-muted mb-0">Aucun message récent</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- === INFORMATIONS SUPPLÉMENTAIRES === -->
<!-- Statistiques supplémentaires -->
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="admin-card">
            <div class="card-header-admin">
                <h5 class="card-title-admin">Contenu du site</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="border-end">
                            <h4 class="text-primary mb-1">{{ $stats['faqs'] }}</h4>
                            <small class="text-muted">FAQ</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border-end">
                            <h4 class="text-success mb-1">{{ $stats['documents'] }}</h4>
                            <small class="text-muted">Documents</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <h4 class="text-info mb-1">{{ $stats['pages'] }}</h4>
                        <small class="text-muted">Pages</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="admin-card">
            <div class="card-header-admin">
                <h5 class="card-title-admin">Liens utiles</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="{{ url('/') }}" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                        <i class="fas fa-home text-primary me-3"></i>
                        <div>
                            <h6 class="mb-1">Accueil du site</h6>
                            <small class="text-muted">Voir le site public</small>
                        </div>
                        <i class="fas fa-external-link-alt ms-auto text-muted"></i>
                    </a>
                    <a href="{{ route('contact.index') }}" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                        <i class="fas fa-envelope text-success me-3"></i>
                        <div>
                            <h6 class="mb-1">Page contact</h6>
                            <small class="text-muted">Formulaire de contact</small>
                        </div>
                        <i class="fas fa-external-link-alt ms-auto text-muted"></i>
                    </a>
                    <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                        <i class="fas fa-box text-info me-3"></i>
                        <div>
                            <h6 class="mb-1">Catalogue produits</h6>
                            <small class="text-muted">Liste des produits</small>
                        </div>
                        <i class="fas fa-external-link-alt ms-auto text-muted"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection