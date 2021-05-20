const cookieBox = document.querySelector(".cookie-container"),
acceptBtn = cookieBox.querySelector("button");

acceptBtn.onclick = ()=>{
  //setting cookie for 1 month, after one month it'll be expired automatically
  document.cookie = "MyVizion; max-age="+60*60*24*30;
  if(document.cookie){ //if cookie is set
    cookieBox.classList.add("hide"); //hide cookie box
  }else{ //if cookie not set then alert an error
    alert("Cookie can't be set! Please check your cookie settings.");
  }
}
let checkCookie = document.cookie.indexOf("MyVizion"); //checking our cookie
//if cookie is set then hide the cookie box else show it
checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");