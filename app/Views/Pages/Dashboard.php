<?=
$this->extend( 'Layouts/main' );

$this->section( 'content' );
?>

<!-- Dashboard Content -->

<!-- Grid Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>

            <div class="col">
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
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

                <!-- Table HTML End-->
            </div>

            <div class="col-2">

            </div>


        </div>
    </div>
<!-- Grid Bootstrap -->






<!-- Dashboard Content -->


<?=
$this->endSection();

