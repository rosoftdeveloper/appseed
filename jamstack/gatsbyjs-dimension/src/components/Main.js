import React from 'react'
import PropTypes from 'prop-types'

import pic01 from '../images/about-gatsbyjs.jpg'
import pic02 from '../images/appseed-app-generator.jpg'

class Main extends React.Component {
  render() {

    let close = <div className="close" onClick={() => {this.props.onCloseArticle()}}></div>

    return (
      <div ref={this.props.setWrapperRef} id="main" style={this.props.timeout ? {display: 'flex'} : {display: 'none'}}>

        <article id="about-gatsbyjs" className={`${this.props.article === 'about-gatsbyjs' ? 'active' : ''} ${this.props.articleTimeout ? 'timeout' : ''}`} style={{display:'none'}}>
          <h2 className="major">What is GatsbyJS?</h2>

          <span className="image main">
            <img src={pic01} alt="GatsbyJS Static App Generator. A few words about it." />
          </span>
          <p>Gatsby is a React-based, GraphQL powered, static site generator. What does that even mean?  Well, it weaves together the best parts of React, webpack, react-router, GraphQL, and other front-end tools in to one very enjoyable developer experience. Don’t get hung up on the moniker ‘static site generator’.</p>
          <p>Read more about <a href="https://blog.appseed.us/tag/gatsbyjs/">GatsbyJS</a> on the official AppSeed <a href="https://blog.appseed.us">blog</a>.</p>
          {close}
        </article>

        <article id="appseed-app-generator" className={`${this.props.article === 'appseed-app-generator' ? 'active' : ''} ${this.props.articleTimeout ? 'timeout' : ''}`} style={{display:'none'}}>
          <h2 className="major">AppSeed</h2>

          <span className="image main">
            <img src={pic02} alt="AppSeed App Generator for Vue and React." /></span>
          
          <p>AppSeed is a FullStack web <a href="https://appseed.us">app generator</a> that allows you to choose a visual theme and apply it on a full, but flexible, technology stack in just a few minutes, greatly improving development time from visual design to application deployment.</p>
          <p>Read more about this cutting edge <a href="https://appseed.us">app generator</a> on the official <a href="https://blog.appseed.us">blog</a>.</p>
          {close}
        </article>

        <article id="resources" className={`${this.props.article === 'resources' ? 'active' : ''} ${this.props.articleTimeout ? 'timeout' : ''}`} style={{display:'none'}}>
          <h2 className="major">Resources</h2>

          <span className="image main">
            <img src={pic02} alt="AppSeed App Generator for Vue and React." /></span>
          
          <p>Demo: this Web App
            <br />Sources and more info <a href="https://appseed.us/apps/react/gatsbyjs/dimension">here</a>
            <br />Support via <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/fZC6hup">Discord</a>
          </p>
          {close}
        </article>

        <article id="support" className={`${this.props.article === 'support' ? 'active' : ''} ${this.props.articleTimeout ? 'timeout' : ''}`} style={{display:'none'}}>
          <h2 className="major">Support</h2>

          <p>
            <br />24/7 Email support: <a href="mailto:support@appseed.us">support@appseed.us</a>
            <br />LIVE Support via <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/fZC6hup">Discord</a>
          </p>

          <ul className="icons">
            <li>
              <a href="https://appseed.us" className="icon fa-rocket">
                <span className="label">App Generator</span></a></li>
            <li>
              <a href="https://blog.appseed.us/tag/gatsbyjs/" className="icon fa-rss">
                <span className="label">Blog</span></a></li>
          </ul>
          {close}
        </article>

      </div>
    )
  }
}

Main.propTypes = {
  route: PropTypes.object,
  article: PropTypes.string,
  articleTimeout: PropTypes.bool,
  onCloseArticle: PropTypes.func,
  timeout: PropTypes.bool,
  setWrapperRef: PropTypes.func.isRequired,
}

export default Main