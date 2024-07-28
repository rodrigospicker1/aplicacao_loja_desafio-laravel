<x-html.html>

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <div class="">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link" href="#">Features</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid my-3 py-3">
                    <div class="row mb-5">
                        <div class="col-lg-12 mt-lg-0 mt-4">

                            <div class="card mt-4" id="basic-info">
                                <div class="card-header">
                                    <h5>Basic Info</h5>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <div class="input-group">
                                                <input id="firstName" name="firstName" class="form-control"
                                                    type="text" placeholder="Alec" required="required"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <div class="input-group">
                                                <input id="lastName" name="lastName" class="form-control"
                                                    type="text" placeholder="Thompson" required="required"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label mt-4">Email</label>
                                            <div class="input-group">
                                                <input id="email" name="email" class="form-control"
                                                    type="email" placeholder="example@email.com"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mt-4">Confirmation Email</label>
                                            <div class="input-group">
                                                <input id="confirmation" name="confirmation" class="form-control"
                                                    type="email" placeholder="example@email.com"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label mt-4">Your location</label>
                                            <div class="input-group">
                                                <input id="location" name="location" class="form-control"
                                                    type="text" placeholder="Sydney, A" onfocus="focused(this)"
                                                    onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mt-4">Phone Number</label>
                                            <div class="input-group">
                                                <input id="phone" name="phone" class="form-control"
                                                    type="number" placeholder="+40 735 631 620"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
