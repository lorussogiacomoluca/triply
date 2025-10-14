import React, { useEffect, useState } from 'react';
import axios from 'axios';
import CategoryCard from '../components/CategoryCard/CategoryCard';

const Categories = () => {
    const [categories, setCategories] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get('http://127.0.0.1:8000/api/categories/')
            .then((res) => {
                setCategories(res.data.data);
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
                <h2>Caricamento categorie...</h2>
            </div>
        );
    }

    return (
        <div className="container py-5 mt-5">
            <h1 className="text-center mb-5">Tutte le Categorie</h1>
            <div className="row g-4">
                {categories.map((category) => (
                    <div key={category.id} className="col-md-6 col-lg-4">
                        <CategoryCard category={category} />
                    </div>
                ))}
            </div>
        </div>
    );
};

export default Categories;
