@include('ElementsFix.Sidebar')
@include('ElementsFix.Navbar')

<title>Les restaurantes Extraites</title>

<div class="layout-page"> 
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y"Body - >
            
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Restaurantes Extraites / </span>Tous les restaurantes extraites </h4>
      
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                      <h5 class="card-header">Les restaurantes Extraites</h5>
                      <div class="table-responsive text-nowrap">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>storeName</th>
                              {{-- <th>address</th> --}}
                              <th>category</th>
                              <th>ratingText</th>
                              <th>stars</th>
                              {{-- <th>Reviews</th> --}}
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            @foreach ($ScrapRestos as $ScrapResto)
                                    <tr>
                                        <td>{{$ScrapResto->id}}</td>
                                        <td>{{$ScrapResto->storeName}}</td>
                                        {{-- <td>{{$ScrapResto->address}}</td> --}}
                                        <td>{{$ScrapResto->category}}</td>
                                        <td>{{$ScrapResto->ratingText}}</td>
                                        <td>{{$ScrapResto->stars}}</td>
                                        {{-- <td>{{$ScrapResto->numberOfReviews}}</td> --}}
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                        </div>
                                    </td>
                                    </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{ $ScrapRestos->links() }}
                      </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                </div>
        </div>
    </div>    
</div>