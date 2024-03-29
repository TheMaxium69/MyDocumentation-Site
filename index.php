<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">TyroDoc Site</span>
        </div>
    </nav>
    <br>
    <div class="row">
        <div class="col-2">
            <nav class="nav flex-column">
                <a style="color: black;" class="btn nav-link active" aria-current="page" href="?">Home</a>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Symfony
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="?page=Symfony">Home</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?page=Symfony&add=cmd">Cmd</a>
                        <a class="dropdown-item" href="?page=Symfony&add=tokken">Tokken</a>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    PowerShell
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="?page=PowerShell">Home</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?page=PowerShell&add=cmd">Cmd</a>
                        <a class="dropdown-item" href="?page=PowerShell&add=script">Script</a>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Linux
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="?page=Linux&add=SetupVps">SetupVps</a>
                        <a class="dropdown-item" href="?page=Linux&add=Java">Java</a>
                        <a class="dropdown-item" href="?page=Linux&add=Screen">Screen</a>
                    </div>
                </div>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Git
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="?page=git&add=cmd">Cmd</a>
                    </div>
                </div>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Abeleton
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="?page=Ableton">Home</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?page=Ableton&add=RaccourcisClavier">cmd</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-9">
            <?php $url = "app.php"; 
            if (!empty($_GET['page'])){ 
                $url = $url . "?page=" . $_GET['page']; 

                if (!empty($_GET['add'])){
                    $url = $url . "&add=" . $_GET['add'];
                }

            }?>
                    <iframe src="<?php echo $url; ?>"; 
                        id="form" class="col align-self-center"
                        title="page"
                        width="100%"  style="height: 1000px;
                        border: none;">
                    </iframe>
        </div>
    </div>    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>