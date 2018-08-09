<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lms.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <title>LMS</title>
</head>
<body>
<?php echo $__env->yieldContent('header'); ?>
<?php echo $__env->yieldContent('home'); ?>
<?php echo $__env->yieldContent('booksearch'); ?>
<?php echo $__env->yieldContent('booklist'); ?>
<!-- <?php echo $__env->yieldContent('about'); ?> -->
<!-- <?php echo $__env->yieldContent('contact'); ?> -->
<?php echo $__env->yieldContent('footer'); ?>
<script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>