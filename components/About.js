import { Row, Col } from "reactstrap";

const About = () => (
  <Row className="about">
    <Col md="2" />
    <Col md="8">
      <h3 className="title">Sobre</h3>
      <h6 className="about-description">
        Profissional formado em Sistemas de Informação, Pós Graduando em Engenharia de Software,
        atua com desenvolvimento PHP desde 2007. Atuou em diversos projetos, trás em sua bagagem
        atuação com diversas tecnologias, como PHP, Javascript, Banco de Dados, Docker, Kubernetes,
        e outras. Possui uma boa comunicação verbal e bom entendimento da lógica de programação
        fazendo com que o profissional tenha uma curva rápida de aprendizado para qualquer
        tecnologia que se proponha a trabalhar.
      </h6>
      <br />
    </Col>
  </Row>
);

export default About;
