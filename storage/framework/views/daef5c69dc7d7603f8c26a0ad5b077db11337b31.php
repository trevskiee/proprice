<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo e(asset('assets/pngwing.com(1).png')); ?>" type="image/x-icon">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


        <style>
            #carousel {
                -ms-overflow-style: none; /* for Internet Explorer, Edge */
                scrollbar-width: none; /* for Firefox */
                overflow-y: scroll;
            }

            #carousel::-webkit-scrollbar {
                display: none; /* for Chrome, Safari, and Opera */
            }
            .description ul
            { list-style-position: inside !important;

              padding-left: 20px;

            }
            .description li{
                list-style: disc !important;
                list-style-position: inside;
            }
            .description table tbody tr td{
                border: 2px solid black;
                padding: 10px;

            }

        </style>


    </head>
    <body class="bg-body">

        <div id="app">
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        
        <script src="<?php echo e(mix('js/app.js')); ?>"></script>

        
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/layouts/app.blade.php ENDPATH**/ ?>