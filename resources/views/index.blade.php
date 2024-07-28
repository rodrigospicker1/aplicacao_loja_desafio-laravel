<x-html.html>
    <body class="g-sidenav-show  bg-gray-100">
      <x-navbar.aside_navbar active="dashboard">
      </x-navbar.aside_navbar>
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbar.navbar_top>
        </x-navbar.navbar_top>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
          <div class="row">
  
            {{-- Greetings --}}
            <div class="col-xl-8 col-sm-6 mb-xl-0 mb-4 bg-">
              <div class="card bg-sec_green">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-2">
                      {{-- <div class="numbers"> --}}
                        {{-- <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                        <h5 class="font-weight-bolder mb-0">
                          $53,000
                          <span class="text-success text-sm font-weight-bolder">+55%</span>
                        </h5> --}}
                        <img src="{{ asset('img/logos/white_long_logo.png') }}" class="w-100">
                      {{-- </div> --}}
                    </div>
                    <div class="col-4 text-end">
                      {{-- <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div> --}}
                      <img src="{{ asset('img/ilustracao/hello_svg.svg') }}" class="w-100">
                    </div>
                    <div class="col-4">
                      <h1>
                        <span class="text-main_green">Olá,</span>
                        <span class="text-white">João</span>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            {{-- Colluns --}}
            <div class="collumn col-xl-4 col-sm-6">
              <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="card bg-black">
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-8">
                        <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">---------</p>
                          <h5 class="font-weight-bolder mb-0">
                            -------
                            <span class="text-success text-sm font-weight-bolder">----</span>
                          </h5>
                        </div>
                      </div>
                      <div class="col-4 text-end">
                        <div class="icon icon-shape bg-main_green shadow text-center border-radius-md">
                          <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 mt-4 col-sm-12 mb-xl-0 mb-4">
                <div class="card bg-black">
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-8">
                        <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">---------</p>
                          <h5 class="font-weight-bolder mb-0">
                            -------
                            <span class="text-success text-sm font-weight-bolder">----</span>
                          </h5>
                        </div>
                      </div>
                      <div class="col-4 text-end">
                        <div class="icon icon-shape bg-main_green shadow text-center border-radius-md">
                          <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="row my-4">
              {{-- TASKS --}}
              <div class="col-lg-3 col-md-6 mb-md-0 mb-4 h-100 ">
                <div class="card h-100 bg-black" style="border-top: 5px solid var(--bs-main_green)">
                  <div class="card-header bg-black pb-0">
                    <div class="row">
                      <div class="col-lg-6 col-7">
                        <h5 class="text-main_green font-weight-bold">Tarefas</h5>
                        <p class="text-sm mb-0">
                          <i class="fa fa-check text-success" aria-hidden="true"></i>
                          <span class="font-weight-bold ms-1">3 concluídas</span> 
                        </p>
                      </div>
                      <div class="col-lg-6 col-5 text-end">
                        <div class="dropdown float-lg-end pe-4">
                          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-plus text-main_green"></i>
                          </a>
                          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2" style="height: 25rem">
                    
                  </div>
                </div>
              </div>
  
              {{-- SESSIONS --}}
              <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                <div class="card bg-black" style="border-top: 5px solid var(--bs-blue)">
                  <div class="card-header pb-0 bg-black">
                    <div class="row">
                      <div class="col-lg-8 col-8">
                        <h5 class="font-weight-bold" style="color: var(--bs-blue)">Próximas sessões</h5>
                      </div>
                      <div class="col-lg-4 col-4 text-end">
                        <div class="dropdown float-lg-end pe-4">
                          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v" style="color: var(--bs-blue)"></i>
                          </a>
                          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2" style="height: 25rem">
                    
                  </div>
                </div>
              </div>
  
              {{-- FINANCE --}}
              <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                <div class="card bg-black" style="border-top: 5px solid var(--bs-red)">
                  <div class="card-header pb-0 bg-black">
                    <div class="row">
                      <div class="col-lg-8 col-8">
                        <h5 class="font-weight-bold" style="color: var(--bs-red)">Relatório financeiro</h5>
                      </div>
                      <div class="col-lg-4 col-4 text-end">
                        <div class="dropdown float-lg-end pe-4">
                          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v" style="color: var(--bs-red)"></i>
                          </a>
                          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2" style="height: 25rem">
                    
                  </div>
                </div>
              </div>
              
              {{-- PENDENCIES --}}
              <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                <div class="card bg-black" style="border-top: 5px solid var(--bs-orange)">
                  <div class="card-header pb-0 bg-black">
                    <div class="row">
                      <div class="col-lg-8 col-8">
                        <h5 class="font-weight-bold" style="color: var(--bs-orange)">Pendências</h5>
                      </div>
                      <div class="col-lg-4 col-4 text-end">
                        <div class="dropdown float-lg-end pe-4">
                          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v" style="color: var(--bs-orange)"></i>
                          </a>
                          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2" style="height: 25rem">
                    
                  </div>
                </div>
              </div>
          </div>
  
          {{-- FOTTER --}}
          <x.html.footer>
          </x.html.footer>
        </div>
      </main>
      <x-html.js>
      </x-html.js>
    </body>
  </x-html.html>
  
  