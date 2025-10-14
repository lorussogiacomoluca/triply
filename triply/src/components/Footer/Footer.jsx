import React from 'react';

const Footer = () => {
    return (
        <footer className="text-center text-muted border-top">
            {/* Section: Social media */}
            <section className="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                {/* Left */}
                <div className="me-5 d-none d-lg-block">
                    <span>Connect with us on social media:</span>
                </div>

                {/* Right */}
                <div>
                    <a href="#" className="me-4 text-reset">
                        <i className="fab fa-facebook-f"></i> Facebook
                    </a>
                    <a href="#" className="me-4 text-reset">
                        <i className="fab fa-twitter"></i> Twitter
                    </a>
                    <a href="#" className="me-4 text-reset">
                        <i className="fab fa-instagram"></i> Instagram
                    </a>
                    <a href="#" className="me-4 text-reset">
                        <i className="fab fa-youtube"></i> YouTube
                    </a>
                    <a href="#" className="me-4 text-reset">
                        <i className="fab fa-linkedin"></i> LinkedIn
                    </a>
                </div>
            </section>

            {/* Section: Links */}
            <section>
                <div className="container text-center text-md-start mt-5">
                    <div className="row mt-3">
                        {/* Company */}
                        <div className="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4">Triply</h6>
                            <p>Your gateway to unforgettable journeys and amazing adventures around the world.</p>
                        </div>

                        {/* Services */}
                        <div className="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4">Services</h6>
                            <p>
                                <a href="#" className="text-reset">
                                    Vacation Packages
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    Flight Booking
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    Hotel Reservation
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    Travel Guides
                                </a>
                            </p>
                        </div>

                        {/* Useful links */}
                        <div className="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4">Useful links</h6>
                            <p>
                                <a href="#" className="text-reset">
                                    About Us
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    Blog
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    FAQ
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset">
                                    Contact
                                </a>
                            </p>
                        </div>

                        {/* Contact */}
                        <div className="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 className="text-uppercase fw-bold mb-4">Contact</h6>
                            <p>
                                <i className="fas fa-map-marker-alt me-3"></i> 123 Travel St, New York, NY 10012, US
                            </p>
                            <p>
                                <i className="fas fa-envelope me-3"></i> info@triply.com
                            </p>
                            <p>
                                <i className="fas fa-phone me-3"></i> +1 234 567 890
                            </p>
                            <p>
                                <i className="fas fa-globe me-3"></i> www.triply.com
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {/* Copyright */}
            <div className="text-center p-4 mt-4">© 2025 Triply. All rights reserved.</div>
        </footer>
    );
};

export default Footer;
