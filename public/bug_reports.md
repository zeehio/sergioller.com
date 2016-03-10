## Submitted bug reports

These are bug reports (occasionally with a patch) I have reported while 
working on some side projects.

### Data analysis related

| Project    | Date       | Issue | Type | Patch attached | Test case              | Fixed        | Context         |
|------------|------------|-------|------|:--------------:|:----------------------:|:------------:|-----------------|
| [R.matlab](https://github.com/HenrikBengtsson/R.matlab) | Aug&nbsp;2015 | [Clarify readMat documentation for v7.3 MAT files](https://github.com/HenrikBengtsson/R.matlab/pull/17) | Documentation | Yes | Yes | Yes | |
| [htmlTable](http://gforge.se/2015/04/introducing-the-htmltable-package/)  | May&nbsp;2015   | [htmlTable-1.3 shows factors as integers instead of characters](https://github.com/gforge/htmlTable/issues/4)    | Bug   | Yes            | Yes                    | Yes          | Found while working on [condformat](https://github.com/zeehio/condformat)                                                           |
| [broom](http://github.com/dgrtwo/broom)  |  May&nbsp;2015 | [Add compatibility with `car::Anova`](https://github.com/dgrtwo/broom/pull/51) | Feature | Yes | Yes | Yes | Found while doing data analysis |
| [scales](http://github.com/hadley/scales) | May&nbsp;2015 | [Fix truncated documentation in hue_pal chroma](https://github.com/hadley/scales/pull/56) | Documentation | Yes | Yes | Yes | Found while doing data analysis |
| [R](http://r-project.org)          | Mar&nbsp;2015 | [mapply gives error if USE.NAMES is character vector](https://bugs.r-project.org/bugzilla3/show_bug.cgi?id=16284)    | Bug | Yes            | Yes                    | Needs review |                                                                                                                                     |
| [scipy](https://scipy.org/) | Sep&nbsp;2014 | [Fixed signal.get_window with unicode window name](https://github.com/scipy/scipy/pull/3946) | Bug | Yes | Yes | Yes | Found while preparing some Signal Processing lab classes |
| [scipy-lectures](https://scipy-lectures.github.io/) | Jan&nbsp;2013 | Minor [readability](https://github.com/scipy-lectures/scipy-lecture-notes/pull/71) [improvements](https://github.com/scipy-lectures/scipy-lecture-notes/pull/72) | Documentation | Yes | Yes | Yes | |
| [jquery-tablesorter-filter](https://github.com/jbritten/jquery-tablesorter-filter) | Sep&nbsp;2012 | [Add colspan support to tablesorter](https://github.com/jbritten/jquery-tablesorter-filter/pull/8) | Feature | Yes | Yes | Yes | Found while writing some visualizing data tool |

### Speech synthesis related

| Project    | Date       | Issue | Type | Patch attached | Test case              | Fixed        | Context         |
|------------|------------|-------|------|:--------------:|:----------------------:|:------------:|-----------------|
| [META-SHARE](http://www.meta-share.eu/) | Mar&nbsp;2015   | [Change documentation format from odt, doc and docx to reStructuredText](https://github.com/metashare/META-SHARE/pull/756) | Documentation | Yes | Yes | Yes | |
| [Festival](http://www.cstr.ed.ac.uk/projects/festival/download.html)   | 2014       | Multiple fixes and documentation improvements [Github fork](https://github.com/zeehio/festival_suite)  | Bugs, security&nbsp;bugs, Documentation              | Yes            | Yes                    | Some merged  | I upgraded the docs from [doc++](http://docpp.sourceforge.net/) to [doxygen](http://www.doxygen.org). I added [Continuous Integration testing](https://travis-ci.org/zeehio/festival_suite) and fixed bugs detected by a [static analysis](https://coveralls.io/github/zeehio/festival_suite) tool |
| [META-SHARE](http://www.meta-share.eu/) | Oct&nbsp;2014   | [Outdated dependencies make metashare insecure](https://github.com/metashare/META-SHARE/issues/751)           | Security bug       | Yes (On Jul&nbsp;2015)           | Yes  | Yes | The patch included an upgrade from django-1.3 to 1.4, multiple dependencies upgraded too and automated [Continuous Integration](https://travis-ci.org/zeehio/META-SHARE) support.                                           
|
| [django-selenium](https://github.com/dragoon/django-selenium) | Nov&nbsp;2014 | [Allow custom selenium webdriver options](https://github.com/dragoon/django-selenium/pull/26) | Feature | Yes | No | Yes | Found while fixing META-SHARE issues |
| [META-SHARE](http://www.meta-share.eu/) | Oct&nbsp;2014   | [Avoid 500 server error with IPv6 addresses (GeoIP)](https://github.com/metashare/META-SHARE/pull/754) | Bug | Yes | Yes | Yes | |
| [META-SHARE](http://www.meta-share.eu/) | Sep&nbsp;2012   | [Multiple (>60) python processes at `runtask run_digest_update`](https://github.com/metashare/META-SHARE/issues/620) | Bug | No             | Helped testing patches | Yes          |                                                                                                                                     |
| [META-SHARE](http://www.meta-share.eu/) | Jun&nbsp;2012   | [Improving file information on download](https://github.com/metashare/META-SHARE/pull/265) | Bug  | Yes | Yes | Yes | |
| [META-SHARE](http://www.meta-share.eu/) | May&nbsp;2012   | [Memory problem downloading big resource](https://github.com/metashare/META-SHARE/issues/246)             | Bug           | No             | Helped testing patches | Yes          |                                                                                                                                     |

### Other

| Project    | Date       | Issue | Type | Patch attached | Test case              | Fixed        | Context         |
|------------|------------|-------|------|:--------------:|:----------------------:|:------------:|-----------------|
| [Telegram](https://github.com/DrKLO/Telegram) | Jan 2016 | [Add support for reading NFC tags](https://github.com/DrKLO/Telegram/pull/1382) | Feature | Yes | Manual (hardware required) | Needs merging | Learning about Android and NFC tags |
| [Unofficial-Official-XBMC-Remote](https://github.com/joethefox/Unofficial-Official-XBMC-Remote) | May&nbsp;2015 | [Missing episodes in "After season" specials](https://github.com/joethefox/Unofficial-Official-XBMC-Remote/issues/57) | Bug | No | No | No | |
| [leDashboard](https://github.com/campino2k/leDashboard) | Oct&nbsp;2013 | [Fix widged loading by upgrading simplepie](https://github.com/campino2k/leDashboard/pull/4) |  Bug | Yes | Yes | Yes | Found while looking for replacements to [iGoogle](https://en.wikipedia.org/wiki/IGoogle) |
| [Doxygen](http://www.doxygen.org)    | Sep&nbsp;2013  | [`FILTER_SOURCE_FILES=YES` required to build CALL_GRAPHS](https://bugzilla.gnome.org/show_bug.cgi?id=707641)     | Bug    | Partial fix    | Yes                    | Yes          | Reported while working on [isidoc](http://isisl.com/p_prod_isidoc.html)                                                             |
| [GtkRadiant](https://github.com/TTimo/GtkRadiant/) | Jul&nbsp;2013 | Fix [build error](https://github.com/TTimo/GtkRadiant/pull/200) | Bug | Yes | Yes | Yes | Found while creating an UrbanTerror [map](https://www.sergioller.com/2008-11-14-urbanterror-facultat-fisica.md) |
| [gitlab](http://gitlab.org) | Jun&nbsp;2013  | Minor [clarification in documentation](https://github.com/gitlabhq/gitlabhq/pull/4369) | Documentation | Yes | Yes | Yes | |
