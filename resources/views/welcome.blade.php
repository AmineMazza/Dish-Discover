@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Dashboard - DishDiscover</title>
    <div class="layout-page">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y"Body - >
                <!-- Body Content -->
                <div class="row ">
                  <div class="col-lg-12 mb-4 order-0">
                      <div class="card">
                      <div class="d-flex align-items-end row">
                          <div class="col-sm-7">
                          <div class="card-body">
                              <h5 class="card-title"> Espace Admin : 
                              <span style="color: rgb(61, 61, 255);">Dish</span>
                              <span style="color: rgb(61, 61, 255);">Discover</span></h5>
                              <p class="mb-4">
                              Pour gérer les demandes<span class="fw-medium"> des </span> gerants des restaurantes
                              </p>
                          </div>
                          </div>
                          <div class="col-sm-5 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                              <img
                              src="../assets/img/logo-DishDiscover/chef-dr-le-menu-restaurant-logo-ou-étiquette-de-la-nourriture-illustration-vecteur-du-service-alimentaire-vec.jpg"
                              height="190"
                              alt="View Badge User"
                              data-app-dark-img="illustrations/man-with-laptop-dark.png"
                              data-app-light-img="logo-DishDiscover/chef-dr-le-menu-restaurant-logo-ou-étiquette-de-la-nourriture-illustration-vecteur-du-service-alimentaire-vec.jpg" />
                          </div>
                          </div>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  {{-- <div class="col-md-6 col-xl-4">
                    <a href="{{ route('demandes.index') }}">
                      <div class="card bg-primary text-white mb-3">
                        <div class="card-header">Demandes</div>
                        <div class="card-body">
                          <h5 class="card-title text-white">Voir tout les demandes</h5>
                          <p class="card-text">
                            <i class='bx bx-chevrons-up'></i>
                          </p>
                        </div>
                      </div>
                    </a>
                  </div> --}}
                
                  <div class="col-md-6 col-xl-6">
                    <a href="{{ route('users.index') }}">
                      <div class="card bg-primary text-white mb-3">
                        <div class="card-header">utilisateurs</div>
                        <div class="card-body">
                          <h5 class="card-title text-white">Voir tout les utilisateurs</h5>
                          <p class="card-text">
                            <i class='bx bx-chevrons-up'></i>
                          </p>
                        </div>
                      </div>
                    </a>
                </div>
                
                 
                <div class="col-md-6 col-xl-6">
                  <a href="{{ route('offres.index') }}">
                    <div class="card bg-primary text-white mb-3">
                      <div class="card-header">Offres</div>
                      <div class="card-body">
                        <h5 class="card-title text-white">Voir tout les offres</h5>
                        <p class="card-text">
                          <i class='bx bx-chevrons-up'></i>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>

                  <div class="col-md-6 col-xl-6">
                      <a href="{{ route('ScrapCommandes.index') }}">
                        <div class="card bg-primary text-white mb-3">
                          <div class="card-header">Commandes extraites</div>
                          <div class="card-body">
                            <h5 class="card-title text-white">Voir tout les Commandes extraites</h5>
                            <p class="card-text">
                              <i class='bx bx-chevrons-up'></i>
                            </p>
                          </div>
                        </div>
                      </a>
                  </div>    
                
                  <div class="col-md-6 col-xl-6">
                    <a href="{{ route('ScrapResto.index') }}">
                      <div class="card bg-primary text-white mb-3">
                        <div class="card-header">Restaurants extraites</div>
                        <div class="card-body">
                          <h5 class="card-title text-white">Voir tout les Restaurants extraites</h5>
                          <p class="card-text">
                            <i class='bx bx-chevrons-up'></i>
                          </p>
                        </div>
                      </div>
                    </a>
                </div>
                  
                  {{-- <div class="col-md-6 col-xl-4">
                      <a href="{{ route('statistiques.index') }}">
                        <div class="card bg-primary text-white mb-3">
                          <div class="card-header">Statistiques</div>
                          <div class="card-body">
                            <h5 class="card-title text-white">Voir tout les statistiques</h5>
                            <p class="card-text">
                              <i class='bx bx-chevrons-up'></i>
                            </p>
                          </div>
                        </div>
                      </a>
                  </div> --}}
                <!-- / Body Content -->
            </div>
        </div> 
    </div> 

   <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
     
