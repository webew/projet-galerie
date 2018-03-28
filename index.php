<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galerie</title>
        <link rel="icon" type='image/png' href="images/Yin-Yang.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <header>
                <a data-fancybox data-src="#hidden-content-b" href="javascript:;" ><div>GALERIE</div></a>
            </header>

            <div style="display: none;" id="hidden-content-b">
                <h2>Hello!</h2>
                <p>This is animated content! Cool, right?</p>
                <img src="images/galerie.png" alt=""/>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/paysage3.jpg">
                                <img src="images/paysage3.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/fleurs2.jpg">
                                <img src="images/fleurs2.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/fleurs3.jpg">
                                <img src="images/fleurs3.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/coucher1.jpg">
                                <img src="images/coucher1.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/coucher2.jpg">
                                <img src="images/coucher2.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/paysage1.jpg">
                                <img src="images/paysage1.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/paysage2.jpg">
                                <img src="images/paysage2.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/paysage4.jpg">
                                <img src="images/paysage4.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="parentImg">
                            <a data-fancybox="gallery" href="images/coucher1.jpg">
                                <img src="images/coucher1.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div>Galerie réalisée par bf</div>
            </footer>
        </div>
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js" type="text/javascript"></script>
        <script>
            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    this.addClass('animated ' + animationName).one(animationEnd, function () {
                        $(this).removeClass('animated ' + animationName);
                    });
                    return this;
                }
            });
            $(document).on("mouseenter", "header div", function () {
                $(this).animateCss('rubberBand');
            });
            $(document).on("mouseenter", ".parentImg", function () {
                $(this).animateCss('swing');
            });
            $(document).on("mouseenter", "footer div", function () {
                $(this).animateCss('zoomIn');
            });

        </script>
    </body>
</html>
