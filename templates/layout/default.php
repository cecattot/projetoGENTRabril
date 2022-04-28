<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
        rel="stylesheet"
    />
    <!--Datatables-->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"
        rel="stylesheet"
    />
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script
        src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?= $this->Html->css(['style']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?php if (!empty($this->request->getSession()->read('Auth'))) : ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="/users">Index</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/employees/add">Add</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Roles
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="/roles">Index</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/roles/add">Add</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item d-flex justify-content-end">
                    <a class="nav-link" aria-current="page" href="/users/logout"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
<main class="main">

    <div class="container-fluid">
        <?php
        $flash = $this->request->getSession()->read('Flash');
        $this->request->getSession()->delete("Flash");
        if (!empty($flash)) {
            $flash = $flash['flash'][0];
            $mensagem = $flash['message'];
            $tipoMsg = explode('/', $flash['element']);
            echo "
                    <script type='text/javascript'>
                        Swal.fire({
                            icon: '{$tipoMsg[1]}',
                            html: '{$mensagem}',
                            showConfirmButton: false,
                            timer: 5000,
                        });
                    </script>
                    ";
        }
        ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
<footer>
</footer>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
<?= $this->Html->script(['tables']) ?>
</body>
</html>
