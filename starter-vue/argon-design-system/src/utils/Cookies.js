export default {
  create(name, value, seconds) {
    let expires = "";

    if (seconds) {
      let date = new Date();
      date.setTime(date.getTime() + seconds);
      expires = `; expires=${date.toUTCString()}`;
    }

    document.cookie = `${name}=${value}${expires}; path=/`;

    return true;
  },

  read(name) {
    const cookies = document.cookie
      .split(";")
      .map(cookie => cookie.trim())
      .map(cookie => cookie.split("="));
    const cookie = cookies.filter(cookie => cookie.includes(name))[0];

    if (cookie && cookie.length) {
      const value = cookie[1];

      return value;
    }

    return null;
  },

  remove(name) {
    return this.create(name, "", -1);
  }
};
