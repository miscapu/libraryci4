<?=
$this->extend( 'Layouts/main' );

$this->section( 'content' );

/**
 * validations
 * @author MiSCapu
 * @since 24.12.2023
 */
if ( isset( $validation ) ){
    $validation =   \Config\Services::validation();

    if ( $validation->hasError( 'firstnameFrm' ) ){
        $errorFirstName =   $validation->getError( 'firstnameFrm' );
    }

    if ( $validation->hasError( 'lastnameFrm' ) ){
        $errorLastName =   $validation->getError( 'lastnameFrm' );
    }

    if ( $validation->hasError( 'emailFrm' ) ){
        $errorEmail =   $validation->getError( 'emailFrm' );
    }

    if ( $validation->hasError( 'pwdFrm' ) ){
        $errorPassword =   $validation->getError( 'pwdFrm' );
    }

    if ( $validation->hasError( 'cfpwdFrm' ) ){
        $errorConfirmPassword =   $validation->getError( 'cfpwdFrm' );
    }
}
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
                        <label for="firstnameFrm" class="form-label">User FirstName</label>
                        <input type="text" name="firstnameFrm" class="form-control" id="firstnameFrm" value="<?= set_value( 'firstnameFrm' )?>">
                        <?= isset( $errorFirstName ) ? "<div class='alert alert-danger'>".$errorFirstName."</div>" : ""; ?>
                    </div>

                    <div class="mb-3">
                        <label for="lastnameFrm" class="form-label">User LastName</label>
                        <input type="text" name="lastnameFrm" class="form-control" id="lastnameFrm" value="<?= set_value( 'lastnameFrm' )?>">
                        <?= isset( $errorLastName ) ? "<div class='alert alert-danger'>".$errorLastName."</div>" : ""; ?>
                    </div>

                    <div class="mb-3">
                        <label for="emailFrm" class="form-label">User Email</label>
                        <input type="email" name="emailFrm" class="form-control" id="emailFrm" value="<?= set_value( 'emailFrm' )?>">
                        <?= isset( $errorEmail ) ? "<div class='alert alert-danger'>".$errorEmail."</div>" : ""; ?>
                    </div>

                    <div class="mb-3">
                        <label for="pwdFrm" class="form-label">User Password</label>
                        <input type="password" name="pwdFrm" class="form-control" id="pwdFrm">
                        <?= isset( $errorPassword ) ? "<div class='alert alert-danger'>".$errorPassword."</div>" : ""; ?>
                    </div>

                    <div class="mb-3">
                        <label for="cfpwdFrm" class="form-label">Confirm Password</label>
                        <input type="password" name="cfpwdFrm" class="form-control" id="cfpwdFrm">
                        <?= isset( $errorConfirmPassword ) ? "<div class='alert alert-danger'>".$errorConfirmPassword."</div>" : ""; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- Form HTML End-->
            </div>
            <div class="col">

            </div>

        </div>
    </div>
    <!-- Grid Bootstrap -->



    <!-- Dashboard Content -->


<?=
$this->endSection();