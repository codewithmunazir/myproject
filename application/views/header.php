<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Software Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            padding-top:70px;
        }

        .page-banner{
            background:#f8f9fa;
            padding:80px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url(); ?>">
            MyCompany
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('website/about'); ?>">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('website/services'); ?>">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('website/contact'); ?>">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>