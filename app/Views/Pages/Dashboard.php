<?=
$this->extend( 'Layouts/main' );

$this->section( 'content' );
?>

<!-- Dashboard Content -->

<!-- Grid Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col">
                <!-- Congratulations -->

                <div class="modal-title py-4">
                    <?php
                    $user   =   session()->get( 'firstname' );
                    ?>
                    Hello, <?= "<strong>".$user."</strong>, yours users:" ?>
                </div>

                <!-- Congratulations -->


                <!-- Table HTML -->


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ( isset( $users ) )
                        foreach ( $users as $user ):
                        ?>
                    <tr>
                        <th scope="row"><?= $user->id; ?></th>
                        <td><?= $user->firstname; ?></td>
                        <td><?= $user->lastname; ?></td>
                        <td><?= $user->email; ?></td>
                        <td><?= $user->created_at; ?></td>
                        <td><?= $user->updated_at; ?></td>
                    </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

                <!-- Table HTML End-->
            </div>

            <div class="col-1">

            </div>


        </div>
    </div>
<!-- Grid Bootstrap -->






<!-- Dashboard Content -->


<?=
$this->endSection();

