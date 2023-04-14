
<div class="container">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
<div class="container emp-profile">
    <h3 class="h3 mb-4 text-gray-800"><?= $tittle;?></h3>
            <form method="post" enctype="multipart/form-data" id="formgantiphoto" action="">
                <input type="hidden" name="user_id" value="<?= base_url($user['id'])?>"/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="100px" height="100px" alt=""/>
                            <div class="file">
                                <!-- <small> Change Photo</small> -->
                                <!-- <input type="file" name="photoprofile" id="photoprofile"/> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h6>
                                       Nama     : <?= $user['name'];?>
                                    </h6>
                                    <h6>
                                        Dibuat   : <?= date('d F Y', $user['date_create']); ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('profile/edit')?>" class="profile-edit-btn">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user['id'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user['name'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$user['email'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $user['bod'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No. Telp</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$user['telp'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$user['alamat'];?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
