<html>
    <head>
    <title>Online Shop</title>
     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="mdbootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdbootstrap/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdbootstrap/css/style.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:400,700');
            @import url('https://fonts.googleapis.com/css?family=Open+Sans');
            body{
                margin:0;
                padding:0; 
                font-family: 'open sans','tahoma',sans-serif;
            }
            .garisY{
                width: 1px;
                background: #e0e0e0;
            }

            .garisX{
                height: 1.2px;
                background: #e0e0e0;
            }

            #ex3 .fa-stack[data-count]:after {
            position: absolute;
            right: 0%;
            top: 1%;
            content: attr(data-count);
            font-size: 55%;
            padding: .45em;
            border-radius: 50%;
            border: 1px solid white;
            line-height: .8em;
            color: white;
            background: rgba(255, 0, 0, 0.85);
            text-align: center;
            min-width: 1em;
            font-weight: bold;
            }

            
            select{
            border: 0;
            margin: 2px;
            border-right: 1px solid grey;
            max-width: 5.5em;
            outline: none;
            color: grey;
            }

            .footer{
                color: #ffffff;
            }

            .list {
                font-size: .9em;
                list-style-type: none;
            }

            .list li a{
                color: #ffffff;
                letter-spacing: 0.8px;
            }

            .list li a:hover{
                color: #eee0e0;
            }

            .box{
                background-clip:padding-box;
            }

            .fullwidth{
                width:100%;
            }

            .qty{
                width:25%;
                height:30%;
                border-radius:2px 2px;
                border:none;
            }
        
      </style>
    </head>
        <body>
        <?php
            require 'header.php';
        ?>

         <div class="container p-5 mt-3">
         <div class="row">
         <div class="col">
         <h4>Keranjang Saya</h4>
         </div>
         <div class="col">
         <a class="btn btn-sm light-blue darken-3 float-right font-weight-bold" style="color:white; letter-spacing:1px;" href="http://localhost/ProjectGts/">Lanjutkan Belanja ></a>
         </div>
         </div>
         <div class="garisX"></div>

<!-- loop barang -->
            <div class="row mt-3">

                <div class="col-sm-2">
                <img class="card-img-top" src="gambar/x.jpg" alt="Card image cap" />
                </div>

                <div class="col-sm-4">
                <span>Judul Barang</span>
                </div>

                <div class="col-sm-2 mt-1">
                <h6 style="color:#0277bd;">Rp. 10.000</h6>
                </div>

                <div class="col-sm-2">
                <div class="w-responsive p-0">
                                    <form style="display: flex;">
                                        <button type="button" class="p-1 blue darken-3 qty"><i class="fas fa-minus" style="color:white;"></i></button>
                                        <input class="mr-1 ml-1" type="text" style="border: 0px; outline:none; flex: 1; font-size: 15px; text-align:center;" size="5" maxlength="7" value="1">
                                        <button type="button" class="p-1 blue darken-3 qty"><i class="fas fa-plus" style="color:white;"></i></button>
                                    </form>
                                </div>
                </div>

                <div class="col-sm-2">
                <h6 class="font-weight-bold float-right" style="">Rp. 10.000</h6>
                </div>

            </div>

            <!-- loop -->

            <div class="garisX mt-3"></div>

            <div class="row mt-3">
            <div class="col-8 ">
            </div>

            <div class="col ">

            <div class="row">
                <div class="col-6 ">
                Subtotal
                </div>
                <div class="col ">
                <h6 class="font-weight-bold float-right" style="">Rp. 10.000</h6>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6 ">
                Tax
                </div>
                <div class="col ">
                <h6 class="font-weight-bold float-right"> Rp. 20.000 </h6>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6 ">
                Total Akhir
                </div>
                <div class="col ">
                <h6 class="font-weight-bold float-right"> Rp. 30.000 </h6>
                </div>
            </div>

            <div class="row mt-3 float-right">
            <a class="btn btn-sm light-blue darken-3 float-right font-weight-bold" style="color:white; letter-spacing:1px;" href="#" data-toggle="modal" data-target="#exampleModalCenter">Checkout ></a>
            </div>

            </div>
            </div>

         </div>


         <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Checkout Berhasil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Silahkan Transfer ke Rekening Di Bawah Ini
        <div class="clearfix"></div>
        BANK : 0011-2212-29120
      </div>
      <div class="modal-footer">
        <button type="button" class="btn light-blue darken-4 btn-sm" style="color:white;" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        

        <!-- Javascript -->
  <script type="text/javascript" src="mdbootstrap/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdbootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdbootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdbootstrap/js/mdb.min.js"></script>

  <!--/.EndJavascript-->

  

        <script>
            $('#exampleModalCenter').modal('show') {
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
            })
        </script>

        </body>
</html>