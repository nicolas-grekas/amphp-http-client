# Artax HTTP Client

Artax is a full-featured HTTP/1.1 client as specified in RFC 2616.  Its API is designed to simplify
standards-compliant HTTP resource traversal and RESTful web service consumption without obscuring the
underlying HTTP protocol.

**HEY! Checkout out the [EXAMPLES SECTION](https://github.com/rdlowrey/Artax/tree/master/examples)
to see some of the cool stuff Artax can do!**

#### FEATURES

 - Doesn't rely on *cURL/libcurl*
 - Supports parallel requests and event-driven parallelization in addition to serial requests
 - Transparently follows redirects
 - Requests and decodes gzipped entity bodies
 - Provides access to all raw headers and HTTP message data
 - Streams request and response entity bodies for hands-on memory management
 - Retains persistent keep-alive connections for maximum performance
 - Supports all standard and custom request methods as per the (extensible) HTTP protocol
 - Provides fully customizable and secure-by-default TLS (https://) support
 - Protects from MitM attacks with a packaged SSL certificate authority updater script
 - Exposes a simple subject/observer API for plugins and extensions
 - Offers full cookie support via the `CookieExtension`

#### PROJECT GOALS

* Implement an HTTP/1.1 Client built on raw sockets with no libcurl dependency;
* Model all relevant code on the HTTP/1.1 protocol as outlined in [RFC 2616][rfc2616];
* Eschew the use of `static` entirely in favor of maximum testability and full API transparency;
* Build all components using [SOLID][solid], readable and 100% unit-tested code;

#### INSTALLATION

```bash
$ git clone --recursive https://github.com/rdlowrey/Artax.git
```

#### REQUIREMENTS

* PHP 5.4+
* The [Amp][amp-github] library (installed automatically if you use `git clone --recursive`).
* PHP's `openssl` extension if you need TLS (https://)
* PHP's `zlib` extension if you wish to request/decompress gzipped response bodies

#### WHAT'S WITH THE NAME?

Children of the 1980s are likely familiar with [The NeverEnding Story][neverending] and may remember
the scene where Atreyu's faithful steed, Artax, died in the Swamp of Sadness. The name is an homage.

[rfc2616]: http://www.w3.org/Protocols/rfc2616/rfc2616.html
[amp-github]: https://github.com/rdlowrey/Amp
[solid]: http://en.wikipedia.org/wiki/SOLID_(object-oriented_design) "S.O.L.I.D."
[neverending]: http://www.imdb.com/title/tt0088323/ "The NeverEnding Story"
