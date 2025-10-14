import React from 'react';
import { Link } from 'react-router-dom';

const TripCard = ({ trip }) => {
    if (!trip) {
        console.log('TripCard: trip è undefined!');
        return null;
    }

    console.log('TripCard ricevuto:', trip);

    const imageUrl = trip.cover_image?.startsWith('http')
        ? trip.cover_image
        : `http://127.0.0.1:8000/storage/${trip.cover_image}`;

    return (
        <div className="card h-100 shadow-sm">
            <img
                src={imageUrl}
                className="card-img-top"
                alt={trip.title}
                style={{ height: '200px', objectFit: 'cover' }}
            />
            <div className="card-body d-flex flex-column">
                <h5 className="card-title">{trip.title}</h5>
                <p className="card-text">
                    <strong>Destinazione:</strong> {trip.destination}
                </p>
                <p className="card-text">
                    <strong>Date:</strong> {trip.start_date} - {trip.end_date}
                </p>
                <p className="card-text text-truncate">{trip.description}</p>
                <div className="mt-auto">
                    <p className="card-text">
                        <strong>Prezzo:</strong> €
                        {parseFloat(trip.price).toLocaleString('it-IT', { minimumFractionDigits: 2 })}
                    </p>
                    <Link to={`/trip/${trip.id}`} className="btn btn-outline-warning w-100">
                        Vedi Dettagli
                    </Link>
                </div>
            </div>
        </div>
    );
};

export default TripCard;
