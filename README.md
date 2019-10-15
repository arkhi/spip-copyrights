Copyrights Plugin
=================

**This repository now lives in https://framagit.org/arkhi/spip-copyrights.**

This [SPIP](http://spip.net/) plugin adds a configuration page to display a copyright automatically, based on a string of text.
It provides a `copyright` filter you can apply on anything.

The configuration options are available from the configuration menu or via `/ecrire/?exec=configurer_copyrights`.

### Usage

With this yaml string:

```yaml
alistapart.com: <span lang="en">Translated with the permission of <a href="http://www.alistapart.com/">A List Apart</a> and the author[s].</span>

example.net: © example.net
```

With the folowing SPIP skeleton:

```
[<hr />
(#URL_ORIG|copyright)]
```

* If `#URL_ORIG` contains “alistapart.com”: Display a horinzontal line, followed by the copyrights from A list Apart;
* If `#URL_ORIG` contains “example.net”: Display a horinzontal line, followed by “© example.net”;
* If no match is found, display nothing.
