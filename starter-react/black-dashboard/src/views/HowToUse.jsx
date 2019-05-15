import React from "react";

// reactstrap components
import { Card, CardHeader, CardBody, CardTitle, Row, Col } from "reactstrap";

class HowToUse extends React.Component {
  render() {
    return (
      <>
        <div className="content">
          <Row>
            <Col md="12">
              <Card>
                <CardHeader className="mb-5">
                  <h5 className="card-category">
                    Crafted by Creative-Tim, Enhanced by AppSeed
                  </h5>
                  <CardTitle tag="h3">
                    Free React Dashboard - released under MIT License
                  </CardTitle>
                </CardHeader>
                <CardBody>
                  <div className="typography-line">
                    <span>Product name</span>
                    <h1>
                      React Black Dashboard 
                    </h1>
                  </div>
                  <div className="typography-line">
                    <p>
                      <span>About</span>
                      Black Dashboard is a beautiful Bootstrap 4 Admin Dashboard with a huge number of components built to fit together and look amazing. 
                      <br />If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you. 
                      <br />It combines colors that are easy on the eye, spacious cards, beautiful typography, and graphics.
                    </p>
                  </div>
                  <div className="typography-line">
                    <blockquote>
                      <p className="blockquote blockquote-primary">
                        <br />{" git clone https://github.com/rosoftdeveloper/appseed "}
                        <br />{" cd appseed/starter-react/black-dashboard"}
                        <br />{" yarn # install dependencies "}
                        <br />{" yarn start # start the app in development mode "}
                        <br />{" yarn build # build the app for production "}
                        <br />{" yarn deploy # LIVE deployment via FTP. Info: Edit FTP credentials in deploy.js"}
                        <br />
                        <br />
                        <small>- How to use the app</small>
                      </p>
                    </blockquote>
                  </div>
                  <div className="typography-line">
                    <p>
                      <h4>Support</h4>
                      <h3>
                      <a target="_blank" rel="noopener noreferrer" href="https://github.com/rosoftdeveloper/appseed/issues">Github</a>{', '} 
                      Live Support via <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/fZC6hup">Discord</a>
                      </h3>
                    </p>
                  </div>

                  <div className="typography-line">
                    <p>
                      <span>Links</span>
                            <a target="_blank" rel="noopener noreferrer" href="https://blog.appseed.us/react-dashboards">React Dashboards - Blog Article</a>
                      <br /><a target="_blank" rel="noopener noreferrer" href="https://react-material-dashboard.appseed.us">React Material Dashboard</a>
                      <br /><a target="_blank" rel="noopener noreferrer" href="https://react-now-ui-dashboard.appseed.us">Now UI React Dashboard</a>
                      <br /><a target="_blank" rel="noopener noreferrer" href="https://react-paper-dashboard.appseed.us">Paper Dashboard React</a>

                    </p>
                  </div>

                </CardBody>
              </Card>
            </Col>
          </Row>
        </div>
      </>
    );
  }
}

export default HowToUse;
