import Image from "next/image";
import Link from "next/link";
import { Row, Col, Button } from "reactstrap";
import { faGithubAlt, faLinkedinIn, faSkype } from "@fortawesome/free-brands-svg-icons";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

const Header = () => (
  <Row>
    <Col md="9">
      <p className="presentation">
        <h3>OLÁ! EU SOU</h3>
        <h1 className="name">Henrique Pappis.</h1>
        <br />
        <h4>Desenvolvedor de Sofware.</h4>
      </p>
    </Col>
    <Col md="3" className="bio">
      <div style={{ marginTop: "25px" }}>
        <Image src="/img/perfil.png" width="150px" height="150px" style={{ marginTop: "50px" }} />
      </div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>
        <h3>Henrique Pappis</h3>
      </div>
      <div>&nbsp;</div>
      <div>
        <h6>
          Pós Graduando em
          <br />
          Engenharia de Software
          <br />
          {" "}
          Porto Alegre, RS
        </h6>
      </div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>
        <h6>
          falecom@henriquepappis.com
          {" "}
          <br />
          +55 51 99760-0535
        </h6>
      </div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <Row>
        <Col md="12">
          <Link href="http://github.com/henriquepappis">
            <a className="social" target="_blank" style={{ color: "inherit", textDecoration: "inherit" }}>
              <FontAwesomeIcon className="fa-lg" icon={faGithubAlt} />
            </a>
          </Link>
          <Link href="http://linkedin.com/in/henriquepappis">
            <a className="social" target="_blank" style={{ color: "inherit", textDecoration: "inherit" }}>
              <FontAwesomeIcon className="fa-lg" icon={faLinkedinIn} />
            </a>
          </Link>
          <Link href="skype:live:henriquepappis?call">
            <a className="social" target="_blank" style={{ color: "inherit", textDecoration: "inherit" }}>
              <FontAwesomeIcon className="fa-lg" icon={faSkype} />
            </a>
          </Link>
        </Col>
      </Row>
      <div>&nbsp;</div>
      <Button className="download">&nbsp;&nbsp;Baixar CV&nbsp;&nbsp;</Button>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
    </Col>
  </Row>
);

export default Header;
