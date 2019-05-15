/*eslint-disable*/
import React from "react";
// used for making the prop types of this component
import PropTypes from "prop-types";

// reactstrap components
import { Container, Row, Nav, NavItem, NavLink } from "reactstrap";

class Footer extends React.Component {
  render() {
    return (
      <footer className="footer">
        <Container fluid>
          <Nav>
            <NavItem>
              <NavLink target="_blank" href="https://creative-tim.com?ref=appseed">Creative Tim</NavLink>
            </NavItem>
            <NavItem>
              <NavLink target="_blank" href="https://appseed.us?ref=react-black-dashboard">AppSeed</NavLink>
            </NavItem>
            <NavItem>
              <NavLink target="_blank" href="https://blog.appseed.us?ref=react-black-dashboard">Blog</NavLink>
            </NavItem>
          </Nav>
          <div className="copyright">
            © {new Date().getFullYear()} {" "}
            Crafted by{" Creative Tim "}. Enhanced by {" "}

            <a target="_blank" href="https://appseed.us?ref=react-black-dashboard">AppSeed</a>
         
          </div>
        </Container>
      </footer>
    );
  }
}

export default Footer;
