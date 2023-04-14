                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h3 class="h3 mb-4 text-gray-800"><?= $tittle;?></h3>
                    <div class="card" style="width: 15rem; background-color:  #B8EDD8;">
                        <div class="col">
                            <img class="card-img-top" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Card image cap">
                        </div>
                        <div class="card-body" style="background-color:#EAE5E0;">
                            <p class="card-title"><?= $user['name'];?></p>
                            <p class="card-title "><small class="text-muted">Member Since <?= date('d F Y', $user['date_create']); ?></small></p>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

