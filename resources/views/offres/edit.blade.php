@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Modifier Produit</title>

<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >   


    <h1>Modifier le Produit {{ $offre->title }}</h1>

    <form action="{{ route('offre.update', $offre->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label" >titre</label>
            <input type="text" class="form-control" value="{{ $offre->title }}" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"  id="description" name="description">{{ $offre->description }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" step="0.01" class="form-control"  value="{{ $offre->prix }}" id="prix" name="prix" required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" />
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        
    </form>
    <a href="{{ route('offres.index') }}">Retour à la Liste des Produits</a>
        </div>
    </div>
</div>


