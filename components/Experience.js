import { Row, Col } from "reactstrap";

const Experience = () => (
  <Row className="experience-box">
    <Col md="2" />
    <Col md="5">
      <h3 className="title">Experiência</h3>
      <p className="experience-description">
        <h6><strong>2019 - 2021</strong></h6>
        <h6>Incoders Tecnologia | Desenvolvedor de Software</h6>
      </p>
      <br />
      <p className="experience-description">
        <h6><strong>2016 - 2019</strong></h6>
        <h6>Simers | Analista Desenvolvedor</h6>
      </p>
      <br />
      <p className="experience-description">
        <h6><strong>2008 - 2014</strong></h6>
        <h6>Sescon/RS | Desenvolvedor PHP</h6>
      </p>
      <br />
    </Col>
    <Col>
      <h3 className="title">Formação</h3>
      <p className="formation-description">
        <h6><strong>2019 - 2021</strong></h6>
        <h6>Faculdade Unyleya</h6>
        <h6>Pós Graduação Engenharia de Software</h6>
      </p>
      <br />
      <p className="formation-description">
        <h6><strong>2004 - 2012</strong></h6>
        <h6>Faculdade Dom Bosco de Porto Alegre</h6>
        <h6>Sistemas de Informação</h6>
      </p>
    </Col>
  </Row>
);

export default Experience;
