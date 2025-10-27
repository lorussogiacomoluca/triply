import React from 'react';
import TripCard from '../components/TripCard/TripCard';
import Hero from '../components/Header/Hero';
import FeaturedTrips from '../components/FeaturedTrips/FeaturedTrips';
import CategoryTrips from '../components/CategoryTrips/CategoryTrips';

const Home = () => {
    return (
        <>
            <Hero />

            <div className="container mt-5">
                <div className="row g-4 justify-content-center">
                    <FeaturedTrips />
                    <CategoryTrips categoryId={3} />
                </div>
            </div>
        </>
    );
};

export default Home;
