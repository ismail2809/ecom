 <br>
 <!-- Start Products Area -->
        <section class="products-area pb-40">
            <div class="container">
                <div class="section-title">
                    <h2>Catalogue</h2>
                </div>

                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img12.jpg" alt="image"></a>
    
                                <div class="sale">Sale</div>
        
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Commander</span>
                                                </a>
                                            </div>
                                        </li> 
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-toggle="modal" data-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Voir</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="#">Blood Pressure Monitor</a></h3>
                                <div class="price">
                                    <span class="old-price">$165.00</span>
                                    <span class="new-price">$159.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach       
                </div>
            </div>
        </section>
        <!-- End Products Area -->
