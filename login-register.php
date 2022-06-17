<?php include('header.php')  ?>




        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">Connexion - Inscription </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ms-auto me-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4> Connexion </h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4> Inscription </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="Pseudo">
                                                <input type="password" name="user-password" placeholder="Mot de passe">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Se souvenir de moi</label>
                                                        <a href="#">Mot de passe Oublié ?</a>
                                                    </div>
                                                    <button type="submit">SE CONNECTER</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="PSeudo">
                                                <input type="text" name="user-name" placeholder="225XXXXXXXXXX">
                                                <input name="user-email" placeholder="Email" type="email">
                                                <input type="password" name="user-password" placeholder="Mot de passe">
                                                <div class="button-box">
                                                    <button type="submit">S'ENREGISTRER</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






<?php include('footer.php') ?>