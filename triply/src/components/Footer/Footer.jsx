import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';

const Footer = () => {
    const [categories, setCategories] = useState([]);

    useEffect(() => {
        axios
            .get('http://127.0.0.1:8000/api/categories')
            .then((res) => setCategories(res.data.data))
            .catch((err) => console.error(err));
    }, []);

    return (
        <footer className="bg-dark text-light border-top mt-5 pt-5">
            <section className="d-flex justify-content-center justify-content-lg-between p-4 border-bottom border-secondary">
                <div className="me-5 d-none d-lg-block">
                    <span>Seguici sui social:</span>
                </div>
                <div>
                    <a href="#" className="me-4 text-warning text-decoration-none">
                        <i className="fab fa-facebook-f me-2"></i>Facebook
                    </a>
                    <a href="#" className="me-4 text-warning text-decoration-none">
                        <i className="fab fa-instagram me-2"></i>Instagram
                    </a>
                    <a href="#" className="me-4 text-warning text-decoration-none">
                        <i className="fab fa-youtube me-2"></i>YouTube
                    </a>
                    <a href="#" className="me-4 text-warning text-decoration-none">
                        <i className="fab fa-linkedin me-2"></i>LinkedIn
                    </a>
                </div>
            </section>

            <section>
                <div className="container text-center text-md-start mt-5">
                    <div className="row mt-3">
                        <div className="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4 text-warning">Triply</h6>
                            <p>Il tuo portale per esperienze di viaggio uniche e indimenticabili in tutto il mondo.</p>
                        </div>

                        <div className="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4 text-warning">Categorie</h6>
                            {categories.length > 0 ? (
                                categories.map((cat) => (
                                    <p key={cat.id}>
                                        <Link to={`/categories/${cat.id}`} className="text-reset text-decoration-none">
                                            {cat.name}
                                        </Link>
                                    </p>
                                ))
                            ) : (
                                <p className="text-muted">Caricamento...</p>
                            )}
                        </div>

                        <div className="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 className="text-uppercase fw-bold mb-4 text-warning">Link utili</h6>
                            <p>
                                <a href="#" className="text-reset text-decoration-none">
                                    Chi siamo
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none">
                                    Blog
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none">
                                    FAQ
                                </a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none">
                                    Contatti
                                </a>
                            </p>
                        </div>

                        <div className="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 className="text-uppercase fw-bold mb-4 text-warning">Contatti</h6>
                            <p>
                                <i className="fas fa-map-marker-alt me-3"></i> Via dei Viaggiatori 10, Roma, Italia
                            </p>
                            <p>
                                <i className="fas fa-envelope me-3"></i> info@triply.it
                            </p>
                            <p>
                                <i className="fas fa-phone me-3"></i> +39 06 1234 5678
                            </p>
                            <p>
                                <i className="fas fa-globe me-3"></i> www.triply.it
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <div className="text-center p-4 mt-4 border-top border-secondary">
                © 2025 Triply. Tutti i diritti riservati.
            </div>
        </footer>
    );
};

export default Footer;
