<x-layout title="Register New Staff">
    <x-navbar brand="Logistic"></x-navbar>


    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Register New Staff</h6>
                    <h1 class="mb-4">Only For Staff!</h1>
                    <p class="mb-4">If you are a customer, please visit <a href="/EasySend">EasySend</a> for pickup orders, or <a href="/TrackIt">TrackIt</a> for tracking your deliveries.</p>
                    <div class="bg-light p-4">
                        <form action="/register" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Your Name" name="nama">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('job') is-invalid @enderror" id="pekerjaan" placeholder="Your Job" name="pekerjaan">
                                        <label for="job">Your Job</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('staff_id') is-invalid @enderror" id="nomor_staff" placeholder="Staff ID" name="nomor_staff">
                                        <label for="staff_id">Staff ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="nomor_telpon" placeholder="Phone Number" name="nomor_telpon">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                                        <span class="password-toggle">
                                            <i class="fas fa-eye" id="toggle-password"></i>
                                        </span>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Merdeka No.168, RT.01/RW.05, Ciwaringin, Kecamatan Bogor Tengah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>081395956851</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>http://www.bsi.ac.id/</p>
                </div>                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('toggle-password');
    
        togglePasswordButton.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePasswordButton.classList.add('fa-eye-slash');
                togglePasswordButton.classList.remove('fa-eye');
            } else {
                passwordInput.type = 'password';
                togglePasswordButton.classList.add('fa-eye');
                togglePasswordButton.classList.remove('fa-eye-slash');
            }
        });
    </script>
</x-layout>