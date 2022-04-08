var type = navigator.appName
if (type == "Netscape")
    var lang = navigator.language
else
    var lang = navigator.userLanguage
//cut down to first 2 chars of country code  
var lang = lang.substr(0, 2)
// 英語 
if (lang == "en")
    window.location.replace('url')
// 簡體中文 
else if (lang == "zh-cn")
    window.location.replace('url')
// 繁體中文 
else if (lang == "zh-tw")
    window.location.replace('index.php')
// 德語 
else if (lang == "de")
    window.location.replace('url')
// 除上面所列的語言 
else
    window.location.replace('url') 