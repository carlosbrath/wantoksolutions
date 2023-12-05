
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dashboard</title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description"
            content="This is an example dashboard created using build-in elements and components.">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <meta name="msapplication-tap-highlight" content="no">
        <link href="<?=asset_url()?>userPortal/assets/main.css" rel="stylesheet">
        <link href="<?=asset_url()?>userPortal/assets/css/style.css" rel="stylesheet">
        <link href="<?=asset_url()?>userPortal/assets/css/progress.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar">
            <div class="app-header header-shadow">
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button"
                            class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="btn-group">
                                <a aria-haspopup="true" aria-expanded="false"
                                    class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="<?=asset_url()?>userPortal/assets/images/avatars/1.png" alt>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a aria-haspopup="true" aria-expanded="false"
                                    class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="<?=asset_url()?>userPortal/assets/images/avatars/2.png" alt>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a aria-haspopup="true" aria-expanded="false"
                                    class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="<?=asset_url()?>userPortal/assets/images/avatars/3.png" alt>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a aria-haspopup="true" aria-expanded="false"
                                    class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="<?=asset_url()?>userPortal/assets/images/avatars/Oval.png" alt>
                                </a>
                            </div>
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Accounts
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span> Inbox</span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span> Book</span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span> Picture</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=base_url('logout')?>"  class="nav-link ">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span> Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main">
                <div class="app-sidebar">
                    <div class="scrollbar-sidebar mt-5">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu side-menue">
                                <li>
                                    <a href>Home Screen</a>
                                </li>
                                <li>
                                    <a href>API Docs</a>
                                </li>
                                <li>
                                    <a href>Manual Upload</a>
                                </li>
                                <li>
                                    <a href>API Keys</a>
                                </li>
                                <li>
                                    <a href>Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title" id="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>Home Screen
                                        <div class="page-title-subheading">Every
                                            large design company whether it’s a
                                            multi-national branding
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions d-flex">
                                    <div class="m-3">
                                        <h5 class="text-danger">Trial</h5>
                                        <p>Plan</p>
                                    </div>
                                    <div class="m-3">
                                        <button class="btn btn-api" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            Upgrade to increase API limits
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div
                                        class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i
                                                class="header-icon lnr-apartment icon-gradient bg-love-kiss">
                                            </i>
                                            Sales Report
                                        </div>
                                        <div class="nav">
                                            <div id="reportrange"
                                                class="date-selector">
                                                <i class="fa fa-calendar"></i>&nbsp;
                                                <span></span> <i
                                                    class="fa fa-caret-down"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div
                                                class="widget-chat-wrapper-outer">
                                                <div
                                                    class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                    <canvas id="canvas"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div
                                        class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i
                                                class="header-icon lnr-apartment icon-gradient bg-love-kiss">
                                            </i>
                                            Sales Report
                                        </div>
                                        <ul class="nav">
                                            <li class="nav-item"><a
                                                    href="javascript:void(0);"
                                                    class="active nav-link">Last</a></li>
                                            <li class="nav-item"><a
                                                    href="javascript:void(0);"
                                                    class="nav-link second-tab-toggle">Current</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content d-flex">
                                            <div
                                                class="progress-circle-outer circle-blue">
                                                <div class="progress-circle "
                                                    id="circle-container-1">
                                                    <div class="inner"> 80%
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="progress-circle-outer circle-red">
                                                <div class="progress-circle"
                                                    id="circle-container-2">
                                                    <div class="inner"> 80%
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="progress-circle-outer circle-green">
                                                <div class="progress-circle"
                                                    id="circle-container-3">
                                                    <div class="inner"> 80%
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-5">
                                            <p>Every large design company
                                                whether it’s a multi-national
                                                branding corporation or a
                                                regular down at heel tatty
                                                magazine publisher needs to fill
                                                holes in the workforce.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive p-3 mt-2"
                                id="api-table">
                                <table
                                    class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><p>Application</p></th>
                                            <th><p>API Key</p></th>
                                            <th><p>Total API Calls</p></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><p>Application 1</p></td>
                                            <td><p>XXXX key #</p></td>
                                            <td><p>345</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>Application 2</p></td>
                                            <td><p>XXXX key #</p></td>
                                            <td><p>498</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>Application 3</p></td>
                                            <td><p>XXXX key #</p></td>
                                            <td><p>125</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- --------------Models Section--------------------------- -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
                <div class="modal-dialog modal-lg feature-pricing">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" class="btn-close" data-dismiss="modal"   aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                     <div class="card-body">
                                         <div>
                                             <h4>Feature Pricing (Liveness)</h4>
                                             <div>
                                                 This is a pricing plan selector for a feature. It will have multiple rows to describe the different plan specs. For example:
                                                 Total transaction price
                                                 XXX transactions per minute
                                                 Liveness
                                             </div>
                                         </div>
                                         <div class="mt-3 text-center">
                                            <button class="btn btn-primary btn-card-footer">Primary Action</button>
                                         </div>
                                     </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                     <div class="card-body">
                                         <div>
                                             <h4>Feature Pricing (Liveness)</h4>
                                             <div>
                                                 This is a pricing plan selector for a feature. It will have multiple rows to describe the different plan specs. For example:
                                                 Total transaction price
                                                 XXX transactions per minute
                                                 Liveness
                                             </div>
                                         </div>
                                         <div class="mt-3 text-center">
                                            <button class="btn btn-primary btn-card-footer">Primary Action</button>
                                         </div>
                                     </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                     <div class="card-body">
                                         <div>
                                             <h4>Feature Pricing (Liveness)</h4>
                                             <div>
                                                 This is a pricing plan selector for a feature. It will have multiple rows to describe the different plan specs. For example:
                                                 Total transaction price
                                                 XXX transactions per minute
                                                 Liveness
                                             </div>
                                         </div>
                                         <div class="mt-3 text-center">
                                            <button class="btn btn-primary btn-card-footer">Primary Action</button>
                                         </div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="custom-text">
                                    There can be multiple features here. This will ultimately match the website pricing design that will come later.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------Models Section--------------------- -->
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?=asset_url()?>userPortal/assets/scripts/progressbar.min.js"></script>
        <script type="text/javascript"src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>userPortal/assets/scripts/main.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>userPortal/assets/scripts/custom.js"></script>
    </body>

</html>
