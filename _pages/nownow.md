---
layout: page
section-type: page
title: Search
tags: [ '' ]
permalink: /search/
---

## Search

Sometimes it's hard to find things, even with your glasses on.

Try this search box.

<!-- DDG search widget,@author Juri Wornowitski,@version 3.0,@link https://www.plainlight.com/ddg -->
<div id="widget" 
        style="width:50%;
        margin:10px 0;">
<style type="text/css">
        #widget input 
    {
        display:block;
        height:40px;
        padding:4px;
        outline:none;
        border:1px solid #000000;border-right:0;
        box-sizing:border-box;
        border-radius:3px 0 0 3px;
        width:calc(100% - 41px);
        font-size:18px;
        color:#ff6900;
    } 
    #widget button 
    {
        float:left;
        cursor:pointer;
        width:103px;
        height:40px;
        color:#ff6900;
        border:0;
        border-radius:0 3px 3px 0;
        padding:0;
    } 
    #widget button:active 
    {
        background-image:linear-gradient(#000000,#ff6900);
    } 
    #widget button:focus 
    {
        outline:none;
    }
    </style>
    <form 
        style="position:relative" 
        method="get" 
        action="https://duckduckgo.com/" 
        target="_top">
        <div style="float:right;
                    position:absolute;
                    top:0;
                    right:-2px;
                    z-index:3
        ">
        <button type="submit">Search</button>
        </div>
        <input type="text" name="q" placeholder="Search..." />
        <input type="hidden" name="sites" value="mananamanana.com" />
    </form>
</div>
