tags: foss, R, condformat

# condformat: Conditional formatting for your DataFrames

condformat v0.2.0 has made it into [CRAN](https://cran.r-project.org/web/packages/condformat/index.html)!

[![Downloads](http://cranlogs.r-pkg.org/badges/condformat)](http://cran.rstudio.com/web/packages/condformat/index.html)

condformat helps visualizing DataFrames. With a `ggplot2`-like syntax we can format columns
of our DataFrame and view it directly in the RStudio Viewer
[(screenshot)](2016-03-10-condformat-release.png). See how we combine several
formatting rules in this simple example:

<table class='gmisc_table' style='border-collapse: collapse;' >
<thead>
<tr>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey;'> </th>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey; text-align: center;'>Sepal.Length</th>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey; text-align: center;'>Sepal.Width</th>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey; text-align: center;'>Petal.Length</th>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey; text-align: center;'>Petal.Width</th>
<th style='border-bottom: 1px solid grey; border-top: 2px solid grey; text-align: center;'>Species</th>
</tr>
</thead>
<tbody>
<tr>
<td style='text-align: left;'>1</td>
<td style='; background-color: #7D00FF; text-align: center;'>5.1</td>
<td style='; background-color: #7D00FF; text-align: center;'>3.5</td>
<td style='; background-color: #872B29; text-align: center;'>1.4</td>
<td style='; background-color:; text-align: center;'>0.2</td>
<td style='; background-color: #F8766D; text-align: center;'>setosa</td>
</tr>
<tr>
<td style='text-align: left;'>2</td>
<td style='; background-color: #7D00FF; text-align: center;'>4.9</td>
<td style='; background-color: #7D00FF; text-align: center;'>3.0</td>
<td style='; background-color: #872B29; text-align: center;'>1.4</td>
<td style='; background-color:; text-align: center;'>0.2</td>
<td style='; background-color: #F8766D; text-align: center;'>setosa</td>
</tr>
<tr>
<td style='text-align: left;'>3</td>
<td style='; background-color: #7D00FF; text-align: center;'>4.7</td>
<td style='; background-color: #7D00FF; text-align: center;'>3.2</td>
<td style='; background-color: #832424; text-align: center;'>1.3</td>
<td style='; background-color:; text-align: center;'>0.2</td>
<td style='; background-color: #F8766D; text-align: center;'>setosa</td>
</tr>
<tr>
<td style='text-align: left;'>4</td>
<td style='; background-color: #7D00FF; text-align: center;'>4.6</td>
<td style='; background-color: #7D00FF; text-align: center;'>3.1</td>
<td style='; background-color: #8C322F; text-align: center;'>1.5</td>
<td style='; background-color:; text-align: center;'>0.2</td>
<td style='; background-color: #F8766D; text-align: center;'>setosa</td>
</tr>
<tr>
<td style='text-align: left;'>5</td>
<td style='; background-color: #7D00FF; text-align: center;'>5.0</td>
<td style='; background-color: #7D00FF; text-align: center;'>3.6</td>
<td style='; background-color: #872B29; text-align: center;'>1.4</td>
<td style='; background-color:; text-align: center;'>0.2</td>
<td style='; background-color: #F8766D; text-align: center;'>setosa</td>
</tr>
<tr>
<td style='text-align: left;'>6</td>
<td style='; background-color: blank; text-align: center;'>5.6</td>
<td style='; background-color: blank; text-align: center;'>2.5</td>
<td style='; background-color: #E7CAC6; text-align: center;'>3.9</td>
<td style='; background-color:; text-align: center;'>1.1</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>7</td>
<td style='; background-color: blank; text-align: center;'>5.9</td>
<td style='; background-color: blank; text-align: center;'>3.2</td>
<td style='; background-color: #F9F9FC; text-align: center;'>4.8</td>
<td style='; background-color:; text-align: center;'>1.8</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>8</td>
<td style='; background-color: blank; text-align: center;'>6.1</td>
<td style='; background-color: blank; text-align: center;'>2.8</td>
<td style='; background-color: #EAD0CD; text-align: center;'>4.0</td>
<td style='; background-color:; text-align: center;'>1.3</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>9</td>
<td style='; background-color: blank; text-align: center;'>6.3</td>
<td style='; background-color: blank; text-align: center;'>2.5</td>
<td style='; background-color: #F4F2F9; text-align: center;'>4.9</td>
<td style='; background-color:; text-align: center;'>1.5</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>10</td>
<td style='; background-color: blank; text-align: center;'>6.1</td>
<td style='; background-color: blank; text-align: center;'>2.8</td>
<td style='; background-color: #FFFFFF; text-align: center;'>4.7</td>
<td style='; background-color:; text-align: center;'>1.2</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>11</td>
<td style='; background-color: blank; text-align: center;'>6.4</td>
<td style='; background-color: blank; text-align: center;'>2.9</td>
<td style='; background-color: #F3E4E2; text-align: center;'>4.3</td>
<td style='; background-color:; text-align: center;'>1.3</td>
<td style='; background-color: #00BA38; text-align: center;'>versicolor</td>
</tr>
<tr>
<td style='text-align: left;'>12</td>
<td style='; background-color: blank; text-align: center;'>6.0</td>
<td style='; background-color: blank; text-align: center;'>2.2</td>
<td style='; background-color: #EEECF6; text-align: center;'>5.0</td>
<td style='; background-color:; text-align: center;'>1.5</td>
<td style='; background-color: #619CFF; text-align: center;'>virginica</td>
</tr>
<tr>
<td style='text-align: left;'>13</td>
<td style='; background-color: blank; text-align: center;'>6.9</td>
<td style='; background-color: blank; text-align: center;'>3.2</td>
<td style='; background-color: #C8C1E1; text-align: center;'>5.7</td>
<td style='; background-color:; text-align: center;'>2.3</td>
<td style='; background-color: #619CFF; text-align: center;'>virginica</td>
</tr>
<tr>
<td style='text-align: left;'>14</td>
<td style='; background-color: blank; text-align: center;'>5.6</td>
<td style='; background-color: blank; text-align: center;'>2.8</td>
<td style='; background-color: #F4F2F9; text-align: center;'>4.9</td>
<td style='; background-color:; text-align: center;'>2.0</td>
<td style='; background-color: #619CFF; text-align: center;'>virginica</td>
</tr>
<tr>
<td style='text-align: left;'>15</td>
<td style='; background-color: blank; text-align: center;'>7.7</td>
<td style='; background-color: blank; text-align: center;'>2.8</td>
<td style='; background-color: #9085C3; text-align: center;'>6.7</td>
<td style='; background-color:; text-align: center;'>2.0</td>
<td style='; background-color: #619CFF; text-align: center;'>virginica</td>
</tr>
<tr>
<td style='text-align: left;'>16</td>
<td style='; background-color: blank; text-align: center;'>6.3</td>
<td style='; background-color: blank; text-align: center;'>2.7</td>
<td style='; background-color: #F4F2F9; text-align: center;'>4.9</td>
<td style='; background-color:; text-align: center;'>1.8</td>
<td style='; background-color: #619CFF; text-align: center;'>virginica</td>
</tr>
<tr>
<td style='border-bottom: 2px solid grey; text-align: left;'>17</td>
<td style='; background-color: blank; border-bottom: 2px solid grey; text-align: center;'>6.7</td>
<td style='; background-color: blank; border-bottom: 2px solid grey; text-align: center;'>3.3</td>
<td style='; background-color: #C8C1E1; border-bottom: 2px solid grey; text-align: center;'>5.7</td>
<td style='; background-color:; border-bottom: 2px solid grey; text-align: center;'>2.1</td>
<td style='; background-color: #619CFF; border-bottom: 2px solid grey; text-align: center;'>virginica</td>
</tr>
</tbody>
</table>

If you like [`ggplot2`](https://cran.r-project.org/web/packages/ggplot2/) I hope
you will like `condformat` syntax too.

    data(iris)
    library(condformat)
    my_df <- iris[c(1:5,70:75, 120:125),]
    condformat(my_df) +
      rule_fill_discrete(Species) + 
      rule_fill_discrete(Sepal.Width, Sepal.Length,
                         expression = Sepal.Width > Sepal.Length - 2.25,
                         colours = c("TRUE" = "#7D00FF")) + 
      rule_fill_gradient2(Petal.Length)

- `condformat(my_df)`: We want to view `my_df`.
- Two `rule_fill_discrete`: Fill column background.
  Either by value like in **Species** or filling several columns based on an
  arbitrary expression (any column or variable can be used in the expression!).
  Using an arbitrary expression you can specify which colours have to be applied to
  each of the possible expression results.
- One `rule_fill_gradient2`: Fill columns using a gradient with three levels.
   Here we colour `Petal.Length` with a three level gradient, going from red
   to white to blue (the default). Use `rule_fill_gradient` uses a
   conventional two-colour gradient.

Only colour background rules are definable right now, but complex expressions
can be used! Questions, issues and feature suggestions are [very welcome](https://github.com/zeehio/condformat/issues)
(and pull requests are welcome too!). If you need to set another CSS field,
just say it and I'll do my best!

You can install `condformat`:

    install.packages("condformat")

`condformat` relies on [`scales`](https://cran.r-project.org/web/packages/scales/)
for getting great colour scales and [`htmlTable`](http://gforge.se/packages/) for
rendering the DataFrame into HTML. Thanks to both [Hadley Wickham](http://hadley.nz/)
and [Max Gordon](http://gforge.se/) for their great work!


