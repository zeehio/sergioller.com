---
title: Tornant al TEX des del DVI amb TexMaker
tagline: 
layout: post
category : Software Lliure
tags : [LaTeX, TexMaker]
---
{% include JB/setup %}

Hola fans del texmaker! Amb **Texmaker** és possible clicar a una part del document quan l'estem visualitzant i **tornar a la línia de codi LaTeX original**. Això és molt útil si descobrim una falta d'ortografia tot llegint el nostre document. Si llegim el *Manual de Texmaker* hi i trobem la informació següent:

> ##4.7 "Forward/Inverse search" with Texmaker
>Some dvi viewers can jump to (and visually highlight) a position in the DVI file that corresponds to a certain line number in the (La)TeX source file. To use this feature, you can use the @ character in the syntax of the dvi viewer command ("Configure Texmaker" -> "Commands"). Examples ("Forward search"):
>
> * To launch yap from texmaker : `"C:/Program Files/MiKTeX 2.7/miktex/bin/yap.exe" -1 -s @%.tex %.dvi `
> * To launch xdvi from texmaker : `xdvi %.dvi -sourceposition @:%.tex `
> * To launch kdvi from texmaker : `kdvi "file:%.dvi#src:@ %.tex"`
>
> For the opposite operation ("Inverse search") :
>
> * To launch texmaker from yap : `"C:\Program Files\Texmaker\texmaker.exe" "%f" -line %l (the program arguments : "%f" -line %l )`
> * To launch texmaker from xdvi : `xdvi -editor "texmaker %f -line" %.dvi -sourceposition @:%.tex `
>

**Resumint:** 
 1. Aneu a «Opcions\Configurar Texmaker».
 2. Pestanya «Ordres» (s'obre per defecte).
 3. Visualitzador dvi: `xdvi -editor "texmaker %f -line" %.dvi -sourceposition @:%.tex`

D'aquesta manera, el visualitzador de dvi us permetrà fer **«Ctrl+Click»** a qualsevol part del document i anar més o menys a la línia que toca.

Jo normalment faig el «Muntatge ràpid», amb la tecla **F1**, que inclou els passos següents:
 * Latex 
 * dvi2ps
 * ps2pdf
 * Mostra PDF.

Ara faré:
 1. **F2**: Latex 
 2. **F3**: Mostra DVI.

I només quan vulgui fer una «versió final» faré **F1** com sempre per generar el PDF. 

PS: Si voleu desfer el canvi, poseu al Visualitzador DVI: `xdvi %.dvi %.tex `

PS2 (per si de cas): [Instal·la texmaker (Ubuntu)](apt://texmaker)

