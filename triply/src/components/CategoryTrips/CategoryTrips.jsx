import React, { useEffect, useState } from 'react';
import axios from 'axios';
import TripCard from '../TripCard/TripCard';

const CategoryTrips = ({ categoryId = 3 }) => {
    const [trips, setTrips] = useState([]);
    const [categoryName, setCategoryName] = useState('');
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get(`http://127.0.0.1:8000/api/categories/${categoryId}`)
            .then((res) => {
                setCategoryName(res.data.data.name);
                setTrips(res.data.data.trips || []);
                setLoading(false);
            })
            .catch((err) => {
                console.error(err);
                setLoading(false);
            });
    }, [categoryId]);

    if (loading) {
        return (
            <div className="text-center py-5">
                <h4>Caricamento viaggi...</h4>
            </div>
        );
    }

    if (trips.length === 0) {
        return (
            <div className="text-center py-5">
                <h4>Nessun viaggio disponibile per la categoria "{categoryName}"</h4>
            </div>
        );
    }

    return (
        <div className="container py-5">
            <h2 className="text-center mb-5">Un salto nella {categoryName}</h2>
            <div className="row g-4">
                {trips.map((trip) => (
                    <div key={trip.id} className="col-md-6 col-lg-4">
                        <TripCard trip={trip} />
                    </div>
                ))}
            </div>
        </div>
    );
};

export default CategoryTrips;
