<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile Details</h5>
            </div>
            <div class="card-body text-center">
                <img src="<?= base_url(); ?>public/assets/img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                <h5 class="card-title mb-0">Christina Mason</h5>
                <div class="text-muted mb-2">Lead Developer</div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <h5 class="h6 card-title">About</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">San Francisco, SA</a></li>

                    <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">GitHub</a></li>
                    <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Boston</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-xl-9">
        <div class="card">
            <div class="card-header">

                <h5 class="card-title mb-0">Activities</h5>
            </div>
            <div class="card-body h-100">

                <div class="d-flex align-items-start">
                    <img src="<?= base_url(); ?>public/assets/img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
                    <div class="flex-grow-1">
                        <small class="float-end text-navy">5m ago</small>
                        <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
                        <small class="text-muted">Today 7:51 pm</small><br />

                    </div>
                </div>

                <hr />
                <div class="d-flex align-items-start">
                    <img src="<?= base_url(); ?>public/assets/img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                    <div class="flex-grow-1">
                        <small class="float-end text-navy">30m ago</small>
                        <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
                        <small class="text-muted">Today 7:21 pm</small>

                        <div class="border text-sm text-muted p-2 mt-1">
                            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                            pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                        </div>

                        <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                    </div>
                </div>

                <hr />
                <div class="d-flex align-items-start">
                    <img src="<?= base_url(); ?>public/assets/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                    <div class="flex-grow-1">
                        <small class="float-end text-navy">1h ago</small>
                        <strong>Christina Mason</strong> posted a new blog<br />

                        <small class="text-muted">Today 6:35 pm</small>
                    </div>
                </div>

                <hr />
                <div class="d-grid">
                    <a href="#" class="btn btn-primary">Load more</a>
                </div>
            </div>
        </div>
    </div>
</div>