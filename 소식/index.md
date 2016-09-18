---
layout: page
menu: 소식
title: "협회 소식"
description: "협회의 최근 소식을 놓치지 마세요."
permalink: /소식/
---

# 최근 협회 소식
<small> <a href="{{ "/cms/" | prepend: site.baseurl }}">글 작성하기</a> </small>
<br>
<ul class="news-posts">
  {% for post in site.posts offset: 0 limit: 4 %}
  <li>
    <a href="{{ site.baseurl }}{{ post.url }}">
      <span class="post-date">{{ post.date | date: "%b %-d, %Y" }}</span>
      <h3>{{ post.title }}</h3>
      <p>{{ post.excerpt }}</p>
    </a>
  </li>
  {% endfor %}
</ul>

## 지난 협회 소식

<ul class="all-news-posts">
  {% for post in site.posts offset: 4 %}
  <li>
    <a href="{{ site.baseurl }}{{ post.url }}">
      <span class="post-date">{{ post.date | date: "%b %-d, %Y" }}</span>
      <h3>{{ post.title }}</h3>
      <p>{{ post.excerpt }}</p>
    </a>
  </li>
  {% endfor %}
</ul>

<hr>
<div class="row teaser">
  <section class="col cell1of3">{% include teaser.documentation.html %}</section>
  <section class="col cell1of3">{% include teaser.books.html %}</section>
  <section class="col cell1of3">{% include teaser.links.html %}</section>
</div>
