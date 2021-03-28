import Header from '../components/Header';
import About from '../components/About';
import Experience from '../components/Experience';
import Skill from '../components/Skill';
import Footer from '../components/Footer';

import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
    return (
        <div className="content">
            <Header />
            <About />
            <Experience />
            <Skill />
            <Footer />
        </div>

    );
};

export default App;