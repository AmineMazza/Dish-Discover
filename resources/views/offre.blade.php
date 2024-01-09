@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Offres</title>

<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >               

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Offres / </span>Tous les Offres</h4>
                    <!-- Basic Bootstrap Table -->

                    @if(session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                     @endif
                
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                      <h5 class="card-header">Offres                     
                        <a href="offre/create" class="btn btn-danger">Ajouter</a>
                      </h5>
                      <div class="table-responsive text-nowrap">
                        <table class="table">
                          <thead>
                            <tr>
                              {{-- <th>Id</th> --}}
                              <th>Image</th>
                              <th>Titre</th>
                              <th>Description</th>
                              <th>prix</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($offres as $offre)
                                    <tr>
                                      {{-- <td>{{$offre->id}}</td> --}}
                                        <td>
                                          {{-- {{$offre->image}} --}}
                                          {{-- <img src="{{ asset('img/offres/' . $offre->image) }}" alt="{{ $offre->title }}" style="max-width: 100px; max-height: 100px;"> --}}
                                          <img src="{{ asset('storage/' . $offre->image) }}" alt="image" style="width: 180px; height: 130px; border-radius: 5%;">
                                        </td>
                                        <td>{{Str::limit($offre->title,20)}}</td>
                                        <td>{{Str::limit($offre->description,50)}}</td>
                                        {{-- <td>{{ optional($offre->category)->titre }}</td> --}}
                                        <td>{{$offre->prix}} Dh</td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                            {{-- <a class="dropdown-item" href="{{ route('offre.show', $offre->id) }}"> <i class='bx bx-show-alt'></i> Voir</a>
                                            <a class="dropdown-item" href="{{ route('offre.edit', $offre->id) }}"> <i class="bx bx-edit-alt me-1"></i> Modifier</a>
                                            <a class="dropdown-item" href="{{ route('offre.delete', $offre->id) }}"> <i class="bx bx-trash me-1"></i> Supprimer</a>--}} 
                                        </div>
                                        </div>
                                    </td>
                                    </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                </div>
        </div>
    </div>    
</div>

