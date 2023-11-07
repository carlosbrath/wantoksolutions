        <!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
		    <div class="container">
		    	<a class="navbar-brand logo" href="<?=base_url();?>">
                    <img src="<?=asset_url();?>images/wantok-logo.png" alt="logo">
                </a>
			     <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav ml-auto">
			           <li class="nav-item active">
                            <a class="nav-link" href="<?=base_url();?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="<?= base_url('our-services'); ?>">Our Services</a>
                            <a class="dropdown-item" href="<?= base_url('services/web-development'); ?>">Web Development</a>
                            <a class="dropdown-item" href="<?= base_url('services/app-development'); ?>">App Development</a>
                            <a class="dropdown-item" href="<?= base_url('services/social-media'); ?>">Social Media</a>
                            <a class="dropdown-item" href="<?= base_url('services/seo-optimization'); ?>">Seo Otimization</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <a class="dropdown-item" href="<?= base_url('projects/project-list'); ?>">Project List</a>
                            <a class="dropdown-item" href="<?= base_url('projects/gig-qatar'); ?>">Gig Qatar project</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price">Pricing</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('about-us');?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wantoksolutions.com.pg/whmcs/dologin.php">Login</a>
                        </li>
			        </ul>
                    <ul class="navbar-nav ml-auto">
                        
                        <a class="btn btn-header" >Get IN TOUCH</a>
                    </ul>
			    </div>
		    </div>
		</nav>
		<!-- NAVBAR END-->