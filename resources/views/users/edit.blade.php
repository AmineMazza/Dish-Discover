@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Modifier utilisateur</title>

<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >   


    <h1>Modifier l'utilisateur {{ $user->name }}</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label" >Le nom</label>
            <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label" >L'address</label>
            <input type="text" class="form-control" value="{{ $user->address }}" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label" >Tel</label>
            <input type="tel" class="form-control" value="{{ $user->tel }}" id="tel" name="tel" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label" >Ville</label>
            <input type="text" class="form-control" value="{{ $user->city }}" id="city" name="city" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" >Email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" required>
        </div>
        {{-- <div class="mb-3">
            <label for="role" class="form-label" >role</label>
            <input type="role" class="form-control" value="{{ $user->role }}" id="role" name="role" required>
        </div> --}}
        @if ($user->role === "gerant")
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" required  class="form-select" id="role" aria-label="Default select example">
                    <option value="{{ $user->role}}">{{ $user->role }}</option>
                    <option value="user">user</option>
            </select>
        </div>
        @endif
        @if ($user->role === "user")
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" required  class="form-select" id="role" aria-label="Default select example">
                    <option value="{{ $user->role }}">{{ $user->role }}</option>
                    <option value="gerant">gerant</option>
            </select>
        </div>
        @endif


        @if ($user->statut === "confirmé")
        <div class="mb-3">
            <label for="statut" class="form-label">statut</label>
            <select name="statut" required  class="form-select" id="statut" aria-label="Default select example">
                    <option value="{{ $user->statut }}">{{ $user->statut }}</option>
                    <option value="en attente">en attente</option>
            </select>
        </div>
        @endif
        @if ($user->statut === "en attente")
        <div class="mb-3">
            <label for="statut" class="form-label">statut</label>
            <select name="statut" required  class="form-select" id="statut" aria-label="Default select example">
                    <option value="{{ $user->statut }}">{{ $user->statut }}</option>
                    <option value="confirmé">confirmé</option>
            </select>
        </div>
        @endif

          {{-- <div class="mb-3">
            <label for="statut" class="form-label">statut</label>
            <select name="statut" required  class="form-select" id="statut" aria-label="Default select example">
                    <option value="{{ $user->id }}">{{ $user->statut }}</option>
                    <option value="en attent"></option>
            </select>
          </div> --}}
        


        <button type="submit" class="btn btn-primary">Modifier</button>
        
    </form>
    <a href="{{ route('users.index') }}">Retour à la Liste des utilisateurs</a>
        </div>
    </div>
</div>


