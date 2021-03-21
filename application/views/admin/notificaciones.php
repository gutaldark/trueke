<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
    	body{
    margin-top:20px;
    background-color: #f0f2f5;
}
.dropdown-list-image {
    position: relative;
    height: 2.5rem;
    width: 2.5rem;
}
.dropdown-list-image img {
    height: 2.5rem;
    width: 2.5rem;
}
.btn-light {
    color: #2cdd9b;
    background-color: #e5f7f0;
    border-color: #d8f7eb;
}
    </style>
<link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/materialdesignicons.css" crossorigin="anonymous" />
<br><br><br>
<div class="container">
    <p class="text-center text-muted">NOTIFICACIONES</p>
    <div class="row">
        <div class="col-lg-3 left">
            <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center">
                <img src="<?php echo base_url('/'); ?>assets/img/avatar7.png" class="img-fluid" alt="Responsive image" />
                <div class="p-3 border-bottom">
                    <h6 class="font-weight-bold text-dark">Notifications</h6>
                    <p class="mb-0 text-muted">You’re all caught up! Check back later for new notifications</p>
                </div>
                <div class="p-3">
                    <button type="button" class="btn btn-outline-success btn-sm pl-4 pr-4">View settings</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9 right">
            <div class="box shadow-sm rounded bg-white mb-3">
                <div class="box-title border-bottom p-3">
                    <h6 class="m-0">Recent</h6>
                </div>
                <div class="box-body p-0">
                    <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar3.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate">DAILY RUNDOWN: WEDNESDAY</div>
                            <div class="small">Income tax sops on the cards, The bias in VC funding, and other top news for you</div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">3d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar1.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div class="mb-2">We found a job at askbootstrap Ltd that you may be interested in Vivamus imperdiet venenatis est...</div>
                            <button type="button" class="btn btn-outline-success btn-sm">View Jobs</button>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">4d</div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="box shadow-sm rounded bg-white mb-3">
                <div class="box-title border-bottom p-3">
                    <h6 class="m-0">Earlier</h6>
                </div>
                <div class="box-body p-0">
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3 d-flex align-items-center bg-danger justify-content-center rounded-circle text-white">DRM</div>
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate">DAILY RUNDOWN: MONDAY</div>
                            <div class="small">Nunc purus metus, aliquam vitae venenatis sit amet, porta non est.</div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">3d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar3.png" alt="" /></div>
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                            <div class="small">Pellentesque semper ex diam, at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">3d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar2.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div class="mb-2"><span class="font-weight-normal">Congratulate Gurdeep Singh Osahan (iamgurdeeposahan)</span> for 5 years at Askbootsrap Pvt.</div>
                            <button type="button" class="btn btn-outline-success btn-sm">Say congrats</button>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">4d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar4.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div>
                                <span class="font-weight-normal">Congratulate Mnadeep singh (iamgurdeeposahan)</span> for 4 years at Askbootsrap Pvt.
                                <div class="small text-success"><i class="fa fa-check-circle"></i> You sent Mandeep a message</div>
                            </div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">4d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3 d-flex align-items-center bg-success justify-content-center rounded-circle text-white">M</div>
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate">DAILY RUNDOWN: MONDAY</div>
                            <div class="small">Nunc purus metus, aliquam vitae venenatis sit amet, porta non est.</div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">3d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar3.png" alt="" /></div>
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                            <div class="small">Pellentesque semper ex diam, at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">3d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar1.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div class="mb-2"><span class="font-weight-normal">Congratulate Gurdeep Singh Osahan (iamgurdeeposahan)</span> for 5 years at Askbootsrap Pvt.</div>
                            <button type="button" class="btn btn-outline-success btn-sm">Say congrats</button>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">4d</div>
                        </span>
                    </div>
                    <div class="p-3 d-flex align-items-center osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="<?php echo base_url('/'); ?>assets/img/avatar2.png" alt="" />
                        </div>
                        <div class="font-weight-bold mr-3">
                            <div>
                                <span class="font-weight-normal">Congratulate Mnadeep singh (iamgurdeeposahan)</span> for 4 years at Askbootsrap Pvt.
                                <div class="small text-success"><i class="fa fa-check-circle"></i> You sent Mandeep a message</div>
                            </div>
                        </div>
                        <span class="ml-auto mb-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                    <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-right text-muted pt-1">4d</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>