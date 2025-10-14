import React from 'react';

const Hero = () => {
    return (
        <div
            className="bg-image"
            style={{
                backgroundImage: "url('/hero.jpg')",
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                backgroundRepeat: 'no-repeat',
                height: '70vh',
                display: 'flex',
                alignItems: 'center',
                justifyContent: 'center',
            }}
        >
            <div className="text-white text-center">
                <h1 className="mb-3">Triply!</h1>
                <h4 className="mb-3">Travel Beyond Limit</h4>
                <a className="btn btn-outline-light btn-lg" href="#!" role="button">
                    Start Discover
                </a>
            </div>
        </div>
    );
};

export default Hero;
