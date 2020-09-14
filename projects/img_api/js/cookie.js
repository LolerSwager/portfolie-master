/** VI KAN KONFIGURER FLG. OPLYSNINGER HER */
let purecookieTitle = "Cookies"; // Titel
let purecookieDesc = "Ved benyttelse af denne side, accepterer du samtidig at der bruges cookies."; // Beskrivelse
let purecookieLink = '<a href="#" target="_blank">Hvorfor?</a>'; // Link til cookiepolitik
let purecookieButton = "Det er forstået"; // Tekst på knappen



/** Vi implementerer vores cookie til vores HTML */
function pureFadeIn(elem, display){
  let el = document.getElementById(elem);
  el.style.opacity = 0;
  el.style.display = display || "block";

  (function fade() {
    let val = parseFloat(el.style.opacity);
    if (!((val += .02) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
};
function pureFadeOut(elem){
  let el = document.getElementById(elem);
  el.style.opacity = 1;

  (function fade() {
    if ((el.style.opacity -= .02) < 0) {
      el.style.display = "none";
    } else {
      requestAnimationFrame(fade);
    }
  })();
};


/** Først opretter vi en funktion, der gemmer besøgende navn i en cookie variabel 
 * Parametrene til funktionen nedenfor er navnet på cookien (name), værdien af ​​cookien (value) og antallet af dage, indtil cookien skal udløbe (days). Funktionen indstiller en cookie ved at tilføje cookiename, cookie-værdien og den udløber streng. */
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString(); 
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
/** Returner en dato som er konverteret til en string ved brug af Universal Coordinated Time (UTC) */

/** Tag cookie name som parameter (name).
Opret en variabel (navn) med teksten, der skal søges efter (name + "=").
Afkode cookie-strengen for at håndtere cookies med specialtegn, f.eks. '$'
Del document.cookie på semikoloner i en matrix kaldet ca (ca = decodedCookie.split (';')).
Loop igennem ca-arrayet (i = 0; i <ca.length; i ++), og læs hver værdi c = ca [i]).
Hvis cookien findes (c.indexOf (name) == 0), skal du returnere værdien på cookien (c.substring (name.length, c.length).
Hvis cookien ikke findes, return null eller "". */

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-9999;';  
}

function cookieConsent() {
  if (!getCookie('purecookieDismiss')) {
    
    document.body.innerHTML += `<div id="box" class="box"><div class="box-top"><p>${purecookieTitle}</p><span onclick="closecookie()"><i class="fas fa-times"></i></span></div><div id="cookie"><p>${purecookieDesc}${purecookieLink}</p><button class="cookieButton" type="button" onClick="purecookieDismiss();">${purecookieButton}</button></div></div>`;
    pureFadeIn("box");
    pureFadeIn("grey-box");
  }
}

function purecookieDismiss() {
    setCookie('purecookieDismiss','1',7);
    pureFadeOut("box");
    pureFadeOut("grey-box");
    Set-Cookie; flavor=choco; SameSite=None; Secure;
}

function closecookie() {
    pureFadeOut("box");
    pureFadeOut("grey-box");
}

window.onload = function() { cookieConsent(); };