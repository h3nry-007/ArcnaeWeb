<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
    <title>Arcane</title>
    <script>
    function showAlert() {
        alert('Sorry, this is just a test button!');
    }
</script>
</head>
<body>
       <!-- nav bar -->
       <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d21a1;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">Arcane</a>
            <!-- Toggle Button-->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Sidebar Here -->
            <div class="sidebar text-black offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!-- Sidebar Header -->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Arcane</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Sidebar Body -->
                <div class="offcanvas-body text-black">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                       <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#partners">Our Partners</a>
                        </lipartners
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#contact">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#about">About</a>
                        </li>
                    </ul>
                </div> <!-- Sidebar body End Here -->
            </div> <!-- Sidebar Header End Here -->
        </div> <!-- Navbar End Here -->
    </nav> 

    <!-- Home Body  -->
    <div id="home" class="container-fluid banner" >
            <div class="col-md-8 offset-md-2 info">
				<h1 class="text-center text-white">ARCANE SecNet</h1>
				<p class="text-center">"Securing Your Digital Future with Cutting-Edge Cybersecurity Solutions."</p>
				<a href="#contact" class="btn btn-md text-center">GET STARTED</a>
			</div>
        
    </div>
    <!-- Home Body End  -->

    <!-- Service Body Start -->
    <div class="container" id="service">
        <h1 class="text-center pt-10px">What we do</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 py-5">

            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/first-web.jpg') }}" alt="Web Pentest Image">
                    <div class="card-body">
                        <h5 class="card-title">Web Application Security </h5>
                        <p class="card-text">Protect your web applications from vulnerabilities and ensure safe and secure user interactions with our comprehensive web security services.</p>
                        <a href="#contact" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/second-mobile.jpg') }}" alt="Mobile Application Image">
                    <div class="card-body">
                        <h5 class="card-title">Mobile Application Security </h5>
                        <p class="card-text">Safeguard your mobile apps against potential threats and provide a secure user experience with our expert mobile security solutions.</p>
                        <a href="#contact" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/third-network.jpg') }}" alt="Network Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Network Security </h5>
                        <p class="card-text">Fortify your network infrastructure against unauthorized access and cyber attacks with our advanced network security strategies.</p>
                        <a href="#contact" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/endpointsec.png') }}" alt="Endpoint Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Endpoint Security </h5>
                        <p class="card-text">Secure all endpoints in your organization, from desktops to mobile devices, with our robust endpoint protection solutions.</p>
                        <a href="#contact" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

        </div><!--  Main Column  -->
    </div> <!-- Container End Here --> 
    <!-- Service Body End Here-->

     <!-- Partners Body -->
    <div id="partners">
    <div class="container">
        <h1 class="text-center white pt-10px">Our Partners</h1>
        
        <div class="row row-cols-1 row-cols-md-4 g-4 py-5">
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/fortinet.jpeg') }}" alt="Fortinet">
                    <div class="card-body">
                        <h5 class="card-title"> Fortinet</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="https://www.fortinet.com" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/juniper.jpeg') }}" alt="Mobile Application Image">
                    <div class="card-body">
                        <h5 class="card-title">Juniper Network</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="https://www.juniper.net" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/paloalto.png') }}" alt="Network Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Palo Alto</h5>
                        <a href="https://www.paloaltonetworks.com" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/oracle.png') }}" alt="Web Pentest Image">
                    <div class="card-body">
                        <h5 class="card-title">Oracle</h5>
                        <a href="https://www.oracle.com/" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/trendmicro.png') }}" alt="Mobile Application Image">
                    <div class="card-body">
                        <h5 class="card-title">Trend Micro</h5>
                        <a href="https://www.trendmicro.com/en_us/business.html" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/cisco.jpg') }}" alt="Network Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Cisco</h5>
                        <a href="https://www.cisco.com" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/portswigger.jpg') }}" alt="Web Pentest Image">
                    <div class="card-body">
                        <h5 class="card-title">Port Swigger</h5>
                        <a href="https://portswigger.net" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/wireshark.png') }}" alt="Web Pentest Image">
                    <div class="card-body">
                        <h5 class="card-title">Wireshark</h5>
                        <a href="https://www.wireshark.org" class="btn btn-primary">Go Website</a>
                    </div>
                </div>
            </div>
        </div><!--  Main Column  -->
    </div>
    </div> 
    <!-- Partners Body End -->

    <!-- Clients Body Start -->
    <div class="container clients" >
        <h1 class="text-center pt-10px">Our Clients</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 py-5">

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/speed-x.png') }}" alt="Web Pentest Image">
                    <div class="card-body">
                        <h5 class="card-title">Speed X - Fiber Internet</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/abc-bank.png') }}" alt="Mobile Application Image">
                    <div class="card-body">
                        <h5 class="card-title">ABC Bank</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/connect.png') }}" alt="Network Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Connect Telecom </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/ep.png') }}" alt="Network Security Image">
                    <div class="card-body">
                        <h5 class="card-title">Enjoy Purchase</h5>
                    </div>
                </div>
            </div>
        </div><!--  Main Column  -->
    </div> <!-- Clients Section End -->

    <div id='contact'>
        <div class="form-area">
            <div class="container">
                <div class="row single-form g-0">
                    <div class="col-sm-12 col-lg-6">
                        <div class="left">
                            <h2><span>Contact Us for</span> <br>Business Enquies</h2>
                            <p class="text-white ">info@arcanesecnet.com</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                        <i class="fa fa-caret-left"></i>
                            <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="showAlert()" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact US End Here-->

    <div id="about">
        <h1 class="text-center pt-10px">What we are</h1>
        <section class="py-5">
	<div class="container">
		<div class="row align-items-center gx-4">
			<div class="col-md-5">
				<div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="{{ asset('images/about.png') }}"></div>
			</div>
			<div class="col-md-6 offset-md-1">
				<div class="ms-md-2 ms-lg-5">
					<span class="text-muted">Our Story</span>
					<h2 class="display-5 fw-bold">About Us</h2>
                    <p>Arcane SecNet is a company dedicated to providing comprehensive cybersecurity services, including Web Security, Mobile Pentesting, Network Security, and Endpoint Security. Our team of skilled professionals is committed to safeguarding your digital assets and ensuring the security of your online presence.</p>
                    <p>Founded by a group of passionate youths from the local community, Arcane SecNet aims to empower businesses and individuals with top-notch cybersecurity solutions. We believe in the importance of protecting sensitive information and strive to deliver the highest standards of service to our clients.</p>
					
				</div>
			</div>
		</div>
	</div>
</section>
    </div>
    
    <!-- Footer Start  -->
    <footer class="py-4">
	<div class="">
		<div class="d-lg-flex justify-content-around align-items-center py-3 py-lg-2">
			<div class="small mb-2 mb-lg-0">
				<p class="text-white mb-0 me-5 ">© 2024 Arcane SecNet. All rights reserved.</p>
			</div>
			<div class="d-flex small align-items-end justify-content-between">
				<div>
					<a class="d-block d-lg-inline text-white ms-lg-3 mb-2 mb-lg-0" href="#home">Home</a> 
                    <a class="d-block d-lg-inline text-white ms-lg-3 mb-2 mb-lg-0" href="#service">Services</a> 
                    <a class="d-block d-lg-inline text-white ms-lg-3 mb-2 mb-lg-0" href="#partners">Partners</a> 
                    <a class="d-block d-lg-inline text-white ms-lg-3 mb-2 mb-lg-0" href="#contact">Contact us</a>
                    <a class="d-block d-lg-inline text-white ms-lg-3" href="#about">About us</a>
				</div>
			</div>
		</div>
	</div>
    </footer>
<!-- Footer End -->
</body>
</html>