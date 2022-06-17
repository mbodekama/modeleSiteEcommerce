<?php include('header.php')  ?>


        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">Boutique - Vue global</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-120 pb-120 section-padding-2">
            <div class="container-fluid">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <div class="view-mode nav">
                                    <a class="active" href="#shop-1" data-bs-toggle="tab"><i class="icon-grid"></i></a>
                                    <a href="#shop-2" data-bs-toggle="tab"><i class="icon-menu"></i></a>
                                </div>
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style">
                                    <label>Afficher :</label>
                                    <select>
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Trie par :</label>
                                    <select>
                                        <option value=""> </option>
                                        <option value=""> Article</option>
                                        <option value=""> Prix</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <?php
                        

                        try {

                          $bdd = new PDO("mysql:host=localhost;dbname=ecommerce",'mbodekama','KAMAFREE');  
                        } catch (Exception $e) {
                            echo $e->getMessage();
                            
                        }



                        $requete  = $bdd->prepare('SELECT * FROM produits');
                        $requete->execute();

                        $prods =  $requete->fetchAll();
                         ?>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <?php for ($i=0; $i <count($prods); $i++) 
                                            { 
                                            ?> 
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="detail-product.php">

                                                        <img src="assets/images/product/product-13.jpg" alt="">
                                                    </a>
                                                    <span class="pro-badge left bg-red">-20%</span>
                                                    <div class="product-action-2 tooltip-style-2">
                                                        <button title="Wishlist">
                                                            <i class="icon-heart"></i></button>
                                                       
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <div class="product-rating-wrap">
                                                        <div class="product-rating">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star gray"></i>
                                                        </div>
                                                        <span>(2)</span>
                                                    </div>
                                                    <h3><a href="detail-product.php"><?=$prods[$i]['nom']?></a></h3>
                                                    <div class="product-price-2">
                                                        <span><?=$prods[$i]['prix']?></span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <div class="product-rating-wrap">
                                                        <div class="product-rating">
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star gray"></i>
                                                        </div>
                                                        <span>(2)</span>
                                                    </div>
                                                    <h3><a href="detail-product.php"><?=$prods[$i]['nom']?></a></h3>
                                                    <div class="product-price-2">
                                                        <span><?=$prods[$i]['prix']?></span>
                                                    </div>
                                                    <div class="pro-add-to-cart">
                                                        <button title="Add to Cart">Ajouter au panier</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  } ?>
                                        
                                    </div>
                                </div>
                             
                            </div>
                            <div class="pro-pagination-style text-center mt-10">
                                <ul>
                                    <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                            <div class="sidebar-widget mb-40">
                                <h4 class="sidebar-widget-title">Rechercher </h4>
                                <div class="sidebar-search">
                                    <form class="sidebar-search-form" action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button>
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                                <h4 class="sidebar-widget-title">Categories </h4>
                                <div class="shop-catigory">
                                    <ul>
                                        <li><a href="shop.html">T-Shirt</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                        <li><a href="shop.html">Clothing </a></li>
                                        <li><a href="shop.html">Women </a></li>
                                        <li><a href="shop.html">Baby Boy </a></li>
                                        <li><a href="shop.html">Accessories </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Filtrer par prix </h4>
                                <div class="price-filter">
                                    <span>Entre:  100.00 - 1.300.00  FCFA</span>
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filtrer</button>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Taille </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Couleur </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php include('footer.php') ?>