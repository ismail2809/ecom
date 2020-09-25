<!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="drodo-responsive-nav">
                <div class="container">
                    <div class="drodo-responsive-menu">
                        <div class="logo">
                            <a href="index-3.html">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drodo-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-3.html">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">Home </a> 
                                </li>

                                <li class="nav-item megamenu"><a href="#" class="nav-link">Produit <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">Produit</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="{{ url('/new/product') }}">Ajouter </a></li>

                                                            <li><a href="{{ url('products') }}l">Liste</a></li> 
                                                        </ul>
                                                    </div> 
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
 

                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option"> 

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="#" data-toggle="modal" data-target="#shoppingCartModal"><i class='bx bx-shopping-bag'></i><span>3</span></a>
                                    </div>
                                </div>
 
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->