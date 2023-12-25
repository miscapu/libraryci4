<?=
$this->extend( 'Layouts/main' );

$this->section( 'content' );
?>

    <!-- Dashboard Content -->

    <!-- Grid Bootstrap -->


    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">

                <!-- Title -->
                <h1 class="modal-title text-center py-4"><?= isset( $title ) ? esc( $title ) : ""; ?></h1>
                <!-- Title -->

                <!-- Form HTML -->
                <form method="post">
                    <div class="mb-3">
                        <label for="emailFrm" class="form-label">User Email</label>
                        <input type="email" name="emailFrm" class="form-control" id="emailFrm" value="<?= set_value( 'emailFrm' )?>">
                    </div>
                    <div class="mb-3">
                        <label for="pwdFrm" class="form-label">User Password</label>
                        <input type="password" name="pwdFrm" class="form-control" id="pwdFrm">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- Form HTML End-->

                <!-- Button Add User/Register User -->
                <div class="text-center py-4">
                    <a href="<?= site_url( '/register' );?>" class="btn btn-lg btn-success">Register</a>
                </div>
                <!-- Button Add User/Register User -->


            </div>
            <div class="col">

            </div>

        </div>
    </div>
    <!-- Grid Bootstrap -->



    <!-- Dashboard Content -->


<?=
$this->endSection();