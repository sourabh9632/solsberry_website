<?php 

    $utm_source = (isset($_GET['utm_source']) ? $_GET['utm_source'] : '');
    $utm_medium = (isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '');
    $utm_term = (isset($_GET['utm_term']) ? $_GET['utm_term'] : '');
    $utm_content = (isset($_GET['utm_content']) ? $_GET['utm_content'] : '');
    $utm_campaign = (isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '');
    $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name ="title" content="Goyal Orchid Salisbury | Thanisandra Bangalore | Premium 2 & 3 BHK Apartments">
    <meta name ="description" content="Goyal Orchid Salisbury, a forthcoming high-rise apartment project by Goyal & Co Hariyana Group in North Bangalore's prime Thanisandra Main Road area, offers spacious, thoughtfully designed 2 and 3-bedroom apartments. Its contemporary design blends urban convenience with meticulous detail, seamlessly incorporating green surroundings"> 
    <meta name ="keywords" content="Goyal Orchid Salisbury , Thanisandra Bangalore , Premium 2 & 3 BHK Apartments">

    <title>Banglore-projects</title>
    <link rel="stylesheet" href="style.css">
    <link href="bootstarp_code/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="bootstarp_code/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="aos_animation/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/ohsnap.css" />

        <script src="aos_animation/aos.js"></script>

        

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo (1).png" class="img-fluid" style="width: 200px;"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#highlight">Highlights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plan">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aminity">Amenities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fulid">
            <!-- Button trigger modal -->
            
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">QUICK APPOINTMENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                        <!-- <form method="post" action="" name="contact-form" class="form2">
                            <h4>Contact Us</h4>
                            <input type="text" name="your-name" placeholder="Name">
                            <input type="text" name="your-number" placeholder="Number">
                            <input type="email" name="your-email" placeholder="Email">
                            <textarea name="message" rows="7" placeholder="Your Message"></textarea>
                            <input type="submit" value="Submit" id="submit">
                        </form> -->
                        <form class="form2" method="post" action="" name="contact-form">
                            <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" name="your-name" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="your-email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="number"  name="your-number" placeholder="Enter your phone-number">
                              </div>

                                <input type="hidden" name="form_name" value="Footer Form">
                                <input type="hidden" name="utm_source" value="<?php echo $utm_source; ?>">
                                <input type="hidden" name="utm_medium" value="<?php echo $utm_medium; ?>">
                                <input type="hidden" name="utm_term" value="<?php echo $utm_term; ?>">
                                <input type="hidden" name="utm_content" value="<?php echo $utm_content; ?>">
                                <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>">
                                <input type="hidden" name="pageUrl" value='<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>

                              <input type="submit" value="Submit" class="btn btn-primary" id="submit">
                          </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   
                    </div>
                </div>
                </div>
            </div>

        <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/orchidweb.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
              </div>
              
            </div>
            
            <div class="overlay"></div>
          </div> -->
          <div class="header" id="home">
            <div class="overlay"></div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-7 mt-5" >
                        
                        <h3>GOYAL ORCHID SALISBURY</h3>
                        <h2>THANISANDRA BANGALORE</h2>
                        <hr>
                         
                        <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>Premium 2 & 3 BHK Apartments</b></button><br/>
                        <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>Starting Price : ₹ 93 Lacs</b>  </button>
                      </div>
                  <div class="col-lg-5 mt-5">
                    <!-- <form class="form1" method="post" action="" name="contact-forms">
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" name="your-name" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="your-email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" id="number"  name="your-number" placeholder="Enter your phone-number">
                          </div>
                          <input type="submit" value="Submit" class="btn btn-primary" id="submit">
                      </form> -->
                      <div class="contact-form">
                        <h1 class="title">Contact Us</h1>
                        <h2 class="subtitle">We are here assist you.</h2>
                        <!-- <form action="" method="post" action="" name="contact-form">
                            <input type="text" name="your-name" placeholder="Your Name" />
                            <input type="email" name="your-email" placeholder="Your E-mail Adress" />
                            <input type="tel" name="your-number" placeholder="Your Phone Number"/>
                           
                            <button class="btn-send">Get a Call Back</button>
                        </form> -->
                        <button class="btn-send" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get a Call Back <i class="fa-solid fa-phone-volume fa-shake fa-2xl"></i></button>
                    </div>
                  </div>
                  
                </div>
              </div>


          </div>

        <div class="about_us mt-5" id="about">
            <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div>
                            <h2 class="header_name " data-aos="fade-up">About US</h2>
                        </div>
                    </div>

                </div>
                <div class="container px-4 mt-3">
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="p-3"><img src="images/orchidweb.webp" alt="" class="img-fluid image1" data-aos="fade-up"
                                data-aos-duration="3000"></div>

                        </div>
                        <div class="col-lg-6" >
                            <div class=" text-start">WHO ARE WE</div>
                            <h3 class="text-start">MAKES YOUR SELF AT HOME AND ENJOY A UNIQUE EXPERIENCE</h3>
                            <p class="text-start">Goyal Orchid Salisbury, a forthcoming high-rise apartment project by
                                Goyal & Co Hariyana Group in North Bangalore's prime Thanisandra Main Road area, offers
                                spacious, thoughtfully designed 2 and 3-bedroom apartments. Its contemporary design
                                blends urban convenience with meticulous detail, seamlessly incorporating green
                                surroundings. Amenities like a clubhouse, fitness center, and gardens provide ample
                                relaxation opportunities. Its proximity to educational and healthcare facilities, along
                                with shopping centers, makes it an ideal choice for families, fostering a vibrant
                                community feel. Goyal Orchid Salisbury isn't just housing; it's a lifestyle statement
                                that redefines luxury living in North Bangalore, promising comfort and convenience in a
                                modern setting with RERA approval &nbsp;<a href="£" data-bs-toggle="modal" data-bs-target="#staticBackdrop">konw more</a></p>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="highlights" style="background-color: #f9dc5c; " id="highlight">



            <div class="container p-5 mt-5">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class=" text-start">HIGHLIGHTS</div>
                        <h3 class="text-start">DISCOVER THE FINEST FEATURES AND FINISHES</h3>
                        <p class="text-start">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a>Senior citizen garden</a>
                            </li>
                            <li class="nav-item">
                                <a>Suitable Size and Capacity Passenger and Service Lifts in Every Block &
                                    Tower.</a>
                            </li>
                            <li class="nav-item">
                                <a>Meticulously planned with utmost importance to state of the art 24/7
                                    securities</a>
                            </li>
                            <li class="nav-item">
                                <a>Amenities at Orchid Piccadilly include a fully equipped clubhouse, landscaped
                                    gardens, gymnasium, swimming pool, recreation rooms, outdoor sports courts,
                                    children's play area,</a>
                            </li>
                        </ul>
                        </p>

                    </div>
                    <div class="col-lg-6">
                        <div class="p-3"><img src="images/gallery7.jpg" alt="" class="img-fluid image1"data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1500">


                        </div>

                    </div>
                     
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Know More 
                    </button>

                </div>

            </div>






        </div>

        <div class="marquee mt-5 mb-5">
            <span class="marks">Goyal Orchid Salisbury</span>

        </div>

        <div class="table_container">
            <div class="container">
            <div class="row">
               
                <div class="col-lg-6">
                    <div class="message-box right-ab table-striped ">
                        <table class="table">
                            <thead>
                               
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Project Name</th>
                                <td>Orchid Salisbury</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Project Status</th>
                                <td>Pre - Launch</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Approval </th>
                                <td>RERA Approved BBMP Approved Bank Approved</td>
     
                              </tr>
                              <tr>
                                <th scope="row">RERA Approval No. </th>
                                <td>PRM/KA/RERA/1251/309/PR/271123/006440</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Developed Type </th>
                                <td>Banglore Residential high Rise Apartment</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Total Land Area </th>
                                <td>6.03 Acers</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Total No. of Units </th>
                                <td>660</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Towers & Blocks </th>
                                <td>7 Towers</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Elevation </th>
                                <td>Ground + 14 Floors</td>
     
                              </tr>
    
                              <tr>
                                <th scope="row">Unit Variants </th>
                                <td>2BHK, 2.5BHK, 3BHK</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Unit Size Range </th>
                                <td>900 Sqt.ft - 1700Sq.ft</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Price </th>
                                <td>ON request</td>
     
                              </tr>
    
                              <tr>
                                <th scope="row">Possession </th>
                                <td>Dec 2028 Onwards</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Location  </th>
                                <td>Thanisandra Main Road Bangalore North</td>
     
                              </tr>
                              <tr>
                                <th scope="row">Landmark </th>
                                <td>Opposite KNS Institute of Technology</td>
     
                              </tr>
                            </tbody>
                          </table>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Know More 
                        </button>
    
                    </div>
                </div>
                <div class="col-lg-6">
                     
                    <br/>
                    <div class="post-media wow fadeIn mt-4"  style="visibility: visible; animation-name: fadeIn;">
                        <img src="images/gallery8.jpg" alt="" class="img-fluid image1">                        
                    </div> 
                </div>
            </div>
        </div>
    
        </div>




        <div class="PRICE SECTION">



            <div class="container p-5 mt-5">
                <div class="row gx-5">
                    <div class="col-lg-12"data-aos="flip-up"
                    data-aos-easing="ease-out"
                    data-aos-duration="2000">
                        <div class=" text-start">PRICE SECTION</div>
                        <h3 class="text-start">UNLOCK THE DOOR TO AFFORDABLE LUXURY</h3>
                    </div>


                </div>

                <div class="container mt-4">
                    <div class="row ">
                        <div class="col-lg-3 mt-3">
                            <div class="card"data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
                                <i class="fa-solid fa-house icons"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title">2 BHK - COMPACT</h5>
                                    <p class="card-text">₹88 Lacs* Onwards</p>
                                    <p class="card-text">Size- 930 sq.ft.</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card"data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
                                <i class="fa-solid fa-house icons"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title">2 BHK LUXURY</h5>
                                    <p class="card-text">₹1 Cr* Onwards</p>
                                    <p class="card-text">Size- 1185 - 1275 sq.ft</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card"data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
                                <i class="fa-solid fa-house icons"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title">3 BHK + 2T</h5>
                                    <p class="card-text">₹1.43 Cr* Onwards</p>
                                    <p class="card-text">Size- 1430 sq.ft</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card"data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
                                <i class="fa-solid fa-house icons"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title">3 BHK + 3T</h5>
                                    <p class="card-text">₹1.65 Cr* Onwards</p>
                                    <p class="card-text">Size- 1650 sq.ft</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Know More</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>

        <div class="our_works" id="plan">
            <div class="container p-5 mt-5">
                <div class="row gx-5 text-center">
                    <div class="col-lg-12">
                        <div class="   text-white">OUR WORKS</div>
                        <h3 class=" text-white">ORCHID SALISBURY MASTER PLAN</h3>


                    </div>

                    <div class="col-lg-12">
                        <div class="text"><img src="images/main.jpeg" alt="" class="img-fluid image1"data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">



                        </div>

                    </div>

                </div>

                <div class="container text-center mt-5">
                    <h3 class=" text-white">ORCHID SALISBURY FLOOR PLAN</h3>
                    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                        
                        <div class="col-6 col-lg-3">
                            <div><img src="images/master.jpeg" alt="" class="img-fluid image1"data-aos="fade-up"
                                data-aos-anchor-placement="bottom-bottom"></div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/floor.jpeg" alt="" class="img-fluid image1"data-aos="fade-up"
                                data-aos-anchor-placement="bottom-bottom"></div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/floor-1.jpeg" alt="" class="img-fluid image1"data-aos="fade-up"
                                data-aos-anchor-placement="top-center"></div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/floor-2.jpeg" alt="" class="img-fluid image1"data-aos="fade-up"
                                data-aos-anchor-placement="top-center"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-radius grd1 btn-brd" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 28px;">
                    Know More
                    </button>
                </div>

            </div>


        </div>

        <div class="aminites" id="aminity">
            <div class="container p-5 mt-5">
                <div class="row gx-5 text-center">
                    <div class="col-lg-12">
                        <div class="text-start">OUR AMENITIES</div>
                        <h3 class="text-start">AMENITIES THAT DEFINE EXCELLENCE</h3>


                    </div>

                    

                </div>

                <div class="container text-center mt-5">
                    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                        <div class="col-6 col-lg-3">
                            <div><img src="images/7.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Swimming Pool</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/8.webp" alt="" class="img-fluid image1" data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Gymnasium</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/1.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Kids Zone</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/11.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Yoga</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/12.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Club House</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/9.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6">Spa</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/14.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6">CCTV</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/15.webp" alt="" class="img-fluid image1"data-aos="zoom-in"
                                data-aos-duration="3000"></div>
                            <p class="text-center fs-6"> Basketball Court</p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-radius grd1 btn-brd" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 28px;">
                        Know More
                        </button>
                </div>
                
                
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="but1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Know More
                        </button>
                    </div>
                    
                </div>
            </div> -->

        </div>


        <div class="gallery text-center" id="gallery">
            <div class="container p-5 mt-5">
                <div class="row gx-5 text-center">
                    <div class="col-lg-12">
                        <div class="text-start">LUXURY EXPERIENCE</div>
                        <h3 class="text-start">GALLERY</h3>


                    </div>

                    

                </div>

                <div class="container mt-3">
                    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery1.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                         
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery10.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                        
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery11.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                     
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery12.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                     
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery13.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                      
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery5.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
              
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery8.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                
                        </div>
                        <div class="col-6 col-lg-3">
                            <div><img src="images/gallery11.jpg" alt="" class="img-fluid image1"data-aos="flip-up"
                                data-aos-duration="3000"></div>
                           
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-primary btn-radius grd1 btn-brd" data-toggle="modal"
                        data-target="#myModal" style="margin-top: 28px;">
                        Read More
                    </button> -->
                    
                </div>
                <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Know More
                </button>
            </div>
            

        </div>

        <div class="container mt-5" >
            <div class="row justify-content-center d-flex align-items-center">
        
                <div class="col-lg-6">
                    <div class="title">
                        <small data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">Location Advantages</small>
                        <h2 data-cue="slideInUp" data-delay="100" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 100ms; animation-direction: normal; animation-fill-mode: both;">Discover Your Perfect Place in the Perfect
                            Location</h2>
                        <div class="high-details">
                            <span><img class="location-icon" src="images/location.png" alt=""></span>
                            <p>Hebbal Flyover - 8 Kms</p>
                        </div>
                        <div class="high-details">
                            <span><img class="location-icon" src="images/location.png" alt=""></span>
                            <p>Manyata Tech Park - 6 Kms</p>
                        </div>
                        <div class="high-details">
                            <span><img class="location-icon" src="images/location.png" alt=""></span>
                            <p>Nagawara Junction - 6 kms</p>
                        </div>
                        <div class="high-details">
                            <span><img class="location-icon"  src="images/location.png" alt=""></span>
                            <p>
                                <!-- <span class="high-time"></span> -->
                                Kogilu Yelahanka Junction - 7 kms
                            </p>
                        </div>
                        <div class="high-details">
                            <span><img class="location-icon"  src="images/location.png" alt=""></span>
                            <p>Bagalur - 6 Kms</p>
                        </div>
        
                        <div class="high-details">
                            <span><img class="location-icon"  src="images/location.png" alt=""></span>
                            <p>Jakkur- 7 kms</p>
                        </div>
                        <!-- <div class="high-details">
                            <span><img class="" src="img/amenities/bus.png" alt=""></span>
                            <p><span class="high-time">30 Mins : </span> Charbagh Bus Stand</p>
                        </div> -->
                        <!-- <div class="high-details">
                            <span><img class="" src="img/amenities/university.png" alt=""></span>
                            <p><span class="high-time">20 Mins : </span> Babasaheb Bhimrao Ambedkar University</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="location-image">
                        <a href="images/location-map.png" class="with-caption image-link" title="Location">
                            <img src="images/location-map.png" alt="Floor Plan" class="img-fluid ">
                        </a>
                    </div>
                </div>
            </div>
        
        
        </div>
