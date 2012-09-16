---
title: gnuplot breaks LaTeX PDF title (SOLVED)
tagline: 
layout: post
category : Software Lliure
tags : [gnuplot, LaTeX]
---
{% include JB/setup %}

## Problem description

If you have an *.eps* plot generated with gnuplot (i.e. using `set terminal postscript eps enhanced color`), and you have tried to insert it to a *LaTeX* document (with `\includegraphics...`), when compiling it using `latex -> dvips -> ps2pdf`,  you may notice how the title and other properties of the PDF document are copied from the last gnuplot *.eps* file you have included.

## How to fix this?

Instead of: 

    dvips -o mypaper.ps mypaper.dvi

Use:
    fixdvipsgnuplot.sh mypaper

where `fixdvipsgnuplot.sh` should contain:

    #!/bin/bash
    
    dvips -o $1.tmp.ps $1.dvi || exit 1
    sed '/^SDict begin \[$/,/^end$/d' $1.tmp.ps > $1.ps
    rm $1.tmp.ps
    
    exit 0

## How does this solution work?
As you may be able to guess, the important stuff is at the `sed` line.
Basically, *gnuplot* adds the figure title and other properties to the *.eps* file in a section called *SDict* which overwrites the default title you add to your paper. The given `sed` command removes the SDict lines, avoiding the overwrite.

    sed '/^SDict begin \[$/,/^end$/d' $1.tmp.ps > $1.ps


