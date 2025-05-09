var SEO = function() {
    this.referrer = '';
    this.url = '';
    this.urlBase = 'https://med.etoro.com/aw.aspx?';
    this.init();
}
SEO.prototype.init = function() {
    this.getReferrer();
    var self = this;
    self.isPPCaffiliateID(function() {
        if (!self.isSearchEngine()) {
            return;
        }

        const urlParams = new URLSearchParams(window.location.search);

        if (urlParams.has('utm_source') || urlParams.has('gad_source')) {
            const current_affiliate_id = urlParams.has('utm_source') ? parseInt(urlParams.get('utm_source')) : 0;
            const current_subaffiliate_id = urlParams.has('utm_serial') ? urlParams.get('utm_serial') : '';
            const current_content = urlParams.has('utm_content') ? urlParams.get('utm_content') : '';
            const current_ref = urlParams.has('ref') ? '&ref=' + urlParams.get('ref') : '';
            const current_add = urlParams.has('add') ? '&add=' + urlParams.get('add') : '';

            self.url = `${self.urlBase}A=${current_affiliate_id}&B=${current_content}&Campaign=${current_subaffiliate_id}${current_ref}${current_add}&Task=Click&TargetUrl=NOREDIRECT`;
        } else {
            self.url = `${self.urlBase}A=2&B=0&Campaign=${self.referrer}&Task=Click&TargetUrl=NOREDIRECT`;
        }

        const xhr = new XMLHttpRequest();
        xhr.open('GET', self.url);
        xhr.withCredentials = true;
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.dispatchEvent(new CustomEvent('seo-cookie-set'));
            }
        };
        xhr.send();
    });
}
SEO.prototype.getReferrer = function() {
    var self = this;
    if (document.referrer.length > 0) {
        self.referrer = document.referrer;
    }
}
SEO.prototype.getHostName = function() {
    this.domain_name = window.location.hostname;
}
SEO.prototype.getUrlPath = function() {
    return window.location.pathname;
}
SEO.prototype.getReferrerDomain = function() {
    var self = this;
    if (typeof self.referrer != 'undefined') {
        return self.referrer.split('/')[2];
    }
    return false;
}
SEO.prototype.getReferrerSearchKeyWords = function() {
    var self = this;
    var keywords;
    var common_search_strings = ['query', 'srch', 'searchquery', 'term', 'q', 'p'];
    if (typeof self.referrer != 'undefined') {
        var query_strings = self.getQueryStringsObject();
        for (i = 0; i < common_search_strings.length; i++) {
            var test_target = common_search_strings[i];
            if (query_strings.hasOwnProperty(test_target)) {
                return query_strings[test_target];
                break;
            }
        }
    }
    return keywords;
}
SEO.prototype.getQueryStringsObject = function() {
    var self = this;
    var url_params = {};
    var match, pl = /\+/g,
        search = /([^&=]+)=?([^&]*)/g,
        decode = function(s) {
            return decodeURIComponent(s.replace(pl, " "));
        },
        query = self.referrer.split('?')[1];
    while (match = search.exec(query)) {
        url_params[decode(match[1])] = decode(match[2]);
    }
    return url_params;
}
SEO.prototype.isSearchEngine = function () {
  if (this.referrer.search('mail') >= 0) {
    return false;
  }
  if (!document.referrer) {
    return false;
  }
  const reffererURL = (new URL(document.referrer));
  const search_engines = ['google.', 'msn.', 'bing.', 'live.', 'yahoo.', 'search.', 'yandex.', 'naver.', 'ask.', 'startlap.', 'baidu.', 'aol.', 'virgilio.', 'seznam.', 'mynet.', 'altavista.', 'onet.', 'alltheweb.', 'netscape.', 'lycos.', 'voila.', 'about.', 'alice.', 'kvasir.', 'terra.', 'ekolay.', 'najdi.'];

  return search_engines.some(domain => reffererURL.hostname.includes(domain));
}
SEO.prototype.isPPCaffiliateID = function(callbackFunction) {
    var cookie_value = this.getCookie('RequestURL');
    if (cookie_value === false) {
        callbackFunction();
        return false;
    }
    this.getPPCaffiliateIDs(function(ppc_id_array) {
        for (i = 0; i < ppc_id_array.length; i++) {
            if (cookie_value.search('a=' + ppc_id_array[i])) {
                return true;
            }
        }
        callbackFunction();
    });
}
SEO.prototype.setCookie = function(key, val) {
    var expiration_date = new Date();
    var expiration_days = 14;
    expiration_date.setDate(expiration_date.getDate() + expiration_days);
    var c_value = (val) + "; expires=" + expiration_date.toUTCString() + "; domain=.etoro.com; path=/";
    var c_key = key;
    document.cookie = c_key + "=" + c_value;
}
SEO.prototype.getCookie = function(key) {
    var i, x, y;
    var cookies_array = document.cookie.split(";");
    for (i = 0; i < cookies_array.length; i++) {
        x = cookies_array[i].substr(0, cookies_array[i].indexOf("="));
        y = cookies_array[i].substr(cookies_array[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == key) {
            return unescape(y);
        }
    }
    return false;
}
SEO.prototype.setSEOaffiliateID = function() {
    var self = this;
    var brand = false;
    if (self.referrer.search('yahoo.') >= 0) {
        var clean_referrer = self.referrer.replace(/\+/g, " ");
        var terms = ['forex etoro', 'forex trading etoro', 'forex etoro $1000 bonus', 'forex etoro $1000 free', 'forex ,800 free etoro'];
        if (self.inArray(clean_referrer, terms)) {
            self.affiliate_id = 16479;
        }
        return;
    }
    var terms = ['etoro', 'etorro', 'e-toro', 'etoro', 'etoto', 'e toro', 'e+toro', 'etroro'];
    if (self.inArray(self.referrer, terms)) {
        brand = true;
    }
    switch (self.domain_name) {
        case "www.etoro.com":
            switch (self.getUrlPath()) {
                case "/":
                    self.affiliate_id = (brand) ? "22397" : "2";
                    break;
                case "/ae/":
                    self.affiliate_id = "2974";
                    break;
                case "/de/":
                    self.affiliate_id = (brand) ? "22763" : "2870";
                    break;
                case "/es/":
                    self.affiliate_id = (brand) ? "22764" : "2972";
                    break;
                case "/fr/":
                    self.affiliate_id = (brand) ? "22765" : "12286";
                    break;
                case "/usa/":
                    self.affiliate_id = "42042";
                    break;
                case "/it/":
                    self.affiliate_id = (brand) ? "22762" : "4803";
                    break;
                case "/jp/":
                    self.affiliate_id = "29407";
                    break;
                case "/ru/":
                    self.affiliate_id = "2970";
                    break;
                case "/education/":
                    self.affiliate_id = "29266";
                    break;
                case "/blog/":
                    self.affiliate_id = "9173";
                    break;
            }
            break;
        case "www.etoro.pt":
            self.affiliate_id = "14213";
            break;
        case "www.etoro.com.cn":
            self.affiliate_id = "16103";
            break;
        case "turkish.etoro.com":
            self.affiliate_id = "16104";
            break;
        case "www.etoro.com.au":
            self.affiliate_id = "19541";
            break;
        case "www.etoro.ca":
            self.affiliate_id = "19694";
            break;
        case "www.etoro.fi":
            self.affiliate_id = "19693";
            break;
        case "www.etoro.gr":
            self.affiliate_id = "19692";
            break;
        case "dutch.etoro.com":
        case "www.etoro.nl":
            self.affiliate_id = "19690";
            break;
        case "swedish.etoro.com":
            self.affiliate_id = "19691";
            break;
        case "www.etoro.no":
            self.affiliate_id = "30358";
            break;
    }
}
SEO.prototype.inArray = function(value, array) {
    for (i = 0; i < array.length; i++) {
        var term = array[i];
        if (value.search(term) >= 0) {
            return true;
        }
    }
    return false;
}
SEO.prototype.serialize = function(object) {
    var string = [];
    for (var p in object) {
        string.push(encodeURIComponent(p) + "=" + encodeURIComponent(object[p]));
    }
    return string.join("&");
}
SEO.prototype.getPPCaffiliateIDs = function(callback) {
	callback(["96545561","156789879"]);
}
var SEO = new SEO();