<hr/>
        <div class="contact_from mt-5" id="contact">
            <div class="highlights ">



                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="title">
                                <!-- <small>Luxury Experience</small> -->
                                <h4 class="mt-3">About Developer</h4>
                                <p>Goyal & Co., an esteemed brand with a legacy, has stood as a premier builder in Ahmedabad since 1971. Beyond merely constructing spaces, we perceive ourselves as creators of iconic landmarks that redefine living and workspaces. Over the past five decades, our prowess and growth have been evident through the successful completion of more than 300 projects.</p>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <h1 class="title">Contact Us</h1>
                                <h2 class="subtitle">We are here assist you.</h2>
                                <!-- <form action="" method="post" action="" name="contact-form">
                                    <input type="text" name="your-name" placeholder="Your Name" />
                                    <input type="email" name="your-email" placeholder="Your E-mail Adress" />
                                    <input type="tel" name="your-number" placeholder="Your Phone Number"/>
                                   
                                    <button class="btn-send">Get a Call Back</button>
                                </form> -->
                                <button class="btn-send" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get a Call Back</button>
                            </div>
                        </div>

                        
                    </div>
                   

                </div>
    
                </div>
    
    
    
    
    
    
            </div>
            <div class="footer mt-4">
                <div class="container">
                    <p>Disclaimer : This website is meant only for information purposes only. It should not be considered as an official site. This website belongs to authorised channel partner of Goyal & Co. All rights for logo & images are reserved by the respective builder. If anyone think that any content or graphics should not be here. So Please contact us and share your concern using the contact us form or the email provided at the bottom of privacy policy page. we will be happy to resolve that.
                        <br/>Privacy Policy : We collect information from you when you register on our site or fill out any form. During filling out a form on our site you may be asked to enter some of your details like name, e-mail address and phone number. You may, however, visit our site anonymously. Any information we collect from you is to personalize your experience and improve our website and customer service</p>
                </div>
               
            </div>
        </div>


       

    </div>

