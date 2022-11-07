<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Galeri</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <!-- JQuery and Javascript CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- JQuery and Javascript CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="container">
            <a href="<?= site_url('galeri/tambah') ?>" class="btn btn-sm" style="background-color: #2a5d68; color:aliceblue;">
                <i class="fa fa-plus"></i> Tambah Galeri
            </a>
        </div>

        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <section id="team" class="team">
                <div class="container">
                    <style>
                        .team .member .member-img {
                            position: relative;
                            overflow: hidden;
                        }

                        .team .member .social {
                            position: absolute;
                            left: 0;
                            bottom: 30px;
                            right: 0;
                            opacity: 0;
                            transition: ease-in-out 0.3s;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .team .member .social a {
                            transition: color 0.3s;
                            color: #353535;
                            margin: 0 3px;
                            border-radius: 50px;
                            width: 36px;
                            height: 36px;
                            display: inline-block;
                            transition: ease-in-out 0.3s;
                            color: #fff;
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .team .member .social a:hover {
                            background: #8fc04e;
                        }

                        .team .member .social i {
                            font-size: 18px;
                            line-height: 0;
                        }

                        .team .member:hover .social {
                            opacity: 1;
                            bottom: 15px;
                        }
                    </style>

                    <div class="row">
                        <?php
                        $no = 1;
                        foreach ($galeris as $g) {
                        ?>
                            <div class="col-lg-3 mt-4 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="<?= base_url() ?>/assets/picture/<?= $g->foto ?>" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="<?= site_url("galeri/ubah/$g->id") ?>" style="background: rgba(220, 231, 8, 0.8);"><i class='bx bxs-edit-alt'></i></a>
                                            <a href="#" data-id="<?= $g->id ?>" style="background: rgba(186, 18, 18, 0.8)" class="btn-delete-galeri"><i class='bx bxs-trash'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </section><!-- End Team Section -->
            <div class="carousel-item active">

            </div>
        </div>
        <!-- Inner -->
    </div>
    </div>
    <!-- Carousel wrapper -->
    <div class="modal" id="modal-confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Anda Yakin Hapus data ini?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btn-delete">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <form id="form-delete" method="post" action="<?= site_url('galeri/delete') ?>">

    </form>
</body>

</html>
<script>
    $(function() {
        let idGaleri = 0
        $(".btn-delete-galeri").on("click", function() {
            id = $(this).data("id");
            console.log(id);
            $("#modal-confirm-delete").modal('show');
        });
        $("#btn-delete").on("click", function() {
            //panggil url untuk hapus data
            let inputId = $("<input>")
                .attr("type", "hidden")
                .attr("name", "id")
                .val(id);
            let formDelete = $("#form-delete");
            formDelete.empty().append(inputId);
            formDelete.submit();
            $("#modal-confirm-delete").modal('hide');
        });
    })
</script>