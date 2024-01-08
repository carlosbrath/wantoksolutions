<!-- START CTA -->
<section class="section bg-cta">
    <div class="bg-overlay-2"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- <p class="cta-desc text-white text-center mb-0">We Take Care of Your Technology</p> -->
                <h1 class="text-white text-center">Checkout</h1>

            </div>
        </div>
    </div>
</section>
<!-- END CTA -->
<section class="section bg-dark" id="#order-standard_cart">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center section-header">
                    <span class="text-shadow">Chose Domain</span>
                    <h4 class="title-heading text-uppercase">Domain You Want</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row  mt-4">
        <div class="col-md-3 cart-sidebar">
            <div class="panel-heading card-header">
                <h5 class="panel-title">
                    <img src="<?= asset_url() ?>images/icon/cart.png" alt="">
                    Categories
                    <img src="<?= asset_url() ?>images/icon/up-arrow.png" class="card-minimise panel-minimise pull-right float-right" alt="">
                </h5>

            </div>
            <div class="list-group collapsable-card-body">
                <a href="" class="list-group-item list-group-item-action">Shared Hosting</a>
            </div>
            <div class="panel-heading card-header">
                <h5 class="panel-title">
                    <i class="fas fa-plus"></i>
                    Actions
                    <i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
                </h5>

            </div>
            <div class="list-group collapsable-card-body">

                <a href="" class="list-group-item list-group-item-action">
                <i class="fas fa-globe fa-fw"></i>
                Register a New Domain</a>
            </div>
            <div class="list-group collapsable-card-body">

                <a href="" class="list-group-item list-group-item-action">
                <i class="fas fa-share fa-fw"></i>
                Transfer in Domain</a>
            </div>
            <div class="list-group collapsable-card-body">

                <a href="" class="list-group-item bg-active list-group-item-action">
                <i class="fas fa-shopping-cart fa-fw"></i>
                View Cart</a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="font-size-36">Review & Checkout</div>
            <form action="" onsubmit="validateForm(event, this, 1)">
                <div class="view-cart-items-header">
                    <div class="row">
                        <div class="col-sm-7 col-xs-7 col-7">
                            Product/Options
                        </div>
                        <div class="col-sm-4 col-xs-5 col-5 text-right">
                            Price/Cycle
                        </div>
                    </div>
                </div>
                <div class="view-cart-items">

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-7">
                                <span class="item-title">
                                    BUSINESS
                                    <a href="/whmcs/cart.php?a=confproduct&amp;i=0" class="btn btn-link btn-xs">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <span class="visible-xs-inline d-inline d-sm-none">
                                        <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('p','0')">
                                            <i class="fas fa-times"></i>
                                            Remove
                                        </button>
                                    </span>
                                </span>
                                <span class="item-group">
                                    Shared Hosting
                                </span>
                                <span class="item-domain">
                                    raossl.com
                                </span>
                            </div>
                            <div class="col-sm-4 item-price">
                                <span>$0.00 USD</span>
                                <span class="cycle">Free</span>
                            </div>
                            <div class="col-sm-1 hidden-xs d-none d-sm-block">
                                <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('p','0')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="row">
                            <div class="col-sm-7">
                                <span class="item-title">
                                    Domain Registration <a href="/whmcs/cart.php?a=confdomains" class="btn btn-link btn-xs">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <span class="visible-xs-inline d-inline d-sm-none">
                                        <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('d','0')">
                                            <i class="fas fa-times"></i>
                                            Remove
                                        </button>
                                    </span>
                                </span>
                                <span class="item-domain">
                                    raossl.com
                                </span>
                            </div>
                            <div class="col-sm-4 item-price">
                                <span name="raossl.comPrice">$14.95 USD</span>
                                <span class="cycle">1 Year</span>
                                <span class="renewal cycle">
                                    Renewal <span class="renewal-price cycle">$14.95/1yr</span>
                                </span>
                            </div>
                            <div class="col-sm-1 hidden-xs d-none d-sm-block">
                                <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('d','0')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="empty-cart">
                    <button type="button" class="btn btn-link btn-xs" id="btnEmptyCart">
                        <i class="fas fa-trash-alt"></i>
                        <span>Empty Cart</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="order-summary" id="orderSummary">
                <div class="loader w-hidden" id="orderSummaryLoader">
                    <i class="fas fa-fw fa-sync fa-spin"></i>
                </div>
                <h2 class="font-size-30">Order Summary</h2>
                <div class="summary-container">

                    <div class="subtotal clearfix">
                        <span class="pull-left float-left">Subtotal</span>
                        <span id="subtotal" class="pull-right float-right">$14.95 USD</span>
                    </div>
                    <div class="recurring-totals clearfix">
                        <span class="pull-left float-left">Totals</span>
                        <span id="recurring" class="pull-right float-right recurring-charges">
                            <span id="recurringMonthly" style="display:none;">
                                <span class="cost"></span> Monthly<br>
                            </span>
                            <span id="recurringQuarterly" style="display:none;">
                                <span class="cost"></span> Quarterly<br>
                            </span>
                            <span id="recurringSemiAnnually" style="display:none;">
                                <span class="cost"></span> Semi-Annually<br>
                            </span>
                            <span id="recurringAnnually">
                                <span class="cost">$14.95 USD</span> Annually<br>
                            </span>
                            <span id="recurringBiennially" style="display:none;">
                                <span class="cost"></span> Biennially<br>
                            </span>
                            <span id="recurringTriennially" style="display:none;">
                                <span class="cost"></span> Triennially<br>
                            </span>
                        </span>
                    </div>

                    <div class="total-due-today total-due-today-padded">
                        <span id="totalDueToday" class="amt">$14.95 USD</span>
                        <span>Total Due Today</span>
                    </div>

                    <div class="express-checkout-buttons">
                    </div>

                    <div class="text-right">
                        <a href="/whmcs/cart.php?a=checkout&amp;e=false" class="btn btn-success btn-lg btn-checkout" id="checkout">
                            Checkout
                            <i class="fas fa-arrow-right"></i>
                        </a><br>
                        <a href="/whmcs/cart.php" class="btn btn-link btn-continue-shopping" id="continueShopping">
                            Continue Shopping
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>