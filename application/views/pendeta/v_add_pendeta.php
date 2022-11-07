<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8 text-gray-800">

            <form id="form-tambah-pendeta" method="post" action="<?= site_url('pendeta/insert') ?>" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Nama Pendeta</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control" name="nama_pendeta">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Background Pendeta</label>
                    <div class="col-sm-10">
                        <textarea require type="text" class="form-control" name="background_pendeta" rows="7"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">Foto Pendeta</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" name="userfile" class="custom-file-input" size="20" required />
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn" id="btn-save-pendeta" style="background-color: #2a5d68; color: #ededed;">Simpan</button>
                        <a href="<?= site_url('pendeta') ?>" class="btn btn-md" style="background-color: #2b58bf; color: #ededed;">
                            <i class="fa fa-reply"></i> Kembali
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!--<body>
    <div class="card">
        <div class="card-header">
            <h3>Form Add Renungan</h3>
        </div>
        <div class="card-body">
            <form id="form-tambah-renungan" method="post" action="<?= site_url('renungan/insert') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label">Judul Renungan</label>
                    <input require type="text" class="form-control" name="judul_renungan">
                </div>
                <div class="form-group">
                    <label class="form-label">Isi Renungan</label>
                    <textarea require type="text" class="form-control" name="isi_renungan" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal Renungan</label>
                    <input require type="date" class="form-control" name="tanggal_renungan">
                </div>
                <div class="form-group">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="userfile" class="form-control" size="20" required />
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="button" id="btn-save-renungan" class="btn btn-success btn-sm">
                <i class="fa fa-save"></i> Simpan
            </button>
            <a href="<?= site_url('renungan') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-reply"></i> Kembali
            </a>
        </div>
    </div>
</body>

</html>-->

<script>
    $(function() {
        $("#btn-save-pendeta").on("click", function() {
            let validate = $("#form-tambah-pendeta").valid()
            if (validate) {
                $("#form-tambah-pendeta").submit()
            }
        })
        $("#form-tambah-pendeta").validates({
            rules: {
                nama_pendeta: {
                    digits: true
                },
                foto_pendeta: {
                    digits: true
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            }
        })
    })
</script>