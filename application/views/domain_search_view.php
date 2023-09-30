<!--  Search Section  -->
<section class="section bg-dark" id="search-domain">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 subcribe-form mt-5">
                <form action="<?= base_url(); ?>search-domain" method="post">
                    <input type="text" name="query" id="query" placeholder="Find Your Perfect Domain" value="<?=isset($domain_name)?$domain_name:''?>">
                    <button type="submit" class="btn btn-custom">Search Domain</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Search Section -->
<!--  Domian Section  -->
<section class="section bg-dark" id="avaible-domain">
    <div class="container">
        <div class="col-12">
            <div class="domain bg-dark mt-4 p-5">
                <div class="row">
                    <div class="text-center col-8">
                        <p>Your Domain is Avaible</p>
                        <h1><?=isset($domain_name)?$domain_name:''?><span>.com<span></h1>
                        <h3><span class="line-through">$4999 </span><span> $999<span></h3>
                        <a href="#" class="btn btn-custom btn-footer">Let's Buy</a>
                    </div>
                    <div class="text-left col-4">
                        <p>Service range include technical skills, Design, business understanding</p>
                        <ul class="list-bulets text-light">
                            <li>24/7 customer suport</li>
                            <li>Fast and secure worldwide</li>
                            <li>Partner on long run</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Domian Section -->
<section class="section bg-dark" id="domain-tld-list">
    <div class="container">
        <?php
        if(isset($pricing)){
            foreach ($pricing as $key => $price) {
                ?>
                <div class="col-12">
            <div class="domain bg-dark mt-4 p-5">
                <div class="row">
                    <div class=" col-8">
                        <h1><?=isset($domain_name)?$domain_name:''?><span>.<?=$key?><span></h1>
                    </div>
                    <div class="col-2">
                        <h5><span class="line-through"><?=$price['register'][1] + 1000 ?></span><span> <?=$price['register'][1] ?><span></h5>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-custom btn-footer">Add to</a>
                    </div>
                </div>
            </div>
        </div>
                <?php
            }
        } 
        ?>
        
        <div class="col-12">
            <div class="domain bg-dark mt-4 p-5">
                <div class="row">
                    <div class=" col-8">
                        <h1>radosol<span>.net<span></h1>
                    </div>
                    <div class="col-2">
                        <h5><span class="line-through">$4999 </span><span> $999<span></h5>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-custom btn-footer">Add to</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Domian Section -->