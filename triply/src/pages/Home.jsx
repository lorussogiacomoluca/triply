import React from 'react';
import TripCard from '../components/TripCard/TripCard';
import Hero from '../components/Header/Hero';

const Home = () => {
    return (
        <>
            <Hero />

            <div className="container mt-5">
                {/* titolo  */}
                <h1 className="text-center mb-4">Magnifici Viaggi</h1>

                {/* card */}
                <div className="row g-4 justify-content-center">
                    <div className="col-md-4 d-flex justify-content-center">
                        <TripCard />
                    </div>
                    <div className="col-md-4 d-flex justify-content-center">
                        <TripCard />
                    </div>
                    <div className="col-md-4 d-flex justify-content-center">
                        <TripCard />
                    </div>
                </div>
            </div>
        </>
    );
};

export default Home;
