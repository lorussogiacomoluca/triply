import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';
import TripCard from '../components/TripCard/TripCard';

const CategoryDetail = () => {
    const { id } = useParams();
    const [category, setCategory] = useState(null);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get(`http://127.0.0.1:8000/api/categories/${id}`)
            .then((res) => {
                setCategory(res.data.data);
                setLoading(false);
            })
            .catch((err) => {
                console.error(err);
                setLoading(false);
            });
    }, [id]);

    if (loading) {
        return (
            <div className="container mt-5 pt-5 text-center">
                <h2>Caricamento categoria...</h2>
            </div>
        );
    }

    if (!category) {
        return (
            <div className="container mt-5 pt-5 text-center">
                <h2>Categoria non trovata</h2>
            </div>
        );
    }

    return (
        <div className="mt-5 pt-4">
            <div className="py-5 text-center text-light">
                <div className="container">
                    <h1 className="fw-bold">{category.name}</h1>
                    <p className="lead mt-3">{category.description}</p>
                </div>
            </div>
            <hr />
            <div className="container py-5">
                <h2 className="text-center mb-5">Viaggi nella categoria "{category.name}"</h2>
                {category.trips && category.trips.length > 0 ? (
                    <div className="row g-4">
                        {category.trips.map((trip) => (
                            <div key={trip.id} className="col-md-6 col-lg-4">
                                <TripCard trip={trip} />
                            </div>
                        ))}
                    </div>
                ) : (
                    <div className="text-center text-secondary">
                        <p>Nessun viaggio disponibile per questa categoria.</p>
                    </div>
                )}
            </div>
        </div>
    );
};

export default CategoryDetail;
