import React from 'react'
import PropTypes from 'prop-types'

const Header = (props) => (
    <header id="header" style={props.timeout ? {display: 'none'} : {}}>
        <div className="logo">
            <span className="icon fa-rocket"></span>
        </div>
        <div className="content">
            <div className="inner">
                <h1>GatsbyJS Web App</h1> 
                <p>Dimension - React / GatsbyJS Web App</p> 
                <p>
                <a target="_blank" href="https://appseed.us/apps/react/gatsbyjs/dimension">Get Code</a> {' '}
                </p>
                FEATURES:
                <p>
                Sitemap generator, FTP deploy Script, LIVE Support via{' '}
                <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/fZC6hup">Discord</a>

                </p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="javascript:;" onClick={() => {props.onOpenArticle('about-gatsbyjs')}}>GatsbyJS</a></li>
                <li><a href="javascript:;" onClick={() => {props.onOpenArticle('appseed-app-generator')}}>AppSeed</a></li>
                <li><a href="javascript:;" onClick={() => {props.onOpenArticle('resources')}}>Resources</a></li>
                <li><a href="javascript:;" onClick={() => {props.onOpenArticle('support')}}>Support</a></li>
            </ul>
        </nav>
    </header>
)

Header.propTypes = {
    onOpenArticle: PropTypes.func,
    timeout: PropTypes.bool
}

export default Header
