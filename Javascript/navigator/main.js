document.write("<p>Cookies Enabled:"+ navigator.cookieEnabled +"</p>")

if(navigator.language == "en-US"){
    taal = "English (United States)"
}else if(navigator.language == "nl-NL"){
    taal = "Nederland (Nederlands)"
}else if(navigator.language == "de"){
    taal = "Deutch (Deutschland)"
}else if(navigator.language == "fy"){
    taal = "Frysk (Nederlân)"
}
document.write("<p>Browser Language:"+ taal +"</p>")

document.write("<p>operating system :"+ navigator.appVersion +"</p>")

function getOS() {

    var userAgent = window.navigator.userAgent,

        platform = window.navigator?.userAgentData?.platform || window.navigator.platform,

        macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],

        windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],

        iosPlatforms = ['iPhone', 'iPad', 'iPod'],

        os = null;

 

    if (macosPlatforms.indexOf(platform) !== -1) {

      os = 'Mac OS';

    } else if (iosPlatforms.indexOf(platform) !== -1) {

      os = 'iOS';

    } else if (windowsPlatforms.indexOf(platform) !== -1) {

      os = 'Windows';

    } else if (/Android/.test(userAgent)) {

      os = 'Android';

    } else if (/Linux/.test(platform)) {

      os = 'Linux';

    }
    return os;
  }
  document.write(getOS());