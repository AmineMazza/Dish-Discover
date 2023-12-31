@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Ajouter Offre</title>

<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >   
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Ajouter un Offre</h5>
                    </div>
                    <div class="card-body">

                    {{-- @if (section('statuts'))
                         <div class="alert sucess">
                            {{section('statuts')}}
                         </div>      
                    @endif --}}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li  class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('offre.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">titre</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>                             
                            <input type="file" class="form-control" id="image" name="image" />
                            {{-- <input type="file" class="form-control" name="images[]" id="images" accept="image/*" multiple required> --}}
                          </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                    </div>
                </div>
                <a href="{{ route('offres.index') }}">Retour à la Liste des Offres</a>

            </div>
        </div>
    </div>
</div>