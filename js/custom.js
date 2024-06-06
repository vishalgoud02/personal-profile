let absolute_url="http://localhost/vishal_profile/casestudy/";
//const currentUrl =window.location.href;

const page_url =[ "sharpeagle.html", "alietc.html", "genhaven.html", "team-organisar.html"];

let currentIndex = 0;

 function nexturl(){
 
    if(page_url[currentIndex] != "check.html"){
        document.getElementById('valueDisplay').textContent = page_url[currentIndex];   
        window.history.pushState({ html: page_url[currentIndex] }, "", "http://localhost/vishal_profile/casestudy/"+page_url[currentIndex]);
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
