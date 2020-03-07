
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 09:53:18 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome//assets/css/font-awesome.css" rel="stylesheet">

    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <p>Login in. To see it in action.</p>
        <div class="content">
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>
</div>

<?php echo $__env->make('admin.login.loginFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Mainly scripts -->
<script src="/assets/js/jquery-3.1.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>

</body>
</html>
<?php /**PATH E:\project\laravel-login\resources\views/admin/login/defaultLayout.blade.php ENDPATH**/ ?>