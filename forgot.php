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
                height: 1px;
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

<div class="container p-5 align-items-center">
    <center>
<div class="card w-50">
  <h5 class="card-header">Temukan Akun Anda</h5>
  <div class="card-body">
                 <div class="row">
                     <div class="col">
                        <span>Ketik email atau nomor telepon Anda untuk mencari akun Anda.</span>
                        <form style="display: flex;">
                        <input type="email" class="pl-1 mt-2" style="border: 1px solid #e0e0e0; flex: 1; font-size: 13px; text-align:left;" placeholder="Masukan E-mail / Telepon" required>
                        </form>
                    </div>

                    </div>
    <a href="#" class="btn btn-sm light-blue darken-3 float-right" style="color:white;">Reset Password</a>
  </div>
</div>
        </center>
        </div>

        </body>
        </html>