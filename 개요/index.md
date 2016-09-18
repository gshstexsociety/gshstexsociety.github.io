---
layout: page
menu: 개요
title: "LaTeX 개요"
description: "LaTeX에 관하여"
permalink: /개요/
---

# LaTeX 개요


LaTeX은 <a href="{{ "/lppl/" | prepend: site.baseurl }}">프리웨어</a>이며, 과학 분야 문서 작성의 표준으로 인정되고 있는 고급 문서 조판 시스템입니다.
LaTeX은 주로 과학/기술 분야의 분량이 긴 문서를 만들 때 사용되지만 이 같은 거의 모든 출판에서도 사용될 수 있습니다.

LaTeX은 흔히 우리가 아는 워드 프로세서가 아닙니다. 그 대신, LaTeX은 저자들로 하여금 문서의 내용에만 집중할 수 있게 해줍니다.
즉, 저자들은 LaTeX을 사용함으로써 더 이상 문서의 외관에 대해 신경쓸 필요가 없어지게 됩니다.
예를 들어, 다음의 문서를 고려해 봅시다.

{% highlight text %}
Cartesian closed categories and the price of eggs
Jane Doe
September 1994

Hello world!
{% endhighlight %}

이러한 문서를 보통의 워드 프로세서에서 만들려면, 저자는 어떤 레이아웃을 사용할 것인지 구체적으로 결정해야 합니다.
예를 들면, 제목 부분은 18pt Times Roman, 이름은 12pt Times Italic, ... 이렇게 많은 것을 결정하고 직접 설정해야 합니다.
이것은 두 가지의 안 좋은 결과를 초래합니다 : 디자인 때문에 시간을 낭비하고, 여러 종류의 통일되지 않고 안 좋은 디자인의 문서를 만들게 됩니다.

LaTeX의 철학은 문서 디자인을 디자이너에게만 맡기고, 저자들은 내용에만 집중할 수 있도록 하는 데에 있습니다.
(이 디자이너의 역할을 하는 것이 바로 경기과학고 텍 사용자협회 개발진입니다!)
LaTeX에서는 아래와 같이 입력하기만 하면, 조판될 준비가 완료됩니다.

{% highlight text %}
\documentclass{article}
\title{Cartesian closed categories and the price of eggs}
\author{Jane Doe}
\date{September 1994}
\begin{document}
   \maketitle
   Hello world!
\end{document}
{% endhighlight %}

각각의 의미를 살펴보면:

+ 이 문서의 종류는 article 입니다.
+ 이 문서의 제목은 Cartesian closed categories and the price of eggs 입니다.
+ 이 문서의 저자는 Jane Doe 입니다.
+ 이 문서는 September 1994 에 쓰였습니다.
+ 이 문서는 제목과 텍스트 Hello world! 로 이루어져 있습니다.

## LaTeX 의 기능

+ Typesetting journal articles, technical reports, books, and slide presentations.
+ Control over large documents containing sectioning, cross-references, tables and figures.
+ Typesetting of complex mathematical formulas.
+ Advanced typesetting of mathematics with AMS-LaTeX.
+ Automatic generation of bibliographies and indexes.
+ Multi-lingual typesetting.
+ Inclusion of artwork, and process or spot colour.
+ Using PostScript or Metafont fonts.

<hr>
<div class="row teaser">
  <section class="col cell1of3">{% include teaser.documentation.html %}</section>
  <section class="col cell1of3">{% include teaser.get.html %}</section>
  <section class="col cell1of3">{% include teaser.team.html %}</section>
</div>
