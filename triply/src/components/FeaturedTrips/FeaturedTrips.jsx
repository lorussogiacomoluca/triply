import React, { useEffect, useState } from 'react';
import axios from 'axios';
import TripCard from '../TripCard/TripCard';

const FeaturedTrips = () => {
    const [trips, setTrips] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get('http://127.0.0.1:8000/api/trips/')
            .then((res) => {
                // 3 piu' costosi
                const sortedTrips = res.data.data.sort((a, b) => parseFloat(b.price) - parseFloat(a.price)).slice(0, 3);
                setTrips(sortedTrips);
                setLoading(false);
            })
            .catch((err) => {
                console.error(err);
                setLoading(false);
            });
    }, []);

    if (loading) {
        return (
            <div className="text-center py-5">
                <h4>Caricamento viaggi...</h4>
            </div>
        );
    }

    return (
        <div className="container py-5">
            <h2 className="text-center mb-5">I 3 viaggi più venduti</h2>
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

export default FeaturedTrips;
