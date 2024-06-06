/*Typwriter code*/
  document.addEventListener('DOMContentLoaded',function(event){
// array with texts to type in typewriter
var dataText = [ "CorelDraw", "Photoshop", "Fireworks", "Illustrator", "Adobe XD", "Figma", "Framer", "HTML5+CSS3", "bootstrap", "SCSS", "Tailwind CSS", "JavaScript", "jQuery", "React Basic", "WordPressFlash", "Premier", "After Effect", "Webpad (sound editing)"];
var dataText1 = [ "UI/UX Design", "Product Design", "Logo Design", "Brand Identity", "Illustration & Art"];

// type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.getElementById("typedtext").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback)
      }, 100);
    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      // call callback after timeout
      setTimeout(fnCallback, 2000);
    }
  }
  // start a typewriter animation for a text in the dataText array
   function StartTextAnimation(i) {
     if (typeof dataText[i] == "undefined"){
        StartTextAnimation(0);
     }
     else if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       StartTextAnimation(i + 1);
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});

/*
* Replace all SVG images with inline SVG
*/
document.querySelectorAll('img.svg').forEach(function(img){
var imgID = img.id;
var imgClass = img.className;
var imgURL = img.src;

fetch(imgURL).then(function(response) {
    return response.text();
}).then(function(text){

    var parser = new DOMParser();
    var xmlDoc = parser.parseFromString(text, "text/xml");

    // Get the SVG tag, ignore the rest
    var svg = xmlDoc.getElementsByTagName('svg')[0];

    // Add replaced image's ID to the new SVG
    if(typeof imgID !== 'undefined') {
        svg.setAttribute('id', imgID);
    }
    // Add replaced image's classes to the new SVG
    if(typeof imgClass !== 'undefined') {
        svg.setAttribute('class', imgClass+' replaced-svg');
    }

    // Remove any invalid XML tags as per http://validator.w3.org
    svg.removeAttribute('xmlns:a');

    // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
    if(!svg.getAttribute('viewBox') && svg.getAttribute('height') && svg.getAttribute('width')) {
        svg.setAttribute('viewBox', '0 0 ' + svg.getAttribute('height') + ' ' + svg.getAttribute('width'))
    }

    // Replace image with new SVG
    img.parentNode.replaceChild(svg, img);

});

});

let absolute_url="http://localhost/vishal_profile/";
//const currentUrl =window.location.href;

const page_url =[ "sharpeagle.html", "alietc.html", "genhaven.html", "team-organisar.html"];

let currentIndex = 0;

 function nexturl(){
 
    if(page_url[currentIndex] != "check.html"){
        document.getElementById('valueDisplay').textContent = page_url[currentIndex];   
        window.history.pushState({ html: page_url[currentIndex] }, "", "http://localhost/test/"+page_url[currentIndex]);
    } else {
      currentIndex += 1;
        document.getElementById('valueDisplay').textContent = page_url[currentIndex];
    }
    
    //document.getElementById("demo").innerHTML = "The full URL of this page is:<br>" + absolute_url+page_url[currentIndex];
    
    if(currentIndex == (page_url.length - 1)) {
      currentIndex = 0;
    } else {
      currentIndex = (currentIndex + 1) % page_url.length;    
    }

    
}