import { Row, Col, Button } from "reactstrap";

const Skill = () => (
  <Row className="about">
    <Col md="2" />
    <Col md="5">
      <h3 className="title">Habilidades</h3>
      <Button className="tag" outline disabled>PHP</Button>
      <Button className="tag" outline disabled>Javascript</Button>
      <Button className="tag" outline disabled>Node.js</Button>
      <br />
      <Button className="tag" outline disabled>MySQL</Button>
      <Button className="tag" outline disabled>Postgres</Button>
      <Button className="tag" outline disabled>SQL Server</Button>
      <br />
      <Button className="tag" outline disabled>Laminas</Button>
      <Button className="tag" outline disabled>Yii Framework</Button>
      <Button className="tag" outline disabled>CodeIgniter</Button>
      <Button className="tag" outline disabled>Laravel</Button>
      <br />
      <Button className="tag" outline disabled>Docker</Button>
      <Button className="tag" outline disabled>Git</Button>
      <Button className="tag" outline disabled>Linux</Button>
      <Button className="tag" outline disabled>Google Pub/Sub</Button>
      <Button className="tag" outline disabled>Kubernetes</Button>
      <br />
      <Button className="tag" outline disabled>Bootstrap</Button>
      <Button className="tag" outline disabled>CSS</Button>
      <Button className="tag" outline disabled>React</Button>
      <br />
      <Button className="tag" outline disabled>Scrum</Button>
      <br />
      <br />
    </Col>
    <Col md="3">
      <h3 className="title">Idiomas</h3>
      <Button className="tag" outline disabled>Português</Button>
      <Button className="tag" outline disabled>Inglês</Button>
      <h3 className="title">Interesses</h3>
      <Button className="tag" outline disabled>Grêmio</Button>
      <Button className="tag" outline disabled>Churrasco</Button>
      <Button className="tag" outline disabled>Tecnologia</Button>
      <Button className="tag" outline disabled>Games</Button>
      <Button className="tag" outline disabled>Netflix</Button>
      <br />
      <br />
    </Col>
    <Col md="2" />
  </Row>
);

export default Skill;
