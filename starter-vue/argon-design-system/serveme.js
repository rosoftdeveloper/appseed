var express = require("express");
var serveStatic = require("serve-static");

var app = express();

app.use(serveStatic("dist", { index: ["index.html"] }));
app.listen(9001);
