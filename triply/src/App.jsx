import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './pages/Home';
import DefaultLayout from './layouts/DefaultLayout';
import Trips from './pages/Trips';
import TripDetail from './pages/TripDetail';

function App() {
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route element={<DefaultLayout />}>
                        <Route index element={<Home />} />
                        <Route path="/trips" element={<Trips />} />
                        <Route path="trip/:id" element={<TripDetail />} />
                        <Route path="/categories" element={<Trips />} />
                        <Route path="categories/:id" element={<TripDetail />} />
                    </Route>
                </Routes>
            </BrowserRouter>
        </>
    );
}

export default App;
