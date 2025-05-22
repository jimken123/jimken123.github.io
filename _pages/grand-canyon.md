---
layout: page
section-type: gallery
title: Grand Canyon
tags: [ '' ]
permalink: /grand-canyon/
---

## Grand Canyon

### Third attempt

<div class="header" id="myHeader">
  <h1>Image Grid</h1>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->

<div class="row"> 
  <div class="column">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/falls2.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
    <img src="/w3images/nature.jpg" style="width:100%">
    <img src="/w3images/mist.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/w3images/underwater.jpg" style="width:100%">
    <img src="/w3images/ocean.jpg" style="width:100%">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/mountainskies.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/underwater.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/falls2.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
    <img src="/w3images/nature.jpg" style="width:100%">
    <img src="/w3images/mist.jpg" style="width:100%">
    <img src="/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/w3images/underwater.jpg" style="width:100%">
    <img src="/w3images/ocean.jpg" style="width:100%">
    <img src="/w3images/wedding.jpg" style="width:100%">
    <img src="/w3images/mountainskies.jpg" style="width:100%">
    <img src="/w3images/rocks.jpg" style="width:100%">
    <img src="/w3images/underwater.jpg" style="width:100%">
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

### Second attempt

<div class="galleryrow">
  <div class="column">
    <img src="/img/grand_canyon/bren0011.jpg">
    <img src="/img/grand_canyon/bren0011.jpg">
    <img src="/img/grand_canyon/bren0011.jpg">
    <img src="/img/grand_canyon/bren0011.jpg">
    <img src="nature.jpg">
    <img src="mist.jpg">
    <img src="paris.jpg">
  </div>
  <div class="column">
    <img src="underwater.jpg">
    <img src="ocean.jpg">
    <img src="wedding.jpg">
    <img src="mountainskies.jpg">
    <img src="rocks.jpg">
    <img src="underwater.jpg">
  </div>
  <div class="column">
    <img src="wedding.jpg">
    <img src="rocks.jpg">
    <img src="falls2.jpg">
    <img src="paris.jpg">
    <img src="nature.jpg">
    <img src="mist.jpg">
    <img src="paris.jpg">
  </div>
  <div class="column">
    <img src="underwater.jpg">
    <img src="ocean.jpg">
    <img src="wedding.jpg">
    <img src="mountainskies.jpg">
    <img src="rocks.jpg">
    <img src="underwater.jpg">
  </div>
</div>

### First attempt

Resize the browser window to see the effect.

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="/img/grand_canyon/bren0011.jpg">
        <img src="/img/grand_canyon/bren0011.jpg" alt="bren 011" width="600" height="700">
      </a>
      <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus ultrices mattis. Vivamus tempus lectus id erat interdum, a rutrum erat faucibus. Etiam nec mauris vitae enim commodo tincidunt in vitae massa.</div>
    </div>
  </div>
  
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="img_forest.jpg" alt="Forest" width="600" height="700">
      </a>
<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus ultrices mattis. Vivamus tempus lectus id erat interdum, a rutrum erat faucibus. Etiam nec mauris vitae enim commodo tincidunt in vitae massa.</div>
    </div>
    </div>
  </div>
  
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="img_lights.jpg" alt="Northern Lights" width="600" height="700">
      </a>
      <div class="desc">Add a desbjgkjgcription of the image here</div>
    </div>
  </div>
  
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="img_mountains.jpg" alt="Mountains" width="600" height="700">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div><br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/img/grand_canyon/bren0011.jpg">
      <img src="/img/grand_canyon/bren0011.jpg" alt="bren 011" width="600" height="700">
    </a>
    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus ultrices mattis. Vivamus tempus lectus id erat interdum, a rutrum erat faucibus. Etiam nec mauris vitae enim commodo tincidunt in vitae massa.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="img_forest.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a desbjgkjgcription of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  </div><br>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="/img/grand_canyon/bren0011.jpg">
        <img src="/img/grand_canyon/bren0011.jpg" alt="bren 011" width="600" height="700">
      </a>
      <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus ultrices mattis. Vivamus tempus lectus id erat interdum, a rutrum erat faucibus. Etiam nec mauris vitae enim commodo tincidunt in vitae massa.</div>
    </div>
  </div>
    
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="img_forest.jpg" alt="Forest" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
      </a>
      <div class="desc">Add a desbjgkjgcription of the image here</div>
    </div>
  </div>
  
<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div><br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="/img/grand_canyon/bren0011.jpg">
      <img src="/img/grand_canyon/bren0011.jpg" alt="bren 011" width="600" height="700">
    </a>
    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus ultrices mattis. Vivamus tempus lectus id erat interdum, a rutrum erat faucibus. Etiam nec mauris vitae enim commodo tincidunt in vitae massa.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="img_forest.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a desbjgkjgcription of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

fggg

ffff

\

ffff

ffff

ffff

<div class="clearfix"></div>

This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px.

This media queries to re-arrange the images.

obout onsive web design later in our CSS Tutorial.

medi on different screen