<div id="ohsnap"></div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="js/ohsnap.min.js"></script>

<!-- <script src="Googlesheet.js"></script> -->
<script src="bootstarp_code/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

          $('form').submit(function(event) {
              // Prevent the form from submitting the traditional way
              event.preventDefault();
              var form = $('form');
              
              // Serialize form data
              var formData = $(this).serialize();
              
              // Submit form data via AJAX
              $.ajax({
                  type: 'POST',
                  url: 'saveInfo.php', // Change this to your server endpoint
                  data: formData,
                  success: function(response) {
                      // Handle success
                    ohSnap('Form submitted successfully', {color: 'green'});
                    // form[0].reset()

                    setTimeout(function(){
                        // window.location = 'thankyou.php';
                    },2000)

                      // Optionally, do something with the response

                  },
                  error: function(xhr, status, error) {
                      // Handle errors
                        ohSnap('Technical Error', {color: 'red'});
                      console.error('Error submitting form: ' + error);
                  }
              });

              //  $.ajax({
              //     type: 'POST',
              //     url: 'https://script.google.com/macros/s/AKfycbwGQRGZxIG5uAid0LtUs5jMGQ9UrayBKDr9Omtl84owZon99DS6pt9VY7Lmpm32-XdJJQ/exec', // Change this to your server endpoint
              //     data: new FormData(this),
              //     processData: false,

              //     success: function(response) {
              //         // Handle success
              //         console.log('Form submitted successfully');
              //         alert('Form submitted successfully')
              //         // form[0].reset()
              //         // Optionally, do something with the response
              //     },
              //     error: function(xhr, status, error) {
              //         // Handle errors
              //         console.error('Error submitting form: ' + error);
              //     }
              // });
            //  const scriptURL = 'https://script.google.com/macros/s/AKfycbwGQRGZxIG5uAid0LtUs5jMGQ9UrayBKDr9Omtl84owZon99DS6pt9VY7Lmpm32-XdJJQ/exec';


            //    fetch(scriptURL, { method: 'POST', body: new FormData(this)})
            //   .then(response => alert("Thank you! your form is submitted successfully." ))
            //   .then(() => { window.location.reload(); })
            //   .catch(error => console.error('Error!', error.message))

          });
      });
</script>

<script>
    AOS.init();
</script>

</body>

</html>