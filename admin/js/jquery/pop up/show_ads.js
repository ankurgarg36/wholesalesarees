(function(){var f=!0,g=null,h=!1,aa=function(a,b,c){return a.call.apply(a.bind,arguments)},ba=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var e=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,e);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}},l=function(a,b,c){l=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?aa:ba;return l.apply(g,arguments)};var m=(new Date).getTime();var p=function(a){a=parseFloat(a);return isNaN(a)||1<a||0>a?0:a},ca=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,da=function(a,b){if(!a)return b;var c=a.match(ca);return c?c[0]:b};var ea=p("0.01"),fa=p("0.001"),ia=p("0.01");var t=function(){return"r20130306"},ja=/^true$/.test("false")?f:h,ka=/^true$/.test("false")?f:h;var la=function(){return da("","pagead2.googlesyndication.com")};var ma=/&/g,na=/</g,oa=/>/g,pa=/\"/g,v={"\x00":"\\0","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\x0B",'"':'\\"',"\\":"\\\\"},w={"'":"\\'"};var x=window,y,qa=g,z=document.getElementsByTagName("script");z&&z.length&&(qa=z[z.length-1].parentNode);y=qa;la();var ra=function(a){var b=A,c;for(c in b)Object.prototype.hasOwnProperty.call(b,c)&&a.call(g,b[c],c,b)},B=function(a){return!!a&&"function"==typeof a&&!!a.call},sa=function(a,b){if(!(2>arguments.length))for(var c=1,e=arguments.length;c<e;++c)a.push(arguments[c])};function ta(a,b){a.addEventListener?a.addEventListener("load",b,h):a.attachEvent&&a.attachEvent("onload",b)}
var ua=function(a,b){if(!(1E-4>Math.random())){var c=Math.random();if(c<b)return a[Math.floor(c/b*a.length)]}return g},C=function(a){try{return!!a.location.href||""===a.location.href}catch(b){return h}};var va=g,wa=function(){if(!va){for(var a=window,b=a,c=0;a!=a.parent;)if(a=a.parent,c++,C(a))b=a;else break;va=b}return va};var D,E=function(a){this.c=[];this.b=a||window;this.a=0;this.d=g},xa=function(a,b){this.l=a;this.i=b};E.prototype.n=function(a,b){0==this.a&&0==this.c.length&&(!b||b==window)?(this.a=2,this.f(new xa(a,window))):this.g(a,b)};E.prototype.g=function(a,b){this.c.push(new xa(a,b||this.b));ya(this)};E.prototype.o=function(a){this.a=1;a&&(this.d=this.b.setTimeout(l(this.e,this),a))};E.prototype.e=function(){1==this.a&&(this.d!=g&&(this.b.clearTimeout(this.d),this.d=g),this.a=0);ya(this)};E.prototype.p=function(){return f};
E.prototype.nq=E.prototype.n;E.prototype.nqa=E.prototype.g;E.prototype.al=E.prototype.o;E.prototype.rl=E.prototype.e;E.prototype.sz=E.prototype.p;var ya=function(a){a.b.setTimeout(l(a.m,a),0)};E.prototype.m=function(){if(0==this.a&&this.c.length){var a=this.c.shift();this.a=2;a.i.setTimeout(l(this.f,this,a),0);ya(this)}};E.prototype.f=function(a){this.a=0;a.l()};
var za=function(a){try{return a.sz()}catch(b){return h}},Aa=function(a){return!!a&&("object"==typeof a||"function"==typeof a)&&za(a)&&B(a.nq)&&B(a.nqa)&&B(a.al)&&B(a.rl)},Ba=function(){if(D&&za(D))return D;var a=wa(),b=a.google_jobrunner;return Aa(b)?D=b:a.google_jobrunner=D=new E(a)},Ca=function(a,b){Ba().nq(a,b)},Da=function(a,b){Ba().nqa(a,b)};var Ea=/MSIE [2-7]|PlayStation|Gecko\/20090226/i,Fa=/Android|Opera/,Ga=function(){var a=G,b=H.google_ad_width,c=H.google_ad_height,e=["<iframe"],d;for(d in a)a.hasOwnProperty(d)&&sa(e,d+"="+a[d]);e.push('style="left:0;position:absolute;top:0;"');e.push("></iframe>");b="border:none;height:"+c+"px;margin:0;padding:0;position:relative;visibility:visible;width:"+b+"px";return['<ins style="display:inline-table;',b,'"><ins id="',a.id+"_anchor",'" style="display:block;',b,'">',e.join(" "),"</ins></ins>"].join("")};var Ha=function(a,b,c){c||(c=ka?"https":"http");return[c,"://",a,b].join("")};var Ia=function(){},Ka=function(a,b,c){switch(typeof b){case "string":Ja(b,c);break;case "number":c.push(isFinite(b)&&!isNaN(b)?b:"null");break;case "boolean":c.push(b);break;case "undefined":c.push("null");break;case "object":if(b==g){c.push("null");break}if(b instanceof Array){var e=b.length;c.push("[");for(var d="",k=0;k<e;k++)c.push(d),Ka(a,b[k],c),d=",";c.push("]");break}c.push("{");e="";for(d in b)b.hasOwnProperty(d)&&(k=b[d],"function"!=typeof k&&(c.push(e),Ja(d,c),c.push(":"),Ka(a,k,c),e=
","));c.push("}");break;case "function":break;default:throw Error("Unknown type: "+typeof b);}},Ma={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},Na=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g,Ja=function(a,b){b.push('"');b.push(a.replace(Na,function(a){if(a in Ma)return Ma[a];var b=a.charCodeAt(0),d="\\u";16>b?d+="000":256>b?d+="00":4096>b&&(d+="0");return Ma[a]=d+b.toString(16)}));b.push('"')};var I="google_ad_block google_ad_channel google_ad_client google_ad_format google_ad_height google_ad_host google_ad_host_channel google_ad_host_tier_id google_ad_output google_ad_override google_ad_region google_ad_section google_ad_slot google_ad_type google_ad_width google_adtest google_allow_expandable_ads google_alternate_ad_url google_alternate_color google_analytics_domain_name google_analytics_uacct google_bid google_city google_color_bg google_color_border google_color_line google_color_link google_color_text google_color_url google_container_id google_contents google_country google_cpm google_ctr_threshold google_cust_age google_cust_ch google_cust_gender google_cust_id google_cust_interests google_cust_job google_cust_l google_cust_lh google_cust_u_url google_disable_video_autoplay google_ed google_eids google_enable_ose google_encoding google_font_face google_font_size google_frame_id google_gl google_hints google_image_size google_kw google_kw_type google_lact google_language google_loeid google_max_num_ads google_max_radlink_len google_mtl google_num_radlinks google_num_radlinks_per_unit google_num_slots_to_rotate google_only_ads_with_video google_only_pyv_ads google_only_userchoice_ads google_override_format google_page_url google_previous_watch google_previous_searches google_referrer_url google_region google_reuse_colors google_rl_dest_url google_rl_filtering google_rl_mode google_rt google_safe google_sc_id google_scs google_sui google_skip google_tag_info google_targeting google_tdsma google_tfs google_tl google_ui_features google_ui_version google_video_doc_id google_video_product_type google_with_pyv_ads google_yt_pt google_yt_up".split(" ");var Oa=/\.((google(|groups|mail|images|print))|gmail)\./,Pa=function(){var a=J,b=Oa.test(a.location.host);return!(!a.postMessage||!a.localStorage||!a.JSON||b)};var Qa=function(a){this.b=a;a.google_iframe_oncopy||(a.google_iframe_oncopy={handlers:{}});this.j=a.google_iframe_oncopy},Ra;var K="var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&&d&&(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){w.location.replace(h)}}";
/[&<>\"]/.test(K)&&(-1!=K.indexOf("&")&&(K=K.replace(ma,"&amp;")),-1!=K.indexOf("<")&&(K=K.replace(na,"&lt;")),-1!=K.indexOf(">")&&(K=K.replace(oa,"&gt;")),-1!=K.indexOf('"')&&(K=K.replace(pa,"&quot;")));Ra=K;Qa.prototype.set=function(a,b){this.j.handlers[a]=b;this.b.addEventListener&&!/MSIE/.test(navigator.userAgent)&&this.b.addEventListener("load",l(this.k,this,a),h)};Qa.prototype.k=function(a){a=this.b.document.getElementById(a);var b=a.contentWindow.document;if(a.onload&&b&&(!b.body||!b.body.firstChild))a.onload()};function Sa(){var a=J,b=J.document,c=a.google_ad_width,e=a.google_ad_height,d;a:{try{d=a.top.document==b;break a}catch(k){}d=h}if(d)return h;d=b.documentElement;if(c&&e){var n=1,r=1;a.innerHeight?(n=a.innerWidth,r=a.innerHeight):d&&d.clientHeight?(n=d.clientWidth,r=d.clientHeight):b.body&&(n=b.body.clientWidth,r=b.body.clientHeight);if(r>2*e||n>2*c)return h}return f};var Ta=function(){var a="script";return["<",a,' src="',Ha(la(),["/pagead/js/",t(),"/r20130206/show_ads_impl.js"].join(""),""),'"></',a,">"].join("")},Ua=function(a,b,c,e){return function(){var d=h;e&&Ba().al(3E4);try{if(C(a.document.getElementById(b).contentWindow)){var k=a.document.getElementById(b).contentWindow,n=k.document;if(!n.body||!n.body.firstChild)n.open(),
k.google_async_iframe_close=f,n.write(c)}else{var r=a.document.getElementById(b).contentWindow,ga;k=c;k=String(k);if(k.quote)ga=k.quote();else{for(var n=['"'],S=0;S<k.length;S++){var T=k.charAt(S),La=T.charCodeAt(0),Db=n,Eb=S+1,ha;if(!(ha=v[T])){var F;if(31<La&&127>La)F=T;else{var s=T;if(s in w)F=w[s];else if(s in v)F=w[s]=v[s];else{var q=s,u=s.charCodeAt(0);if(31<u&&127>u)q=s;else{if(256>u){if(q="\\x",16>u||256<u)q+="0"}else q="\\u",4096>u&&(q+="0");q+=u.toString(16).toUpperCase()}F=w[s]=q}}ha=F}Db[Eb]=
ha}n.push('"');ga=n.join("")}r.location.replace("javascript:"+ga)}d=f}catch(Qb){r=wa().google_jobrunner,Aa(r)&&r.rl()}d&&(new Qa(a)).set(b,Ua(a,b,c,h))}},Va=function(){var a=["<iframe"];ra(function(b,c){a.push(" "+c+'="'+(b==g?"":b)+'"')});a.push("></iframe>");return a.join("")},Wa=function(a,b){var c=J.google_ad_height,e=b?'"':"",d=e+"0"+e;a.width=e+J.google_ad_width+e;a.height=e+c+e;a.frameborder=d;a.marginwidth=d;a.marginheight=d;a.vspace=d;a.hspace=d;a.allowtransparency=e+"true"+e;a.scrolling=
e+"no"+e},Xa=Math.floor(1E6*Math.random()),Ya=function(a){for(var b=a.data.split("\n"),c={},e=0;e<b.length;e++){var d=b[e].indexOf("=");-1!=d&&(c[b[e].substr(0,d)]=b[e].substr(d+1))}b=c[3];if(c[1]==Xa&&(window.google_top_js_status=4,a.source==top&&0==b.indexOf(a.origin)&&(window.google_top_url=b,window.google_top_js_status=5),window.google_top_js_callbacks)){for(a=0;a<window.google_top_js_callbacks.length;a++)window.google_top_js_callbacks[a]();window.google_top_js_callbacks.length=0}};window.google_loader_used=f;(function(a){"google_onload_fired"in a||(a.google_onload_fired=h,ta(a,function(){a.google_onload_fired=f}))})(window);
if(!window.google_top_experiment&&(window.google_top_experiment=ua(["jp_c","jp_zl","jp_wfpmr"],ea),"jp_zl"===window.google_top_experiment||"jp_wfpmr"===window.google_top_experiment)){var Za=window,$a=2;try{Za.top.document==Za.document?$a=0:C(Za.top)&&($a=1)}catch(ab){}if(2!==$a)window.google_top_js_status=0;else if(top.postMessage){var bb;try{bb=top.frames.google_top_static_frame?f:h}catch(cb){bb=h}if(bb){var L=window;L.addEventListener?L.addEventListener("message",Ya,h):L.attachEvent&&L.attachEvent("onmessage",
Ya);window.google_top_js_status=3;var db={"0":"google_loc_request",1:Xa},eb=[],fb;for(fb in db)eb.push(fb+"="+db[fb]);top.postMessage(eb.join("\n"),"*")}else window.google_top_js_status=2}else window.google_top_js_status=1}var gb;if(window.google_enable_async===h)gb=0;else{var hb=navigator.userAgent;gb=(Ea.test(hb)||Fa.test(hb)?h:f)&&!window.google_container_id&&(!window.google_ad_output||"html"==window.google_ad_output)}
if(gb){var ib=window;ib.google_unique_id?++ib.google_unique_id:ib.google_unique_id=1;var J=window,G={};Wa(G,f);G.onload='"'+Ra+'"';for(var M,H=J,jb=H.document,N=G.id,kb=0;!N||H.document.getElementById(N);)N="aswift_"+kb++;G.id=N;G.name=N;jb.write(Ga());M=N;var lb,O=J;O.google_page_url&&(O.google_page_url=String(O.google_page_url));for(var mb=[],nb=0,ob=I.length;nb<ob;nb++){var pb=I[nb];if(O[pb]!=g){var qb;try{var rb=[];Ka(new Ia,O[pb],rb);qb=rb.join("")}catch(sb){}qb&&sa(mb,pb,"=",qb,";")}}lb=mb.join("");
var P=window,tb=P.google_ad_output,Q=P.google_ad_format;if(!Q&&("html"==tb||tb==g))Q=P.google_ad_width+"x"+P.google_ad_height;Q=Q&&(!P.google_ad_slot||P.google_override_format)?Q.toLowerCase():"";P.google_ad_format=Q;var R,ub=[x.google_ad_slot,x.google_ad_format,x.google_ad_type,x.google_ad_width,x.google_ad_height];if(y){var U;if(y){for(var vb=[],wb=0,V=y;V&&25>wb;V=V.parentNode,++wb)vb.push(9!=V.nodeType&&V.id||"");U=vb.join()}else U="";U&&ub.push(U)}var xb=0;if(ub){var yb=ub.join(":"),zb=yb.length;
if(0==zb)xb=0;else{for(var W=305419896,Ab=0;Ab<zb;Ab++)W^=(W<<5)+(W>>2)+yb.charCodeAt(Ab)&4294967295;xb=0<W?W:4294967296+W}}R=xb.toString();a:{var X=window,Y=X.google_async_slots;Y||(Y=X.google_async_slots={});var Bb=X.google_unique_id,Z=String("number"==typeof Bb?Bb:0);if(Z in Y&&(Z+="b",Z in Y))break a;Y[Z]={sent:h,w:X.google_ad_width||"",h:X.google_ad_height||"",adk:R,type:X.google_ad_type||"",slot:X.google_ad_slot||"",fmt:X.google_ad_format||"",cli:X.google_ad_client||"",saw:[]}}var Cb=/MSIE/.test(navigator.userAgent)?
0:ja&&"dev"!=t()?ia:fa,Fb=ja&&"dev"!=t()?["XN","PC"]:["X","XN","S","SN","PC"],$=J.google_ad_handling_experiment||(Pa()?ua(Fb,Cb):""),Gb="";if(Pa()&&"S"!=$&&"SN"!=$&&"XN"!=$){var Hb;Hb="zrt_ads_frame"+J.google_unique_id;var Ib=encodeURIComponent(J.google_page_url||Sa()?J.document.referrer:J.document.URL),Jb=g;"PC"==$&&(Jb="K-"+(Ib+"/"+R+"/"+J.google_unique_id));var A={};Wa(A,h);A.style="display:none";var Kb=Jb;A.id=Hb;A.name=Hb;var Lb=A,Mb;Mb=Ha(da("","googleads.g.doubleclick.net"),
["/pagead/html/",t(),"/r20130206/zrt_lookup.html",Kb?"#"+encodeURIComponent(Kb):""].join(""));Lb.src=Mb;Gb=Va()}for(var Nb=J,Ob=0,Pb=I.length;Ob<Pb;Ob++)Nb[I[Ob]]=g;var Rb=(new Date).getTime(),Sb=J.google_top_experiment,Tb=["<!doctype html><html><body>",Gb,"<script>",lb,"google_show_ads_impl=true;google_unique_id=",J.google_unique_id,';google_async_iframe_id="',M,'";google_ad_unit_key="',R,'";google_start_time=',m,";",Sb?'google_top_experiment="'+
Sb+'";':"",$?'google_ad_handling_experiment="'+$+'";':"","google_bpp=",Rb>m?Rb-m:1,";\x3c/script>",Ta(),"</body></html>"].join("");(J.document.getElementById(M)?Ca:Da)(Ua(J,M,Tb,f))}else window.google_start_time=m,document.write(Ta());})();
// JavaScript Document