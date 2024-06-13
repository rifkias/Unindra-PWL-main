<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="dist/css/styles.css" rel="stylesheet" />
    <link href="dist/css/prism.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
    div.code {
        white-space: pre;
    }

    .biodata-section {
        margin-bottom: 30px;
    }

    .profile-pic {
        max-width: 150px;
        border-radius: 50%;
    }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php include_once('_header.php') ?>
    <div id="layoutSidenav">
        <?php include_once('_sidebar.php') ?>
        <div id="layoutSidenav_content">

            <?php
              $filename = "";
              $npm = "202143500723";
              if (!isset($_GET['page'])){
                  $filename = "./content/".$npm."_helloworld.php";
              } else {
                switch ($_GET['page']) {
                  case "variable":
                      $filename = "./content/".$npm."_variable.php";
                      break;
                  case "object":
                      $filename = "./content/".$npm."_object.php";
                      break;
                  case "konstanta":
                      $filename = "./content/".$npm."_konstanta.php";
                      break;
                  case "aritmatika":
                      $filename = "./content/".$npm."_aritmatika.php";
                      break;
                  case "perbandingan":
                      $filename = "./content/".$npm."_perbandingan.php";
                      break;
                  case "string":
                      $filename = "./content/".$npm."_string.php";
                      break;
                  case "kondisiIf":
                      $filename = "./content/".$npm."_if.php";
                      break;
                  case "kondisiIfElse":
                      $filename = "./content/".$npm."_ifElse.php";
                      break;
                  case "switch":
                      $filename = "./content/".$npm."_switch.php";
                      break;
                  case "whileLoop":
                      $filename = "./content/".$npm."_whileLoop.php";
                      break;
                  case "doWhile":
                      $filename = "./content/".$npm."_doWhile.php";
                      break;
                  case "forLoop":
                      $filename = "./content/".$npm."_forLoop.php";
                      break;
                  case "foreachLoop":
                      $filename = "./content/".$npm."_foreachLoop.php";
                      break;
                  case "biodata":
                      $filename = "./content/".$npm."_biodata.php";
                      break;
                  case "function":
                      $filename = "./content/".$npm."_function.php";
                      break;
                  case "functionParameter":
                      $filename = "./content/".$npm."_functionParameter.php";
                      break;
                  case "optionalArugment":
                      $filename = "./content/".$npm."_optionalArugment.php";
                      break;
                  case "callByValue":
                      $filename = "./content/".$npm."_callByValue.php";
                      break;
                  case "callByReference":
                      $filename = "./content/".$npm."_callByReference.php";
                      break;
                  default:
                  $filename = "./content/".$npm."_helloworld.php";
              };
              }
            ?>

            <main>
                <div class="container-fluid px-4">

                    <?php 
                  if(isset($_GET['page'])){
                    if($_GET['page'] == "biodata"){
                      include($filename);
                      
                    }else{
                      
                ?>
                    <p>Source Code : </p>
                    <pre>
                      <code class="language-php">

                        <!-- <div class="code"> -->
                          <?php 
                            echo htmlentities(file_get_contents($filename));
                            ?>
                      <!-- </div> -->
                    </code>
                    </pre>


                    <div class="result">
                        <p>Result : </p>
                        <?php 
                        include($filename);
                      ?>

                    </div>




                    <?php 
                
                  }
                }else{
                  include($filename);
                }
                ?>
                </div>
            </main>
            <?php include_once("_footer.php") ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="dist/js/scripts.js"></script>
    <script src="dist/js/prism.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="dist/assets/demo/chart-area-demo.js"></script>
    <script src="dist/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="dist/js/datatables-simple-demo.js"></script>

    <script>
    document.querySelectorAll('div.code').forEach(el => {
        // then highlight each
        hljs.highlightElement(el);
    });
    </script>
</body>

</html>