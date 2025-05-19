# mananamanana.com website

After 20+ years, mananamanana.com moves to Github, Jekyll, and all that, and away from the hand-crafted html and spacer.gifs of yore. We still don't jetpacks but, hey, we have markdown files and Github actions at least. Automagical website!

The long-dormant front page has been migrated to a Jekyll blog, based on [{ Personal } Jekyll Theme](https://le4ker.github.io/personal-jekyll-theme/). Also transformed is [/ohpiglet](https://ohpiglet.mananamanana.com), continuing to chart the lives of the three monkeys and a woodland creature of the forest floor that we found up a tree. Originally a Tumblr, then a WordPress, and now a Jekyll blog.

## My changes

* Orangeified it, of course.
* I've simplified the menu nav bar to be more old-school - direct links, no if statements.
* Removed a bunch of stuff I don't need.
* Dark mode yo!

## Create a new blogpost

Go to the **/_posts** folder and create a file with the name of the form **YYYY-MM-DD-foo.md**.

Add the boilerplate content like this:

```shell
---
layout: post
section-type: post
title: Foo
tags: [ '' ]
---

Lorem ipsum dolor.

<img src="{{site.baseurl}}/img/YYYY/image-name.jpg" alt="alt text.">
```

Update the title, edit/delete tags, etc. Oh, and add some content.

Upload any images to the **/img/YYYY** folder.

## Add video responsively

GitHub doesn't accept uploading of video so I use Vimeo or YouTube. The default embed codes from those hosts, however, doesn't play nice on mobile. To generate responsive embed code that does play nice on desktop and mobile go to [http://embedresponsively.com](http://embedresponsively.com).

## How to run locally

Install jekyll and dependencies:

```shell
./scripts/install
```

Build locally:

```shell
./scripts/serve-production
```

View a totally unrepresentative local version:

[http://127.0.0.1:4000](http://127.0.0.1:4000)

## Troubleshoot the Gemfile nonsense

JFC, what the fuck even are gemfiles?

Anyway, they break stuff and bundler blah blah and you can fix it repeatedly with monkey-see monkey-do from [here](https://jekyllrb.com/docs/ruby-101/).

## RSS feed

The RSS feed is automatically generated and placed in /feed.xml.

## Sitemap

The Sitemap is automatically generated and placed in /sitemap.xml.

## Generate tag pages

```shell
./scripts/generate-tags
```

## TODO

A rolling to do list, with a satisfying 'Done' section at the bottom.

### Next up

- [ ] Add commenting to /ohp
- [ ] Outsider article by Jim (messy html)- Old article on kayaking in Latin America. 
- [ ] Outsider article by Coran (pdf) on Grand Canyon
- [ ] gallery (see below)
- [ ] About - Explain history of mm.com with screengrabs of old frontpages, talk about inventing blogging, losing content to fb
- [ ] old landing pages

### Not Important/Later

- [ ] Can I build FB archive? - It's under settings & privacy, apparently.
- [ ] add webmentions
- [ ] add dark mode - like in https://mademistakes.com/mastering-jekyll/how-to-link/
- [ ] add activitypub
- [ ] add search bar
- [ ] anything in the EXTRA folder
- [ ] RSS FEED - The RSS feed is automatically generated and placed in /feed.xml.
- [ ] SITEMAP - The Sitemap is automatically generated and placed in /sitemap.xml

### Add Gallery

- [ ] rebuild the gallery in Jekyll - already started
- [ ] add snowboarding from desktop
- [ ] add Corsica maybe from desktop

### Drafts folder and list of ideas

#### Blogposts

- [ ] Eno
- [ ] Write about the liberation of creating twitter archive
- [ ] The year/week in review
- [ ] List of top 100 books - like https://www.openculture.com/2013/10/david-bowies-list-of-top-100-books.html
- [ ] Manifesto
-- Vitsoe.com 10 rules
-- Dieter rams 10 principles of good design
- [ ] Reason for... blogpost
- [ ] Rumours of firewood
- [ ] Write about Llavorsí
- [ ] Write about shed
- [ ] Public commitment to build a thing a week
- [ ] Dubliners map, mastodon.ie, bot
- [ ] Mastodon Book Toot

### Inspiring ideas
 
- [ ] https://kwon.nyc/colophon/ - plausible and typefaces
- [ ] Weeknotes - a blogpost ever week, just compiling things you do in the week - https://tomstu.art/weeknotes-204-expensive-coffee
- [ ] https://www.fromjason.xyz/p/notebook/where-have-all-the-websites-gone/

### From Rebecca

Contact lenses
Tolstoy book
Writing
Llavorsí
The woman from the supermarket
Queen on the plaza
Error as a parenting strategy
Error as a partnering strategy
Duelling short stories
I am a cliché
Bag of courgettes
The mountain spring
Transitions
Desire
Take away the elements of non importance
How would you write it
I have written nothing for 52 years
Dynamite the tunnel
Aggressive impulses.
Clean the kitchen
Feelings are what you feel
Use glasses
Don't use glasses
What would Rebecca do
What would Saoirse do
Waterfalls
Writing as engineering
Economy of family
Do we need doors
Psychology of small animals
Psychology of small children
Psychology of insects
Insecurity
Resistance
Remember winter
Assemble the children
Just work
The centre is outside
Baby steps
Post orgasmic tickles
Fold down the pages
Listen in the garden
Would anybody read it
I am the rhythm, I am the beat
Critical velocity
Unpaid On call
The gaps between thoughts
Why not
Orange is a sound
The hairdresser who now works in the supermarket is a hypochondriac
The meditation bench beside the vegetation patch
The river runs low

#### Done

<<<<<<< HEAD
=======
- [x] splashpages.net
- [x] Fix /ohp Search page to show more that just one page of results.
- [x] Reduce margins on pages and posts, particularly for mobile.
- [x] Domain renewal is due in March 2025. It should be automatic but best to check.
- [x] Tsundoko - My year in books. Keep adding to the list of what I've read.
- [x] remove all content from blacknight
- [X] Herbert Park Rangers Football Club
- [X] remove autorenew ssl cert
- [X] remove autorenew storage pack
- [X] remove Scotland content once it's up on repos
- [X] point name servers to cloudflare
- [X] check Scotland content is still up
- [X] remove all content once it's up on repos
- [X] Dublin Opinion stuff (short blogpost)
- [X] repoint dns from mm to gh
- [X] copy ohpiglet from mm/ohpiglet to github
- [X] download Wordpress ohpiglet content
- [X] remove the splash page and go direct to nu-blog index
- [X] add extra blank h2 to layouts
- [X] Redo favicon, delete old favicon?
- [X] some free goatcounter for metrics
- [X] hprfc
- [X] trips reports (Portugal)
- [X] trips reports (Italy)
- [X] trips reports (Americas)
- [X] Change all absolute links to relative links
- [X] Fix videos, flash, etc. from .txt
- [X] jetcim
- [X] Around.com for single line mission statement - this is covered by About
- [X] add Grand Canyon folder from desktop\
- [X] fix lack of html on latest-post in index
- [X] Contact wp about getting access to mm.wordpress.com
- [x] contact wp about content on old blog, which is still no access but partly on blacknight
- [x] update images on old blog
- [x] Hello World Blogposts

### Will not do:

- redo 404 page
- sidebar - like https://gwcoffey.com - takes up too much space on mobile
- recipes
- Submenu
- publish draft blogposts in old blog
