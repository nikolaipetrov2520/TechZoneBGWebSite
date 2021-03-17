window.onscroll = function() {scrollFunction()};       
function scrollFunction() {
    var x = document.getElementById("menu");
    if (document.body.scrollTop > 2 || document.documentElement.scrollTop > 2){          
    x.className = "topnav";
  }
  if (document.body.scrollTop > 144 || document.documentElement.scrollTop > 144) {
    document.getElementById("menu").style.position = "fixed";
    document.getElementById("logo").style.paddingBottom = "54px";
    document.getElementById("logo").style.opacity = "0";
    x.className = "topnav";
  } else {          
    document.getElementById("menu").style.position = "relative"; 
    document.getElementById("logo").style.paddingBottom = "0px"; 
    document.getElementById("logo").style.opacity = "1";
  }
}
function myFunction() {
      var x = document.getElementById("menu");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    function openBrand(evt, brand) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(brand).style.display = "block";
      if(brand === "Apple"){
        document.getElementById("tableArticle").style.height = "4170px";
      }if(brand === "Samsung"){
        document.getElementById("tableArticle").style.height = "4060px";
      }if(brand === "Huawei"){
        document.getElementById("tableArticle").style.height = "620px";
      }
      evt.currentTarget.className += " active";
    }