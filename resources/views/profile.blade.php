@extends('layouts.app')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile-username text-center">{{ $user->name }}</h3>
            <p class="text-muted text-center">{{ $user->role }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <h4 class="card-title">Personal Information</h4>
          </div>
          <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}">
              @csrf
              @method('PUT')
              <div class="form-group row mb-2">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                  @error('name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-2">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                  @error('username')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-2">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                  @error('email')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-2">
                <label for="birthdate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $user->birthdate }}">
                  @error('birthdate')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                  @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Save Changes</button>
                </div>
              </div>
            </form>
            <hr>
            <form class="form-horizontal" method="POST" action="{{ route('profile.change_password') }}">
              @csrf
              @method('PUT')
              <div class="form-group row mb-1">
                <label for="current_password" class="col-sm-2 col-form-label">Password Lama</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Masukkan password lama anda">
                  @error('current_password')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-1">
                <label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukkan password baru">
                  @error('new_password')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-3">
                <label for="new_password_confirmation" class="col-sm-2 col-form-label">Konfirmasi</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Konfirmasi password">
                  @error('new_password_confirmation')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Update Password</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
