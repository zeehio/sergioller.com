## Submitted bug reports

These are bug reports (occasionally with a patch) I have reported while 
working on some side projects.

| Project    | Date       | Bug report                                                                                                           | Patch attached | Test case              | Fixed        | Context                                                                                   |
|------------|------------|----------------------------------------------------------------------------------------------------------------------|----------------|------------------------|--------------|-------------------------------------------------------------------------------------------|
| htmlTable  | May 2015   | [htmlTable-1.3 shows factors as integers instead of characters](https://github.com/gforge/htmlTable/issues/4)        | Yes            | Yes                    | Yes          | Found while working on [condformat](https://github.com/zeehio/condformat)                 |
| META-SHARE | Sept 2012  | [Multiple (>60) python processes at `runtask run_digest_update`](https://github.com/metashare/META-SHARE/issues/620) | No             | Helped testing patches | Yes          |                                                                                           |
| META-SHARE | May 2012   | [Memory problem downloading big resource](https://github.com/metashare/META-SHARE/issues/246)                        | No             | Helped testing patches | Yes          |                                                                                           |
| META-SHARE | Oct 2014   | [Outdated dependencies make metashare insecure](https://github.com/metashare/META-SHARE/issues/751)                  | Yes            | Yes                    | Needs review | The patch included an upgrade from django-1.3 to 1.4, multiple dependencies upgraded too. |
| Doxygen    | Sept 2013  | [`FILTER_SOURCE_FILES=YES` required to build CALL_GRAPHS](https://bugzilla.gnome.org/show_bug.cgi?id=707641)         | Partial fix    | Yes                    | Yes          | Reported while working on [isidoc](http://isisl.com/p_prod_isidoc.html)                   |
| R          | March 2015 | [mapply gives error if USE.NAMES is character vector](https://bugs.r-project.org/bugzilla3/show_bug.cgi?id=16284)    | Yes            | Yes                    | Needs review |                                                                                           |

### htmlTable

- [htmlTable-1.3 shows factors as integers instead of characters](
  https://github.com/gforge/htmlTable/issues/4) (Report with patch, fixed)
  (May 2015, found while working on 
  [condformat](https://github.com/zeehio/condformat).

### META-SHARE:
- [Multiple (>60) python processes at `runtask run_digest_update`](https://github.com/metashare/META-SHARE/issues/620)
  (Report, testing upstream patch) (Sept 2012)
- [Memory problem downloading big resource](https://github.com/metashare/META-SHARE/issues/246) (Report, testing upstream patch) (May 2012)
- [Outdated dependencies make metashare insecure](https://github.com/metashare/META-SHARE/issues/751) (Report with patch, pending review) (Oct 2014)

### Doxygen:

- [`FILTER_SOURCE_FILES=YES` required to build CALL_GRAPHS](https://bugzilla.gnome.org/show_bug.cgi?id=707641)
  (Report with partial patch, fixed) (Sept 2013, found while working on 
  [isidoc](http://isisl.com/p_prod_isidoc.html)).

### R: 
- [mapply gives error if USE.NAMES is character vector](https://bugs.r-project.org/bugzilla3/show_bug.cgi?id=16284)
  (Report with patch, pending review) (March 2015, found while doing 
some 
  data analysis)
