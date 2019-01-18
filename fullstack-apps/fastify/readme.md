## AppSeed – fullstack apps Argon design

A simple fullstack app Argon design ready with authentication based on https://github.com/fastify
Build landing pages and apps in minutes.


## Sections and features

Available sections and features:
- Account database ready
- Database migration
- SQLite db for fast usage and easy config on your full stack application

<p align="center">
<img width="1000" height="400" src="https://github.com/rosoftdeveloper/appseed/blob/master/fullstack-apps/fastify/public/image.png">
</p>


## Why fastify? 
source: check fastify page
Even if the name includes fast it does not mean you don't have to check benchmarks comparing other REST libraries:
__Machine:__ MacBook Pro (Late 2016 | 2,7 GHz Intel Core i7 | 16 GB 2133 MHz LPDDR3)

__Method:__: `autocannon -c 100 -d 5 -p 10 localhost:3000` * 2, taking the second average

| Framework          | Version                    | Router?      |  Requests/sec |
| :----------------- | :------------------------- | :----------: | ------------: |
| hapi               | 17.8.1                     | &#10003;     | 26,497        |
| Express            | 4.16.4                     | &#10003;     | 26,481        |
| Restify            | 7.2.3                      | &#10003;     | 22,968        |
| Koa                | 2.6.2                      | &#10007;     | 35,796        |
| **Fastify**        | **1.13.1**                 | **&#10003;** | **45,846**    |
| -                  |                            |              |               |
| `http.Server`      | 10.13.0	                  | &#10007;     | 43,542\*      |

Benchmarks taken using https://github.com/fastify/benchmarks. This is a
synthetic, "hello world" benchmark that aims to evaluate the framework
overhead. The overhead that each framework has on your application
depends on your application, you should __always__ benchmark if performance
matters to you.

### Requirements

- Node.js — [installation instructions](https://nodejs.org/en/download/)
- Yarn — [installation instructions](https://yarnpkg.com/lang/en/docs/install/)

### Setup

From the project folder run:

```
	yarn install
```

### Run

From the project folder run:

```
	yarn server:start
```

Open link: http://localhost:5000

You can build similar apps using https://appseed.us
