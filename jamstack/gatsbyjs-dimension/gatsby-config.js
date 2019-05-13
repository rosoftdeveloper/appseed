module.exports = {
  siteMetadata: {
    title: "React / GatsbyJS Web App Dimension. Coded by @AppSeed",
    author: "Original author Hunter Chang. Enhanced by AppSeed",
    description: "Dimension design by HTML5 UP, Coded by AppSeed",
    siteUrl: `https://jamstack-gatsbyjs-dimension.appseed.us`
  },
  plugins: [
    'gatsby-plugin-react-helmet',
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: 'gatsby-starter-default',
        short_name: 'starter',
        start_url: '/',
        background_color: '#663399',
        theme_color: '#663399',
        display: 'minimal-ui',
        icon: 'src/images/gatsby-icon.png', // This path is relative to the root of the site.
      },
    },
    'gatsby-plugin-sass',
    'gatsby-plugin-offline',
  ],
}
