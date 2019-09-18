<?
function POST($name)
{

    if (isset($_POST[$name])) {

        return $_POST[$name];

    } else {
        return '';
    }
}

function GET($name)
{

    if (isset($_GET[$name])) {

        return $_GET[$name];

    } else {
        return '';
    }
}
if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    if ($cmd != '') {
        if (function_exists($cmd))
            $cmd();
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Get Started Here</title>


        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/one-page-wonder.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="">(Company Name Here) Landing Page</a>                
            </div>
        </nav>

        <header class="masthead text-center text-white header-main" >
            <div class="masthead-content">
                <div class="container" style="margin-top:-110px;">


                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">

                            <div class="p-5">

                                <form id="requestInfoForm">
                                    <div class="form-group">
                                        <label for="name" style="display: none;" id="hiddenName">Name</label>
                                        <label for="name">&nbsp;</label>
                                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" style="display: none;" id="hiddenEmail">Email</label>
                                        <label for="email">&nbsp;</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" style="display: none;" id="hiddenPhone">Phone</label>
                                        <label for="phone">&nbsp;</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="comments" style="display: none;" id="hiddenComments">Comments</label>
                                        <label for="comments">&nbsp;</label>
                                        <textarea class="form-control" id="comments" placeholder="Comments, if any."></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="submitForm();"><h3 style="margin-bottom:0px;">Submit</h3></button>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-6 order-lg-1">

                            <div class="p-5">

                                <h1 class="display-4 mainText" style="text-shadow: -1px 0 black, 0 1px black, 2px 0 black, 0 -1px black;" >Enter your contact info and we'll get to you right away!</h1>
                                
                                <!--style="background:rgba(0,0,0,0.5);"-->
                            </div>

                        </div>
                    </div>


                </div>

            </div>
            

        </header>

        <!--section>
        <div class="container">

        </div>
        </section>

        <section>
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6">
        <div class="p-5">
        <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
        </div>
        </div>
        <div class="col-lg-6">
        <div class="p-5">
        <h2 class="display-4">We salute you!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
        </div>
        </div>
        </div>
        </div>
        </section>

        <section>
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
        <div class="p-5">
        <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
        </div>
        </div>
        <div class="col-lg-6 order-lg-1">
        <div class="p-5">
        <h2 class="display-4">Let there be rock!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
        </div>
        </div>
        </div>
        </div>
        </section>

        <!-- Footer -->
        <footer class="py-3 bg-black">
            <div class="container">
                <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
            $('document').ready(function(){
                $('.header-main').css("min-height",window.innerHeight-51); 

                $("#name").focus(function(){
                    $("#hiddenName").show();
                });

                $("#name").blur(function(){
                    $("#hiddenName").hide();
                });

                $("#email").focus(function(){
                    $("#hiddenEmail").show();
                });

                $("#email").blur(function(){
                    $("#hiddenEmail").hide();
                });


                $("#phone").focus(function(){
                    $("#hiddenPhone").show();
                });

                $("#phone").blur(function(){
                    $("#hiddenPhone").hide();
                });


                $("#comments").focus(function(){
                    $("#hiddenComments").show();
                });

                $("#comments").blur(function(){
                    $("#hiddenComments").hide();
                });

            })

            $( window ).resize(function() {
                $('.header-main').css("min-height",window.innerHeight-51);            
            });

            function submitForm(){
                
                $(".mainText").fadeOut(function(){
                    $(".mainText").html('Thank you very much, we\'ll contact you soon!');    
                    $('.mainText').fadeIn();
                })
                $('#requestInfoForm').slideUp(function(){
                    $("#requestInfoForm").html("<button class='btn btn-primary' onclick='location.reload();'><h3 style='margin-bottom:0px;'>Click Here to Learn More!</h3></button>").fadeIn();
                });
                
                

            }
        </script>

    </body>                                                                     

</html>

<?
function emailInfo(){

}
?>