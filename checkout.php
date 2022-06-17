<?php include('header.php')  ?>


        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Boutique</a>
                        </li>
                        <li class="active">Votre panier</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-115 pb-120">
            <div class="container">
                <h3 class="cart-page-title">COntenue de votre commande</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom de produit</th>
                                            <th>Prix/ Unité</th>
                                            <th>Qte</th>
                                            <th>Sous-total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i <5 ; $i++) {  ?>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                                </td>
                                                <td class="product-name"><a href="#">Simple Black T-Shirt</a></td>
                                                <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                                <td class="product-quantity pro-details-quality">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$110.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon_close"></i></a>
                                                </td>
                                            </tr> 
                                           <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Retour à la boutique</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Actualiser</button>
                                            <a href="#">Vider panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Livraison</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>REnseigner vos coordonnée de livraison</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Pays
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Ville
                                                </label>
                                                 <input type="text" name="ville">
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * COmmune / Quartier
                                                </label>
                                                <input type="text">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Enregister</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Utiliser un coupon</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Entrer le code et valider</p>
                                        <form>
                                            <input type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Reduire</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Total</h4>
                                    </div>
                                    <h5>Total articles <span>$260.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Frais annexe</h5>
                                        <ul>
                                            <li><input type="checkbox"> Livraison <span>$20.00</span></li>
                                            <li><input type="checkbox"> TVA <span>$30.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                    <a href="login-register.php">Passer au paiement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('footer.php') ?>