const http = require('http');
const httpProxy = require('http-proxy');

const proxy = httpProxy.createProxyServer();

http.createServer((req, res) => {
  proxy.web(req, res, { target: 'http://160.20.164.171:25461/' });
}).listen(3000);