@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-15">
            <div class="card">
              <div></div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>No HP</th>
                  <th>Tanggal Daftar</th>
                  <th>Diagnosa</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Rizky Pratama</td>
                  <td>7305477760</td>
                  <td>03/12/2024</td>
                  <td>Katarak</td>
                  <td>Follow-Up Examination</td>
                  <td>i</td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection