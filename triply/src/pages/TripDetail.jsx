import React, { useEffect, useState } from 'react';
import { Link, useParams } from 'react-router-dom';
import axios from 'axios';

const TripDetail = () => {
    const { id } = useParams();
    const [trip, setTrip] = useState(null);

    useEffect(() => {
        axios.get(`http://127.0.0.1:8000/api/trips/${id}`).then((res) => setTrip(res.data.data));
    }, [id]);

    if (!trip) return <div className="container mt-5 pt-5">Caricamento...</div>;

    return (
        <>
            {/* Hero Section */}
            <div
                className="bg-image"
                style={{
                    backgroundImage: `url(http://127.0.0.1:8000/storage/${trip.cover_image})`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                    backgroundRepeat: 'no-repeat',
                    height: '60vh',
                    display: 'flex',
                    alignItems: 'center',
                    justifyContent: 'center',
                }}
            >
                <div className="text-white text-center">
                    <h1 className="display-3 mb-3">{trip.title}</h1>
                    <h4 className="mb-3">{trip.destination}</h4>
                </div>
            </div>

            {/* Content Section */}
            <div className="container py-5">
                <div className="row">
                    <div className="col-lg-8 mx-auto">
                        <div className="card shadow-lg">
                            <div className="card-body p-5">
                                <div className="mb-4">
                                    <h2 className="mb-3">Dettagli del Viaggio</h2>
                                    <p className="lead">{trip.description}</p>
                                </div>

                                <div className="row mb-4">
                                    <div className="col-md-6 mb-3">
                                        <h5>
                                            <i className="fas fa-calendar-alt me-2"></i>Date
                                        </h5>
                                        <p className="text-muted">
                                            {trip.start_date} - {trip.end_date}
                                        </p>
                                    </div>
                                    <div className="col-md-6 mb-3">
                                        <h5>
                                            <i className="fas fa-map-marker-alt me-2"></i>Destinazione
                                        </h5>
                                        <p className="text-muted">{trip.destination}</p>
                                    </div>
                                </div>

                                {trip.category && (
                                    <div className="mb-4">
                                        <h5>Categoria</h5>
                                        <Link to={`/categories/${trip.category.id}`}>
                                            <span className="badge bg-warning fs-6">{trip.category.name}</span>
                                        </Link>
                                        <p className="text-muted mt-2">{trip.category.description}</p>
                                    </div>
                                )}

                                {trip.tags && trip.tags.length > 0 && (
                                    <div className="mb-4">
                                        <h5 className="mb-3">Tags</h5>
                                        <div className="d-flex flex-wrap gap-2">
                                            {trip.tags.map((tag) => (
                                                <span
                                                    key={tag.id}
                                                    className="badge fs-6 px-3 py-2"
                                                    style={{
                                                        backgroundColor: tag.color,
                                                        color: '#fff',
                                                    }}
                                                >
                                                    {tag.name}
                                                </span>
                                            ))}
                                        </div>
                                    </div>
                                )}

                                <div className="d-flex justify-content-between align-items-center mt-5">
                                    <div>
                                        <h3 className="mb-0">
                                            €
                                            {parseFloat(trip.price).toLocaleString('it-IT', {
                                                minimumFractionDigits: 2,
                                            })}
                                        </h3>
                                        <small className="text-muted">per persona</small>
                                    </div>
                                    <button className="btn btn-outline-warning btn-lg px-5">
                                        <i className="fas fa-shopping-cart me-2"></i>Prenota Ora
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default TripDetail;
