<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8 text-gray-800">

            <form id="form-update-social_media" method="post" action="<?= site_url('social_media/update') ?>" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control" value="<?= $social_media->instagram ?>" name="instagram">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control" value="<?= $social_media->facebook ?>" name="facebook">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control" value="<?= $social_media->twitter ?>" name="twitter">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-10">
                        <input require type="text" class="form-control" value="<?= $social_media->website ?>" name="website">
                    </div>
                </div>
                <input type="hidden" name="id_sc" value="<?= $social_media->id_sc ?>">
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn" id="btn-update-sc" style="background-color: #2a5d68; color: #ededed;">Simpan</button>
                        <a href="<?= site_url('social_media') ?>" class="btn btn-md" style="background-color: #2b58bf; color: #ededed;">
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

<script>
    $(function() {
        $("#btn-update-sc").on("click", function() {
            let validate = $("#form-update-social_media").valid()
            if (validate) {
                $("#form-update-social_media").submit()
            }
        })
        $("#form-update-social_media").validates({
            rules: {
                id_sc: {
                    digits: true
                },
                website: {
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