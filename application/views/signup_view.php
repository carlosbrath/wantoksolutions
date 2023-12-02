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

                                <h4 class="title-heading text-uppercase">Sign Up</h4>
                            </div>
                            <div class=" mt-5">
                                <form method="post" action="<?= base_url(); ?>signup">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="info@wantoksolutions.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_contact">Phone No</label>
                                        <input type="tel" class="form-control" id="user_contact" name="user_contact" placeholder="+1 xxx xxxx xx">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-login">Signup</button>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?=base_url('login')?>" class="btn btn-secondary mt-2">Login</a>
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