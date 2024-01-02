<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | wantoksolutions</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="MyraStudio" />

    <link rel="shortcut icon" href="<?= asset_url(); ?>images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= asset_url(); ?>css/bootstrap.min.css" type="text/css">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url(); ?>css/magnific-popup.css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url(); ?>css/materialdesignicons.min.css" />

    <!--Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url(); ?>css/font-awesome.min.css" />

    <!--Slider-->
    <link rel="stylesheet" href="<?= asset_url(); ?>css/owl.carousel.css" />
    <link rel="stylesheet" href="<?= asset_url(); ?>css/owl.theme.css" />
    <link rel="stylesheet" href="<?= asset_url(); ?>css/owl.transitions.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url(); ?>css/style.css" />
</head>

<body>
    <!-- Header -->
    <?php $this->load->view('header_view'); ?>
    <!-- Header End -->
    <!-- Home -->
    <?= $content; ?>
    <!-- Home End -->
    <!-- Footer -->
    <?php $this->load->view('footer_view'); ?>
    <!-- Foote End -->

    <!-- JAVASCRIPTS -->
    <script src="<?= asset_url(); ?>js/jquery.min.js"></script>
    <!-- SCROLL -->
    <script src="<?= asset_url(); ?>js/scrollspy.min.js"></script>
    <!-- SCROLL -->
    <script src="<?= asset_url(); ?>js/feather.min.js"></script>
    <!--  -->
    <!-- bootstrap -->
    <script src="<?= asset_url(); ?>js/bootstrap.bundle.min.js"></script>
    <!-- easing -->
    <script src="<?= asset_url(); ?>js/jquery.easing.min.js"></script>
    <!-- Portfolio -->
    <script src="<?= asset_url(); ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= asset_url(); ?>js/isotope.js"></script>
    <!-- scroll -->
    <script src="<?= asset_url(); ?>js/scrollspy.min.js"></script>
    <!-- Counter -->
    <script src="<?= asset_url(); ?>js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= asset_url(); ?>js/owl.carousel.min.js"></script>
    <!-- Custom -->
    <script src="<?= asset_url(); ?>js/app.js"></script>
    <script>
        function ajaxfunction(method, url, formData, callback) {
            console.log(url)
            $.ajax({
                method: method,
                url: url,
                data: formData,
                dataType: 'jason',
                beforeSend: function() {
                    // $("#loaderWrapper").show();
                },
                complete: function() {
                    // $("#loaderWrapper").hide();
                },
                success: function(data) {
                    let response = JSON.parse(data);
                    if (response.msg == 'success') {

                        $('.domain-section').append(response.html);
                    }
                    if (typeof callback === 'function') {
                        callback(response); // Pass the response to the callback function
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $('#result').html('Error occurred while submitting the form.');
                }
            });
        }
        

        function handleResponse(response) {
            // Handle the response data here
            console.log(response);
        }
    </script>

</body>
</body>

</html>