<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?=APP_DESC?>">
    <title><?=$SETTINGS['Webiste title'] ?? 'Unkown' ?> . <?=APP_DESC?></title>
    <!-- Favicon -->
    <link href="<?=ROOT?>/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">  -->

    <!-- Font Awesome -->
    <link href="<?=ROOT?>/assets/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=ROOT?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
</head>

<style>
    @font-face {
        src: url('<?=ROOT?>/assets/fonts/Montserrat-VariableFont_wght.ttf');
        font-family: 'Montserrat';
    }
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="<?=ROOT?>" class="navbar-brand d-block d-lg-none">
            <h1 class="font-secondary text-white mb-n2"><?=$SETTINGS['Webiste title'] ?? 'Unkown' ?></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="<?=ROOT?>#home" class="nav-item nav-link active">Home</a>
                <a href="<?=ROOT?>#about" class="nav-item nav-link">About</a>
                <a href="<?=ROOT?>#story" class="nav-item nav-link">Story</a>
                <a href="<?=ROOT?>#gallery" class="nav-item nav-link">Gallery</a>
            </div>
            <a href="<?=ROOT?>" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2"><?=$SETTINGS['Webiste title'] ?? 'Unkown' ?></h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="<?=ROOT?>#family" class="nav-item nav-link">Family</a>
                <a href="<?=ROOT?>#event" class="nav-item nav-link">Event</a>
                <a href="<?=ROOT?>#rsvp" class="nav-item nav-link">RSVP</a>
                <a href="<?=ROOT?>#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?= get_image($SETTINGS['hero image'] ?? '')?>" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4"><?=$SETTINGS['Webiste title'] ?? 'Unkown' ?></h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;"><?=APP_DESC?></h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?=ROOT?>/assets/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4"><?=$SETTINGS['Webiste title'] ?? 'Unkown' ?></h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;"><?=APP_DESC?></h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="<?=ROOT?>/assets/#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="<?=ROOT?>/assets/#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?=ROOT?>/assets/" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
                <h1 class="font-secondary display-4">Groom & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>

            <?php if(!empty($about)):$num = 0?>
               <?php foreach($about as $row):$num++?>
                    
                    <?php if($num % 2 ):?>
                        <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                            <div class="col-md-6 p-0 text-center text-md-right">
                                <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                                    <h3 class="mb-3"><?=esc($row->title)?></h3>
                                    <p><?=esc($row->description)?></p>
                                    <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-<?=$row->icon?> text-primary pr-3"></i><?=ucfirst($row->name)?></h3>
                                    <div class="position-relative">
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->twitter_link?>"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->facebook_link?>"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->linkedin_link?>"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-outline-primary btn-square" href="<?=$row->instagram_link?>"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-0" style="min-height: 400px;">
                                <img class="position-absolute w-100 h-100" src="<?=get_image($row->image)?>" style="object-fit: cover;">
                            </div>
                        </div>
                    
                    <?php else :?>
                        <div class="row m-0">
                            <div class="col-md-6 p-0" style="min-height: 400px;">
                                <img class="position-absolute w-100 h-100" src="<?=get_image($row->image)?>" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 p-0 text-center text-md-left">
                                <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                                    <h3 class="mb-3"><?=esc($row->title)?></h3>
                                    <p><?=esc($row->description)?></p>
                                    <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-<?=strtolower($row->icon)?> text-primary pr-3"></i><?=ucfirst($row->name)?></h3>
                                    <div class="position-relative">
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->twitter_link?>"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->facebook_link?>"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-primary btn-square mr-1" href="<?=$row->linkedin_link?>"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-outline-primary btn-square" href="<?=$row->instagram_link?>"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-5" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Story</h6>
                <h1 class="font-secondary display-4">Our Love Story</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="container timeline position-relative p-0">
                <?php if(!empty($stories)) :$num = 0?>
                    <?php foreach($stories as $row) :$num++?>
                        <?php if ($num % 2 ) :?>

                                    <div class="row">
                                        <div class="col-md-6 text-center text-md-right">
                                            <img class="img-fluid mr-md-3" src="<?=get_image($row->image)?>"style="max-width: 300px; height:250px; object-fit: cover;" alt="">
                                        </div>
                                        <div class="col-md-6 text-center text-md-left">
                                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                                                <h4 class="mb-2"><?=esc($row->title)?></h4>
                                                <p class="text-uppercase mb-2"><?=get_date($row->date)?></p>
                                                <p class="m-0"><?=esc($row->description)?></p>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php else :?>
                                    
                                    <div class="row">
                                        <div class="col-md-6 text-center text-md-left">
                                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                                                <h4 class="mb-2"><?=esc($row->title)?></h4>
                                                <p class="text-uppercase mb-2"><?=get_date($row->date)?></p>
                                                <p class="m-0"><?=esc($row->description)?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center text-md-left">
                                            <img class="img-fluid ml-md-3" src="<?=get_image($row->image)?>" style="max-width: 300px; height:250px; object-fit: cover;"alt="">
                                        </div>
                                    </div>
                               
                                <?php endif;?>
                            <?php endforeach;?>
                        <?php endif;?>

                        </div>
                    </div>
                </div>
                <!-- Story End -->
                

    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Our Photo Gallery</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">

        <?php if(!empty($gallery)):?>
                <?php foreach($gallery as $image_row):?>
                    <div class="gallery-item">
                        <img class="img-fluid w-100" style="object-fit: cover;height:300px" src="<?=get_image($image_row->image)?>" alt="">
                        <a href="<?=get_image($image_row->image)?>" data-lightbox="gallery">
                            <i class="fa fa-2x fa-plus text-red"></i>
                        </a>
                    </div>
                <?php endforeach;?>
        <?php endif;?>

        </div>
    </div>
    <!-- Gallery End -->


    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Event</h6>
                <h1 class="font-secondary display-4">Our Wedding Event</h1>
                <i class="far fa-heart text-dark"></i>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="font-weight-normal text-muted mb-3 pb-3">Clita ipsum aliquyam dolor diam dolores elitr nonumy. Rebum sea vero ipsum eirmod tempor kasd. Diam amet lorem erat eos sit lorem elitr justo</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <?php if(!empty($events)): $num=0?>
                                <?php foreach($events as $row): $num++?>
                                        <?php if($num % 2) :?>
                                        <img class="img-fluid mb-4" style="object-fit:cover; height:400px;width:400px;" src="<?=get_image($row->image)?>" alt="">
                                        <h4 class="mb-3"><?=ucwords($row->title)?></h4>
                                        <p class="mb-2"><?=ucwords($row->location)?></p>
                                        <p class="mb-0"><?=strtoupper($row->time)?></p>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="text-center text-md-left ml-md-3">
                                        <?php else: ?>
                                        <img class="img-fluid mb-4" style="object-fit:cover; height:400px;width:400px;"src="<?=get_image($row->image)?>" alt="">
                                        <h4 class="mb-3"><?=ucwords($row->title)?></h4>
                                        <p class="mb-2"><?=ucwords($row->location)?></p>
                                        <p class="mb-0"><?=strtoupper($row->time)?></p>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                        </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Friends & Family Start -->
    <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Friends & Family</h6>
                <h1 class="font-secondary display-4">Groomsmen & Bridesmaid</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">Groomsmen</li>
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">Bridesmaid</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container justify-content-center">
                <?php if(!empty($family)): ?>
                    <?php foreach($family as $row) :?>
                        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                            <div class="position-relative mb-2">
                                <img class="img-fluid w-100" style="object-fit: cover; height:350px;"src="<?=get_image($row->image)?>" alt="">
                                <div class="bg-secondary text-center p-4">
                                    <h4 class="mb-3"><?=esc($row->name)?></h4>
                                    <p class="text-uppercase"><?=esc($row->title)?></p>
                                    <div class="d-inline-block">
                                        <a class="mx-2" target="_blank" href="<?=$row->twitter_link?>"><i class="fab fa-twitter"></i></a>
                                        <a class="mx-2" target="_blank" href="<?=$row->facebook_link?>"><i class="fab fa-facebook-f"></i></a>
                                        <a class="mx-2" target="_blank" href="<?=$row->linkedin_link?>"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="mx-2" target="_blank" href="<?=$row->instagram_link?>"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>

            </div>
        </div>
    </div>
    <!-- Friends & Family End -->


    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Join Our Party</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form method="POST" onsubmit="submit_form(event)">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" name ="name" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Name" required/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input name="email" type="email" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Email" required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select name="guests" class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option value="1">Number of Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select name="attending"class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option>I'm Attending</option>
                                        <option>All Events</option>
                                        <option>Wedding Party</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" target="_blank" href="<?= $links->twitter_link ?? '#'?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" target="_blank" href="<?=$links->facebook_link ?? '#'?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" target="_blank" href="<?=$links->linkedin_link ?? '#'?>"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" target="_blank" href="<?=$links->instagram_link ?? '#'?>"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center py-2">
                <a href="<?=ROOT?>/admin">Admin</a> &nbsp; | &nbsp; 
                <p class="text-white" href="mailto:<?=$links->email ?? '#'?>"><?=$links->email;?></p>
                <span class="px-3">|</span>
                <p class="text-white" href="<?=$links->phone ?? '+977-100'?>"><?=$links->phone?></p>
            </div>
            <p class="m-0">&copy; <a class="text-primary">2023</a>. Designed by <a class="text-primary" target="_blank" href="https://www.twitter.com/prateekbhujel"> <?=$SETTINGS['designed by'] ?? 'Unkown' ?> </a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="<?=ROOT?>/assets/#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="<?=ROOT?>/assets/js/jquery.3.6.4.js"></script>
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=ROOT?>/assets/lib/easing/easing.min.js"></script>
    <script src="<?=ROOT?>/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=ROOT?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=ROOT?>/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?=ROOT?>/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=ROOT?>/assets/js/main.js"></script>
</body>
<script>
    function submit_form(e)
    {
        e.preventDefault();

        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function(){
            
            if (ajax.readyState == 4 && ajax.status == 200)
            {
                let data = JSON.parse(ajax.responseText);

                if(typeof data == 'object')
                {   
                    if(!data.success)
                    {
                        for(key in data.errors)
                        {
                            // console.log(data.errors[key]);
                            alert(data.errors[key]);
                        }
                    }else{
                        alert(data.message);
                        window.location.reload();//Reloads the page
                    }
                }else
                {
                    console.log(ajax.responseText)
                }
            }
        });

        let myForm = new FormData(e.currentTarget);

        ajax.open('post','<?=ROOT?>/ajax', true);
        ajax.send(myForm);
    }
</script>
</html>