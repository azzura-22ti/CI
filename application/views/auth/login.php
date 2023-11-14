    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <span class="app-brand-text demo text-body fw-bold mb-2">BPF TI 2023</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Selamat Datang 👋</h4>
              <p class="mb-4">Silahkan masukkan akun anda disini</p>
              <?= $this->session->flashdata('message'); ?>

              <form id="formAuthentication" class="mb-3" action="<?= base_url('Auth') ?>" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email or username" autofocus />
                  <?= form_error('email', '<small class="tex-danger pl-3">', '</small>') ?>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" value="<?= set_value('nama') ?>" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    <?= form_error('password', '<small class="tex-danger pl-3">', '</small>') ?>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                </div>
              </form>

              <p class="text-center">
                <span>Belum memiliki akun?</span>
                <a href="<?= base_url(); ?>auth/registrasi">
                  <span>Buat Akun</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>