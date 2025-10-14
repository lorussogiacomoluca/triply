import React, { useEffect, useState } from 'react';
import axios from 'axios';
import TripCard from '../components/TripCard/TripCard';

const Trips = () => {
    const [trips, setTrips] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get('http://127.0.0.1:8000/api/trips/')
            .then((res) => {
                setTrips(res.data.data);
                setLoading(false);
            })
            .catch((err) => {
                console.error(err);
                setLoading(false);
            });
    }, []);

    if (loading) {
        return (
            <div className="container mt-5 pt-5 text-center">
                <h2>Caricamento viaggi...</h2>
            </div>
        );
    }

    return (
        <div className="container py-5 mt-5">
            <h1 className="text-center mb-5">I Nostri Viaggi</h1>
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

export default Trips;
