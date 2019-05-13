import React from 'react'
import PropTypes from 'prop-types'

const Footer = (props) => (
    <footer id="footer" style={props.timeout ? {display: 'none'} : {}}>
        <p className="copyright">&copy; React Theme - Dimension. Design: <a href="https://html5up.net">HTML5 UP</a>. 
            <br />
            <a target="_blank" rel="noopener noreferrer" href="https://appseed.us">
                <span className="icon fa-rocket fa-2x"></span>
            </a> 
            {'     '} 
            <a target="_blank" rel="noopener noreferrer" href="https://blog.appseed.us/tag/gatsbyjs/">
                <span className="icon fa-rss-square fa-2x"></span>
            </a> 
        </p>
    </footer>
)

Footer.propTypes = {
    timeout: PropTypes.bool
}

export default Footer
