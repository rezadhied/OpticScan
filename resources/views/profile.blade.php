@extends('layouts.app')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle " src="../../img/OpticScan.png" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center ">Andri</h3>
            <p class="text-muted text-center">Spesialis Mata</p>
            <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
            <a href="javascript:void(0)" class="btn btn-primary btn-block offset-sm-2" id="change_picture_btn"><b>Change picture</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
              <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="personal_info">
                <!-- Content for Personal Information tab -->
                <form class="form-horizontal">
                  <div class="form-group row mb-2">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                      <span class="text-danger error-text name_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-2 ">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" placeholder="Username" >
                      <span class="text-danger error-text favoritecolor_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" placeholder="Email">
                      <span class="text-danger error-text email_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-2 ">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ttl" placeholder="Tanggal Lahir" >
                      <span class="text-danger error-text favoritecolor_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-3 ">
                    <label  class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="noHP" placeholder="No HP" >
                      <span class="text-danger error-text favoritecolor_error"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="change_password">
                <!-- Content for Change Password tab -->
                <form class="form-horizontal">
                  <div class="form-group row mb-1">
                    <label for="inputName" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="PwLama" placeholder="Masukkan password lama anda" name="Password Baru">
                      <span class="text-danger error-text oldpassword_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-1">
                    <label for="inputName2" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="PwBaru" placeholder="Masukkan password baru" name="Password Baru">
                      <span class="text-danger error-text newpassword_error"></span>
                    </div>
                  </div>
                  <div class="form-group row mb-3">
                    <label for="inputName2" class="col-sm-2 col-form-label">Konfirmasi</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="KonfirmasiPw" placeholder="Konfirmasi password" name="Konfirmasi Pw">
                      <span class="text-danger error-text cnewpassword_error"></span>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="button" class="btn btn-danger update-password-btn">Update Password</button>
                    </div>
                  </div>
                </form>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
</section>
<!-- /.content -->
@endsection

@push('scripts')
<script>
    document.querySelector('#change_password_link').addEventListener('click', function(event) {
    // Hapus kelas "active" dari semua tab
    document.querySelectorAll('.nav-link').forEach(function(tab) {
        tab.classList.remove('active');
    });

    // Tambahkan kelas "active" ke tab yang diklik
    event.target.classList.add('active');

    // Dapatkan id dari tab yang diklik
    var tabId = event.target.getAttribute('href');

    // Hapus kelas "show active" dari semua konten tab
    document.querySelectorAll('.tab-pane').forEach(function(tabContent) {
        tabContent.classList.remove('show', 'active');
    });

    // Tambahkan kelas "show active" ke konten tab yang sesuai
    document.querySelector(tabId).classList.add('show', 'active');
});
</script>
@endpush
