## Submitted bug reports

These are bug reports I have reported while working on some side projects.
Efforts were made to provide a patch whenever possible.

### Data analysis related

| Project    | Date       | Issue | Type | Patch attached | Test case              | Fixed        | Context         |
|------------|------------|-------|------|:--------------:|:----------------------:|:------------:|-----------------|
| [scipy](http://scipy.org/) | Feb&nbsp;2016 | [BUG: scipy.signal.lsim overflow error](https://github.com/scipy/scipy/pull/5886) | Bug | No | Yes | Not yet | Using `scipy.signal` for filter design classes |
| [Anaconda docs](https://docs.anaconda.org) | Feb&nbsp;2016 | [Add `patch` to the list of requirements](https://github.com/Anaconda-Server/docs.anaconda.org/pull/245) | Documentation | Yes | N/A | Yes | Using Anaconda (python distribution) |
| [rmarkdown](https://github.com/rstudio/rmarkdown/) | Mar&nbsp;2016 | [Allow to specify LaTeX dependencies in knitr_meta](https://github.com/rstudio/rmarkdown/pull/647) | Feature | Yes | Yes | Yes | Needed by [condformat](2016-03-10-condformat-release.md) to generate PDF results |
| [scales](https://github.com/hadley/scales/) | Mar&nbsp;2016 | [rescale Date (and POSIXct) objects?](https://github.com/hadley/scales/issues/74) | Feature | [Yes](https://github.com/hadley/scales/pull/75) | Yes | Yes | Found plotting time series data |
| [readr](https://github.com/hadley/readr/) | Feb&nbsp;2016 | [Error: Incomplete multibyte sequence](https://github.com/hadley/readr/issues/306#issuecomment-199675816) | Bug | No | Yes | No | Bug already reported. I just gave a simple test code to reproduce it to help finding it |
| [sixallor](https://github.com/robertodealmeida/notebooks) | Oct&nbsp;2015 | [Fix trivial case not handled well](https://github.com/robertodealmeida/notebooks/pull/1) | Bug | Yes | Yes | Yes | Playing with `numpy` |
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
| [mimic](https://mimic.mycroft.ai/) | Mar&nbsp;2016   | [Build lexicon and lts rules from scratch](https://github.com/MycroftAI/mimic/pull/17) | Feature | Yes | Yes | Yes | Improve text to speech in [mycroft](https://mycroft.ai) |
| [mimic](https://mimic.mycroft.ai/) | Feb&nbsp;2016   | [Add PortAudio support](https://github.com/MycroftAI/mimic/pull/14) | Feature | Yes | Yes (manual) | Needs testing on OSX and Windows | Improve mimic multiplatform support |
| [mimic](https://mimic.mycroft.ai/) | Feb&nbsp;2016   | [Fix library name](https://github.com/MycroftAI/mimic/pull/11/files) | Documentation | Yes | Yes | Yes | Working on mimic |
| [nltk](http://www.nltk.org/) | Sep&nbsp;2015   | [Fix encoding cess corpus](https://github.com/nltk/nltk/pull/1141) | Bug | Yes | Yes | Yes | Playing with Part Of Speech taggers |
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
| [Fritzing](http://fritzing.org/) | Feb&nbsp;2016 | [SVG export reverses/flips the text](https://github.com/fritzing/fritzing-app/issues/3186) | Bug | No | Yes | Not yet | Designing Printed Circuit Board layouts |
| [Telegram](https://github.com/DrKLO/Telegram) | Jan 2016 | [Add support for reading NFC tags](https://github.com/DrKLO/Telegram/pull/1382) | Feature | Yes | Manual (hardware required) | Needs merging | Learning about Android and NFC tags |
| [Fritzing](http://fritzing.org/) | Dec&nbsp;2015 | [Save As uncompressed file](https://github.com/fritzing/fritzing-app/issues/3132) | Feature | [Yes](https://github.com/fritzing/fritzing-app/pull/3168) | No (manual) | Yes | Designing Printed Circuit Board layouts |
| [tkdu](https://github.com/daniel-beck/tkdu) | Oct&nbsp;2015 | [python3 support](https://github.com/daniel-beck/tkdu/pull/2) | Feature | Yes | No | Needs merging | Visualizing remaining disk space |
| [python-telegram-bot](https://github.com/python-telegram-bot/python-telegram-bot) | Sep 2015 | [[doc] fix "Telegram sticker" -> "Telegram user"](https://github.com/python-telegram-bot/python-telegram-bot/pull/71) | Documentation | Yes | No | Yes | Learning about [Telegram](http://telegram.org/) bots |
| [Unofficial-Official-XBMC-Remote](https://github.com/joethefox/Unofficial-Official-XBMC-Remote) | May&nbsp;2015 | [Missing episodes in "After season" specials](https://github.com/joethefox/Unofficial-Official-XBMC-Remote/issues/57) | Bug | No | No | No | |
| [leDashboard](https://github.com/campino2k/leDashboard) | Oct&nbsp;2013 | [Fix widged loading by upgrading simplepie](https://github.com/campino2k/leDashboard/pull/4) |  Bug | Yes | Yes | Yes | Found while looking for replacements to [iGoogle](https://en.wikipedia.org/wiki/IGoogle) |
| [Doxygen](http://www.doxygen.org)    | Sep&nbsp;2013  | [`FILTER_SOURCE_FILES=YES` required to build CALL_GRAPHS](https://bugzilla.gnome.org/show_bug.cgi?id=707641)     | Bug    | Partial fix    | Yes                    | Yes          | Reported while working on [isidoc](http://isisl.com/p_prod_isidoc.html)                                                             |
| [GtkRadiant](https://github.com/TTimo/GtkRadiant/) | Jul&nbsp;2013 | Fix [build error](https://github.com/TTimo/GtkRadiant/pull/200) | Bug | Yes | Yes | Yes | Found while creating an UrbanTerror [map](https://www.sergioller.com/2008-11-14-urbanterror-facultat-fisica.md) |
| [gitlab](http://gitlab.org) | Jun&nbsp;2013  | Minor [clarification in documentation](https://github.com/gitlabhq/gitlabhq/pull/4369) | Documentation | Yes | Yes | Yes | |

