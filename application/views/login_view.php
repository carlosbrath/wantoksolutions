<!-- Login -->
<section class="section bg-home" id="home">
            <div class="bg-overlay"></div>
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="form-section bg-dark">
                                    <div class="section-header text-center">
                                        <!-- <span class="text-shadow">Lets Start</span> -->
                                        <!-- Whmcs login url https://wantoksolutions.com.pg/whmcs/dologin.php -->
                                        <h4 class="title-heading text-uppercase">Login</h4>
                                    </div>
                                    <div class=" mt-5">
                                        
                                        <form method="post" action="<?= base_url();?>login">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="info@wantoksolutions.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                                            </div>
                                            <div class="form-group text-right">
                                                <label for="">forgot password?</label>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-login">Login</button>
                                            </div>
                                            <div class="text-center">
                                                <a href="<?=base_url('signup')?>" class="btn btn-secondary mt-2">Signup</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- End Login -->