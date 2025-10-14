import React from 'react';
import { Link } from 'react-router-dom';

const CategoryCard = ({ category }) => {
    return (
        <div className="card h-100 bg-dark border-secondary shadow-sm">
            <div className="card-body d-flex flex-column">
                <h4 className="card-title text-warning mb-3">{category.name}</h4>
                <p className="card-text flex-grow-1">{category.description}</p>
                <Link to={`/categories/${category.id}`} className="btn btn-outline-warning mt-auto">
                    Esplora
                </Link>
            </div>
        </div>
    );
};

export default CategoryCard;
