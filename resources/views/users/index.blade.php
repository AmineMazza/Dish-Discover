@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>utilisateurs</title>


<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">utilisateurs / </span>Tous les utilisateurs - gérants restaurants</h4>
  
                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">utilisateurs</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nom</th>
                          <th>ville</th>
                          <th>Tel</th>
                          <th>email</th>
                          <th>role</th>
                          <th>Statut</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                                <tr>
                                <td>{{$user->id}}</td>
                                <td>{{Str::limit($user->name)}}</td>
                                <td> {{$user->city}}</td>
                                <td> {{$user->tel}}</td>
                                <td> {{$user->email}}</td>
                                
                              @if ($user->role === "gerant")
                                <td><span class="badge bg-label-success me-1"> {{$user->role}}</span></td>
                              @elseif ($user->role === "user")
                                <td><span class="badge bg-label-primary me-1"> {{$user->role}}</span></td>
                              @elseif ($user->role === "user inactive")
                                <td><span class="badge bg-label-danger me-1"> {{$user->role}}</span></td>
                              @endif

                              @if ($user->statut === "confirmé")
                              <td><span class="badge bg-label-success me-1">{{$user->statut}}</span></td>
                              @elseif ($user->statut === "en attente")
                                <td><span class="badge bg-label-primary me-1">{{$user->statut}}</span></td>
                              @elseif ($user->statut === "Annulé")
                                <td><span class="badge bg-label-danger me-1">{{$user->statut}}</span></td>
                              @endif

                                  <td>
                                    <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                        @endforeach 
                      </tbody>
                    </table>
                    {{ $users->links() }}
                  </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>    
</div>

