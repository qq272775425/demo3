(function(){function l(){this.c="30037065";this.Q="q";this.M="";this.J="";this.L="";this.n="1383632639";this.O="hqs5.cnzz.com";this.K="";this.r="CNZZDATA"+this.c;this.q="_CNZZDbridge_"+this.c;this.F="_cnzz_CV";this.u="1";this.B={};this.a={};this.ja()}function f(a,b){try{var c=[];c.push("siteid=30037065");
c.push("name="+d(a.name));c.push("msg="+d(a.message));c.push("r="+d(h.referrer));c.push("page="+d(e.location.href));c.push("agent="+d(e.navigator.userAgent));c.push("ex="+d(b));c.push("rnd="+Math.floor(2147483648*Math.random()));(new Image).src="http://jserr.cnzz.com/log.php?"+c.join("&")}catch(g){}}var h=document,e=window,d=encodeURIComponent,k=decodeURIComponent,p=unescape,m="https:"===e.location.protocol?"https:":"http:",r=m+"//c.cnzz.com/core.php";l.prototype={ja:function(){try{this.T(),this.I(),
this.ga(),this.G(),this.l(),this.ea(),this.da(),this.ha(),this.t(),this.ca(),this.fa(),this.ia(),this.aa(),this.$(),this.ba(),this.na(),e[this.q]=e[this.q]||{}}catch(a){f(a,"i failed")}},la:function(){try{var a=this;e._czc={push:function(){return a.C.apply(a,arguments)}}}catch(b){f(b,"oP failed")}},$:function(){try{var a=e._czc;if("[object Array]"==={}.toString.call(a))for(var b=0;b<a.length;b++){var c=a[b];switch(c[0]){case "_setAccount":e._cz_account="[object String]"==={}.toString.call(c[1])?c[1]:
String(c[1]);break;case "_setAutoPageview":"boolean"===typeof c[1]&&(e._cz_autoPageview=c[1])}}}catch(g){f(g,"cS failed")}},na:function(){try{if("undefined"===typeof e._cz_account||e._cz_account===this.c){e._cz_account=this.c;if("[object Array]"==={}.toString.call(e._czc))for(var a=e._czc,b=0,c=a.length;b<c;b++)this.C(a[b]);this.la()}}catch(g){f(g,"pP failed")}},C:function(a){try{if("[object Array]"==={}.toString.call(a))switch(a[0]){case "_trackPageview":if(a[1]){this.a.d=m+"//"+e.location.host;
"/"!==a[1].charAt(0)&&(this.a.d+="/");this.a.d+=a[1];if(""===a[2])this.a.f="";else if(a[2]){var b=a[2];"http"!==b.substr(0,4)&&(b=m+"//"+e.location.host,"/"!==a[2].charAt(0)&&(b+="/"),b+=a[2]);this.a.f=b}this.A();"undefined"!==typeof this.a.f&&delete this.a.f;"undefined"!==typeof this.a.d&&delete this.a.d}break;case "_trackEvent":var c=[];a[1]&&a[2]&&(c.push(d(a[1])),c.push(d(a[2])),c.push(a[3]?d(a[3]):""),a[4]=parseFloat(a[4]),c.push(isNaN(a[4])?0:a[4]),c.push(a[5]?d(a[5]):""),this.k=c.join("|"),
this.A(),delete this.k);break;case "_setCustomVar":if(3<=a.length){var c=a[1],g=a[2],q=a[3]||0;a=0;for(var h in this.a.b)a++;if(5<=a)return!1;var k;k=0===q?"p":1===q?"m":(new Date).getTime()+1E3*q;this.a.b[c]={};this.a.b[c].S=g;this.a.b[c].g=k;this.w()}break;case "_deleteCustomVar":2<=a.length&&(c=a[1],this.a.b[c]&&(delete this.a.b[c],this.w()))}}catch(l){f(l,"aC failed")}},ba:function(){try{var a=this.s(this.F),b,c;this.a.b={};if(a)for(var g=a.split("&"),a=0;a<g.length;a++)c=k(g[a]),b=c.split("|"),
this.a.b[k(b[0])]={},this.a.b[k(b[0])].S=k(b[1]),this.a.b[k(b[0])].g=k(b[2])}catch(d){f(d,"gCV failed")}},U:function(){try{var a=(new Date).getTime(),b;for(b in this.a.b)"p"===this.a.b[b].g?this.a.b[b].g=0:"m"!==this.a.b[b].g&&a>this.a.b[b].g&&delete this.a.b[b];this.w()}catch(c){f(c,"cCV failed")}},w:function(){try{var a=[],b,c,g;for(g in this.a.b){var e=[];e.push(d(g));e.push(d(this.a.b[g].S));e.push(d(this.a.b[g].g));b=e.join("|");a.push(d(b))}var k=new Date;k.setTime(k.getTime()+157248E5);c=this.F+
"=";c+=a.join("&");c+="; expires="+k.toUTCString();h.cookie=c+"; path=/"}catch(l){f(l,"sCV failed")}},aa:function(){try{if(""!==e.location.hash)return this.D=e.location.href}catch(a){f(a,"gCP failed")}},t:function(){try{return this.a.oa=h.referrer||""}catch(a){f(a,"gR failed")}},ca:function(){try{return this.a.m=e.navigator.systemLanguage||e.navigator.language,this.a.m=this.a.m.toLowerCase(),this.a.m}catch(a){f(a,"gL failed")}},fa:function(){try{return this.a.P=e.screen.width&&e.screen.height?e.screen.width+
"x"+e.screen.height:"0x0",this.a.P}catch(a){f(a,"gS failed")}},l:function(){try{return this.a.ka=this.h("ntime")||"none"}catch(a){f(a,"gLVST failed")}},H:function(){try{return this.a.p=this.h("ltime")||(new Date).getTime()}catch(a){f(a,"gFVBT failed")}},ea:function(){try{var a=this.h("cnzz_a");if(null===a)a=0;else{var b=1E3*this.l(),c=new Date;c.setTime(b);(new Date).getDate()===c.getDate()?a++:a=0}return this.a.v=a}catch(g){f(g,"gRT failed")}},da:function(){try{return this.a.e=this.h("rtime"),null===
this.a.e&&(this.a.e=0),0<this.H()&&432E5<(new Date).getTime()-this.H()&&(this.a.e++,this.a.p=(new Date).getTime()),this.a.e}catch(a){f(a,"gRVT failed")}},ha:function(){try{return"none"===this.l()?this.a.R=0:this.a.R=parseInt(((new Date).getTime()-1E3*this.l())/1E3)}catch(a){f(a,"gST failed")}},ga:function(){try{var a=this.h("sin")||"none";if(!h.domain)return this.a.o="none";this.t().split("/")[2]!==h.domain&&(a=this.t());return this.a.o=a}catch(b){f(b,"gS failed")}},G:function(){try{return this.a.i=
this.h("cnzz_eid")||"none"}catch(a){f(a,"gC failed")}},pa:function(){try{var a=r+"?",b=[];b.push("web_id="+d(this.c));this.M&&b.push("show="+d(this.M));this.L&&b.push("online="+d(this.L));this.J&&b.push("l="+d(this.J));this.Q&&b.push("t="+this.Q);a+=b.join("&");this.X(a,"utf-8")}catch(c){f(c,"rN failed")}},T:function(){try{return!1===e.navigator.cookieEnabled?this.a.W=!1:this.a.W=!0}catch(a){f(a,"cCE failed")}},s:function(a){try{a+="=";var b=h.cookie.indexOf(a),c="";if(-1<b){var g=h.cookie.indexOf(";",
b);-1===g&&(g=h.cookie.length);c=k(h.cookie.substring(b+a.length,g))}return c?c:""}catch(d){f(d,"gAC failed")}},ia:function(){try{var a=h.title;1E3<a.length&&(a=a.substring(0,1E3)+"...");this.a.ma=a}catch(b){f(b,"gT failed")}},I:function(){try{var a=this.r,b={},c=this.s(this.r);if(0<c.length)if(1E8<this.c){var g=c.split("|");b.cnzz_eid=k(g[0]);b.ntime=k(g[1])}else for(var g=c.split("&"),d=0,e=g.length;d<e;d++){var h=g[d].split("=");b[k(h[0])]=k(h[1])}this.B=b}catch(l){f(l,"iC failed:"+a+":"+c)}},
N:function(){try{var a=this.r+"=",b=[],c=new Date;c.setTime(c.getTime()+157248E5);if(1E8<this.c){if("none"!==this.a.i)b.push(d(this.a.i));else{var g=Math.floor(2147483648*Math.random())+"-"+this.n+"-"+m+"//"+h.location.hostname;b.push(d(g))}b.push(this.n);0<b.length?(a+=d(b.join("|")),a+="; expires="+c.toUTCString(),a+="; path=/"):a+="; expires="+(new Date(0)).toUTCString()}else"none"!==this.a.i?b.push("cnzz_eid="+d(this.a.i)):(g=Math.floor(2147483648*Math.random())+"-"+this.n+"-"+m+"//"+h.location.hostname,
b.push("cnzz_eid="+d(g))),b.push("ntime="+this.n),null!==this.a.v&&b.push("cnzz_a="+d(this.a.v)),this.a.o&&b.push("sin="+d(this.a.o)),this.a.p&&b.push("ltime="+d(this.a.p)),this.a.e&&b.push("rtime="+d(this.a.e)),0<b.length?(a+=d(b.join("&")),a+="; expires="+c.toUTCString(),a+="; path=/"):a+="; expires="+(new Date(0)).toUTCString();h.cookie=a}catch(e){f(e,"sS failed")}},h:function(a){try{return"undefined"!==typeof this.B[a]?this.B[a]:null}catch(b){f(b,"gCPa failed")}},X:function(a,b){try{if(b=b||"utf-8",
"1"===this.u){var c=h.createElement("script");c.type="text/javascript";c.async=!0;c.charset=b;c.src=a;var d=h.getElementsByTagName("script")[0];d.parentNode&&d.parentNode.insertBefore(c,d)}else h.write(p("%3Cscript src='"+a+"' charset='"+b+"' type='text/javascript'%3E%3C/script%3E"))}catch(e){f(e,"cAS failed")}},Z:function(a,b){try{var c=h.getElementById("cnzz_stat_icon_"+this.c);if(c){var d=h.createElement("script");d.type="text/javascript";d.async=!0;d.charset=b;d.src=a;c.appendChild(d)}else"0"===
this.u&&h.write(p("%3Cscript src='"+a+"' charset='"+b+"' type='text/javascript'%3E%3C/script%3E"))}catch(e){f(e,"cSI failed")}},Y:function(a){try{for(var b=a.length,c="",d=0;d<b;d++)a[d]&&(c+=p(a[d]));var e=h.getElementById("cnzz_stat_icon_"+this.c);e?e.innerHTML=c:"0"===this.u&&h.write(c)}catch(k){f(k,"cI failed")}},A:function(){try{this.N();this.I();this.G();this.U();var a=[];a.push("id="+d(this.c));this.a.f||""===this.a.f?a.push("r="+d(this.a.f)):a.push("r="+d(this.a.oa));a.push("lg="+d(this.a.m));
a.push("ntime="+d(this.a.ka));a.push("repeatip="+this.a.v);a.push("rtime="+d(this.a.e));a.push("cnzz_eid="+d(this.a.i));a.push("showp="+d(this.a.P));a.push("st="+d(this.a.R));a.push("sin="+d(this.a.o));this.a.d?a.push("p="+d(this.a.d)):"[object String]"==={}.toString.call(this.D)&&a.push("p="+d(this.D));"[object String]"==={}.toString.call(this.k)&&a.push("ei="+d(this.k));"[object String]"==={}.toString.call(this.b)&&a.push("cv="+d(this.b));a.push("t="+d(this.a.ma));var b=a.join("&");"[object String]"===
{}.toString.call(this.k)?this.j([m+"//ei.cnzz.com/stat.htm?"+b]):(this.K&&this.j([m+"//"+this.K+"/stat.htm?"+b]),this.O&&this.j([m+"//"+this.O+"/stat.htm?"+b]))}catch(c){f(c,"sD failed")}},j:function(a){try{for(var b=a.length,c=null,d=0;d<b;d++)a[d]&&(c="cnzz_image_"+Math.floor(2147483648*Math.random()),e[c]=new Image,e[c].V=c,e[c].onload=e[c].onerror=e[c].onabort=function(){try{this.onload=this.onerror=this.onabort=null,e[this.V]=null}catch(a){}},e[c].src=a[d]+"&rnd="+Math.floor(2147483648*Math.random()))}catch(h){f(h,
"cR failed")}}};try{var n=new l;e[n.q].bobject=n;!1!==e._cz_autoPageview?n.A():n.N();l.prototype.getACookie=l.prototype.s;l.prototype.callRequest=l.prototype.j;l.prototype.createScriptIcon=l.prototype.Z;l.prototype.createIcon=l.prototype.Y;n.pa()}catch(s){f(s,"main failed")}})();
