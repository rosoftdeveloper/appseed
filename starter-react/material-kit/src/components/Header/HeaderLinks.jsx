/*eslint-disable*/
import React from "react";
// react components for routing our app without refresh
import { Link } from "react-router-dom";
import { connect } from "react-redux";
import { logout } from "../../store/actions";
// @material-ui/core components
import withStyles from "@material-ui/core/styles/withStyles";
import List from "@material-ui/core/List";
import ListItem from "@material-ui/core/ListItem";

// @material-ui/icons
import { Apps, CloudDownload } from "@material-ui/icons";

// core components
import CustomDropdown from "components/CustomDropdown/CustomDropdown.jsx";
import Button from "components/CustomButtons/Button.jsx";
import headerLinksStyle from "assets/jss/material-kit-react/components/headerLinksStyle.jsx";

const RegisterButton = props => (
    <ListItem className={props.classes.listItem}>
        <Link to={"/login-page"}>
            <Button 
            href=""
            color="transparent"
            target="_blank"
            style={{color: 'white'}}
            className={props.classes.navLink}>Register</Button>
        </Link>
    </ListItem>
)

// the logout component emits a logout signal to redux
const Logout = connect(dispatch => ({ dispatch }))(props => (
    <ListItem className={props.classes.listItem}>
        <Button 
        href=""
        color="transparent"
        target="_blank"
        style={{color: 'white'}}
        onClick={() => props.dispatch(logout())}
        className={props.classes.navLink}>Logout</Button>
    </ListItem>
))



function HeaderLinks({ ...props }) {
  const { classes } = props;
  return (
    <List className={classes.list}>
      <ListItem className={classes.listItem}>
        <CustomDropdown
          noLiPadding
          buttonText="Pages"
          buttonProps={{
            className: classes.navLink,
            color: "transparent"
          }}
          buttonIcon={Apps}
          dropdownList={[
            <Link to="/" className={classes.dropdownLink}>
              Landing Page
            </Link>,
            <Link to="/profile-page" className={classes.dropdownLink}>
              Profile Page
            </Link>,
            <Link to="/components" className={classes.dropdownLink}>
              Components
            </Link>
          ]}
        />
      </ListItem>
      
        <ListItem className={classes.listItem}>
            <Link to={props.state.user ? "/profile-page" : "/login-page"}>
                <Button 
                href=""
                color="transparent"
                target="_blank"
                style={{color: 'white'}}
                className={classes.navLink}>{props.state.user ? `${props.state.user.name} ${props.state.user.surname}` : `Login`}</Button>
            </Link>
        </ListItem>
        {
            props.state.user ? <Logout {...props}/> : <RegisterButton {...props} />
        }
    </List>
  );
}

const HeaderLinksContainer = connect(state => ({ state }))(HeaderLinks);

export default withStyles(headerLinksStyle)(HeaderLinksContainer);
