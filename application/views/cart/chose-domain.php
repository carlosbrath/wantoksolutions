<!-- START CTA -->
<section class="section bg-cta">
    <div class="bg-overlay-2"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- <p class="cta-desc text-white text-center mb-0">We Take Care of Your Technology</p> -->
                <h1 class="text-white text-center">Get In Touch</h1>

            </div>
        </div>
    </div>
</section>
<!-- END CTA -->
<section class="section bg-dark" id="services-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center section-header">
                    <span class="text-shadow">your websites</span>
                    <h4 class="title-heading text-uppercase">web development</h4>
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

            </div>
            <div class="col-md-9">
                <label for="">Registerd New Domain</label>
                <form action="" onsubmit="validateForm(event, this, 1)">
                    <div class="col-sm-10 mt-4 col-sm-offset-1 offset-sm-1">
                        <div class="row domains-row">
                            <div class="col-xs-7 col-7">
                                <div class="input-group">
                                    <div class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">www.</span>
                                    </div>
                                    <input type="text" id="domainName" name="domainName" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-3 col-3">
                                <select id="domainType" name="domainType" class="form-control">
                                    <option value=".com">com</option>
                                    <option value=".net">net</option>
                                    <option value=".org">org</option>
                                    <option value=".biz">biz</option>
                                    <option value=".info">info</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Check
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="offset-4 col-4 ">
                <div class="text-center">
                    <div class="domain-section" id="domain-section">

                    </div>
                    <div class="btn-continue" id="btn-continue" style="display: none;">
                        <button id="btnDomainContinue " type="submit" class="btn btn-primary btn-lg w-hidden mt-4" style="display: inline-block;">
                            Continue
                            &nbsp;<i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    function validateForm(event, form, id) {
        event.preventDefault();
        var inputs = form.querySelectorAll('input');
        var formData = $(form).serialize();

        ajaxfunction('POST', '<?= base_url() ?>CartController/check_domain', $(form).serialize(), handleResponse);
    }
</script>