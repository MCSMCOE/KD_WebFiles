<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("../../inc/metatags.php");
    include ("../../inc/conn.php");
    $conc=locdb();
    ?>
    <!-- PAGE TITLE HERE -->
    <title>Kaamadhenu Arts and Science College</title>
    <?php include ("../../inc/headerscript.php"); ?>
    <!-- Revolution Navigation Style -->
</head>

<body id="bg">
<div class="page-wraper">

    <div id="loading-area">
        <div class="bag"></div>
    </div>
    <?php include ("../../inc/header.php"); ?>

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="bnr-inr bg-pt" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">

                <div class="bnr-inr-entry text-center">
                    <h1 class="text-capitalize"><span>Core Values</span></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">

                            <li><a href="/" title="Departments">Home</a>
                            <li><a href="javascript:void(0)">Academics</a></li>
                            </li>
                            <!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me1</a> -->
                            <li class="text-capitalize">Core Values</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>

            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-10 value">

                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h2 class="m-b10 fw7 "></h2>


                                            <div class="row m-b30">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-6">

                                                    <ul class="list-check primary">

                                                        <li>Fostering congenial Learning environment</li>
                                                        <li>Team work – the only strength</li>
                                                        <li>Social Responsibility in Nation building</li>
                                                        <li>Green, clean and safe environment</li>
                                                        <li>Accountability and Transparency</li>
                                                    </ul>

                                                    <div class="col-md-12" align="center">

                                                    </div>
                                                </div>



                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->

    <?php include ("../../inc/footer.php");
    mysqli_close($conc);
    ?>

    <?php include ("../../inc/footerscript.php"); ?>




</div>

</body>

</html>
