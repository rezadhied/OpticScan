<!-- InputDataPasien.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pasien</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            border-radius: 10px;
        }
        .selected-button {
            margin-top: 10px;
        }
        #selectedStatus {
            display: inline-block;
            vertical-align: top;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h2>Data Pasien</h2>
        <form class="row g-4">
            <div class="col-12 col-sm-6">
                <div class="mt-4">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Pasien">
                </div>
                <div class="mt-4">
                    <label for="NomorHP" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="NomorHP" placeholder="Masukkan Nomor Handphone">
                </div>
            <div class="mt-4">
                <label for="TanggalDaftar" class="form-label">Tanggal Daftar</label>
                <input type="date" class="form-control" id="TanggalDaftar">
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mt-4">
                <label for="Dokter" class="form-label">Dokter</label>
                <input type="text" class="form-control" id="Dokter" placeholder="Masukkan Nama Anda">
            </div>
            <div class="mt-4">
                <label for="Diagnosa" class="form-label">Diagnosa</label>
                <input type="text" class="form-control" id="Diagnosa" placeholder="Masukkan Diagnosa Pasien">
            </div>
            <div class="">
                <div class="row align-items-center mt-4">
                    <div class="col">
                        <label for="Status" class="form-label">Status</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle rounded-pill w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Status
                            </button>
                            <ul class="dropdown-menu w-auto h-full px-3" aria-labelledby="dropdownMenuButton">
                                <button type="button" class="dropdown-item" onclick="setStatus('Follow up Examination', 'btn-danger')">Follow up Examination</button>
                                <button type="button" class="dropdown-item" onclick="setStatus('Continued Treatment', 'btn-warning')">Continued Treatment</button>
                                <button type="button" class="dropdown-item color: white" onclick="setStatus('Recover', 'btn-success')">Recover</button>
                            </ul>
                        </div>
                    </div>
                    <div id="selectedStatus" class="col-auto w-50 pt-3">
                        <!-- Button yang dipilih akan ditampilkan di sini -->
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="mt-4">
        <button class="btn btn-success me-3 w-9">Save</button>
        <button class="btn btn-danger">Cancel</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function setStatus(status, btnClass) {
        var selectedStatus = document.getElementById('selectedStatus');
        selectedStatus.innerHTML = '<button type="button" class="btn ' + btnClass + ' selected-button"> ' + status;
    }
</script>
</body>
</html>
