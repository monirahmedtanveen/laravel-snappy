<?php

return array(


    'pdf' => array(
        'enabled' => true,
        /** FOR WINDOWS USER */
        'binary'  => 'C:\wkhtmltopdf\wkhtmltopdf.exe',
        /** FOR LINUX USER */
        // 'binary'  => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
        'timeout' => false,
        'options' => array(
            'encoding' => 'UTF-8',
            'footer-center' => 'Page [page] of [toPage]',
            'footer-font-size' => 7,
        ),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        /** FOR WINDOWS USER */
        'binary'  => 'C:\wkhtmltopdf\wkhtmltoimage.exe',
        /** FOR LINUX USER */
        // 'binary'  => base_path('vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
