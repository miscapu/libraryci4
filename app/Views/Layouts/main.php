<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url( 'assets/css/bootstrap.min.css' )?>">
    <link rel="stylesheet" href="<?= base_url( 'fontAwesome/css/all.min.css' )?>">
    <title><?= isset( $title ) ? esc( $title ) : "Document";   ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= site_url( '/' )?>"><?= isset( $title ) ? esc( $title ) : "Document"; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url( '/' )?>">Home</a>
                </li>
                <?php
                if ( !session()->get( 'isLoggedIn' ) ):
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url( '/register' );?>">Register</a>
                </li>
                <?php
                else:
                    echo "";
                endif;
                ?>

            </ul>
            <?php
            if ( session()->get( 'isLoggedIn' ) ):
                ?>
                <div class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="<?= site_url( '/logout' )?>" class="nav-link" aria-disabled="true">Logout</a>
                        </li>
                    </ul>
                </div>
             <?php
            else:
                echo "";
            endif;
            ?>
        </div>
    </div>
</nav>


<?= $this->renderSection( 'content' ); ?>

</body>
</html>