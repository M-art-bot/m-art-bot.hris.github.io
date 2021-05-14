<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
             <div class="container-fluid">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?= base_url('administrator-login');?>">
                   <?= $system_name;?>
                </a>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse " id="navigation">
                    <ul class="navbar-nav d-lg-block d-none pull pull-right">
                        <li class="nav-item">
                            <a href="#" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Go back to Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

      </div>
    </div>
</div>


<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                            <p class="mb-0">Enter your username and password to sign in</p>
                        </div>
                        <div class="card-body">
                            <?= form_open('authentication/login',array( 'role'=>"form text-left", 'class'=>"row g-3 needs-validation", 'novalidate' => ''));?>

                                <label for="validationCustom01" class="form-label">Username</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Username"  id="validationCustom01" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>

                                <label for="validationCustom02" class="form-label">Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" id="validationCustom02" required="">
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                </div>
                            <?= form_close();?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                      <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url();?>assets/admin/forms/images/curved-images/curved6.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    (function () {
      'use strict'

      var forms = document.querySelectorAll('.needs-validation')

     
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>


