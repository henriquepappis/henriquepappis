import Head from 'next/head';
import Header from '../components/Header';
import About from '../components/About';
import Experience from '../components/Experience';
import Skill from '../components/Skill';
import Footer from '../components/Footer';

import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
    return (
        <div className="content">
            <Head>
                <title>Henrique Pappis - Desenvolvedor de Software</title>
                <meta name="viewport" content="initial-scale=1.0, width=device-width" />
            </Head>
            <Header />
            <About />
            <Experience />
            <Skill />
            <Footer />
        </div>
    );
};

export default App;