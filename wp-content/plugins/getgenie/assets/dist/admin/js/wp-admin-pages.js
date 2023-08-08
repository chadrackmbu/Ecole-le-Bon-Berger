(()=>{var e={150:()=>{}},t={};function n(a){var r=t[a];if(r!==undefined)return r.exports;var l=t[a]={exports:{}};return e[a](l,l.exports,n),l.exports}n.n=e=>{var t=e&&e.__esModule?()=>e["default"]:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var a in t)n.o(t,a)&&!n.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";function e(){return e=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var a in n)Object.prototype.hasOwnProperty.call(n,a)&&(e[a]=n[a])}return e},e.apply(this,arguments)}function t(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var a,r,l=[],i=!0,o=!1;try{for(n=n.call(e);!(i=(a=n.next()).done)&&(l.push(a.value),!t||l.length!==t);i=!0);}catch(c){o=!0,r=c}finally{try{i||null==n["return"]||n["return"]()}finally{if(o)throw r}}return l}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return a(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return a(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function a(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}var r=wp.element.useState,l=window.antd,i=l.Affix,o=l.Row,c=l.Col,s=l.Popover,g=l.Button,u=wp.i18n.__,m={gutter:32};function d(){var n=t(r(!1),2),a=(n[0],n[1],React.createElement("div",null,React.createElement("p",null,React.createElement("a",{target:"_blank",href:"https://getgenie.ai/docs/"},React.createElement("span",{className:"getgenie-icon-icon_02"}),u(" Documentation","getgenie"))),React.createElement("p",null,React.createElement("a",{target:"_blank",href:"https://getgenie.ai/support-ticket/"},React.createElement("span",{className:"getgenie-icon-icon_01"}),u(" Help & Support","getgenie")))));return React.createElement("header",null,React.createElement(i,{offsetTop:32,className:"getgenie-plugin-header"},React.createElement("div",{className:"getgenie-dashboard-header"},React.createElement(o,e({className:"getgenie-header-row"},m),React.createElement(c,{sm:10,xs:24},React.createElement("span",{className:"getgenie-dashboard-header-tooltip"},"V"+window.getGenie.config.version||0),React.createElement("img",{className:"getgenie-dashboard-header-image",src:"".concat(window.getGenie.config.assetsUrl,"/dist/admin/images/Genie_logo_black.svg"),alt:"Genie AI"})),React.createElement(c,{sm:10,xs:24},React.createElement("div",{className:"getgenie-dashboard-header-dropdown"},React.createElement(s,{placement:"bottom",content:a,overlayClassName:"getgenie-dashboard-header-dropdown-content",trigger:"click"},React.createElement(g,{className:"getgenie-dashboard-header-dropdown-button"},React.createElement("span",{className:"getgenie-dashboard-header-dropdown-button-svg getgenie-icon-icon"})," ",u("Help/Resources","getgenie")," ",React.createElement("span",{className:"getgenie-icon-arrow_down"})))))))))}var p=wp.i18n.__;function f(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var a,r,l=[],i=!0,o=!1;try{for(n=n.call(e);!(i=(a=n.next()).done)&&(l.push(a.value),!t||l.length!==t);i=!0);}catch(c){o=!0,r=c}finally{try{i||null==n["return"]||n["return"]()}finally{if(o)throw r}}return l}(e,t)||h(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function h(e,t){if(e){if("string"==typeof e)return y(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?y(e,t):void 0}}function y(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}var R=wp.i18n.__,v=window.antd,b=v.Form,E=v.Tooltip,w=v.Typography,S=wp.element,N=S.useEffect,k=S.useState,C=window.getGenie.Components.Common.RequestManager,_=C.HandleFetch,A=C.HandleResponse,G=window.getGenie.Components.Common,I=G.Libs,T=G.Utilities;const x=(0,window.getGenie.Components.Common.ReduxManager.ComposeComponents)((function(e){var t=e.setInput,n=e.getInputs,a=e.sidebar,r=f(k({}),2),l=r[0],i=r[1],o=f(k([]),2),c=o[0],s=o[1],g=f(k(1),2),u=g[0],m=g[1],p=f(k(!1),2),h=(p[0],p[1]),y=f(k(!1),2),v=y[0],S=y[1],C=f(k(!1),2),G=C[0],x=C[1],L=f(k([]),2),O=(L[0],L[1],f(k(!1),2)),U=(O[0],O[1]),F=f(k(null),2),j=F[0],M=F[1],W=function(){_((function(e){A(e,(function(){s(e.data.history)})),h(!1)}),"historyData")};N((function(){W()}),[]);var z=[{title:"Template Name",dataIndex:"templateTitle",key:"templateTitle",width:"25%"},{title:"Input",dataIndex:"input",key:"input",responsive:["sm"],render:function(e){if("string"==typeof e)return e;for(var t="",n=0,a=Object.entries(e);n<a.length;n++){var r=f(a[n],2),l=r[0],i=r[1],o=l.replace(/([A-Z])/g," $1"),c=o.charAt(0).toUpperCase()+o.slice(1);t+="<strong>".concat(c,":</strong> ").concat(i,"; ")}return React.createElement("span",{key:"${key}",dangerouslySetInnerHTML:{__html:t}})}},{title:"Date",dataIndex:"date",key:"date",width:"20%",responsive:["md"]}],P=function(e){a.rootContainer.querySelectorAll(".ant-tooltip").forEach((function(e){return e.style.visibility="visible"}));var t=e.replace(/<br\/>/g,"");T.GenieHelpers.copyToClipboard(t).then((function(){M(e),setTimeout((function(){M(null)}),2e3)}))["catch"]((function(){return console.log("Error while copying.")}))};return N((function(){var e,t;null!==(e=n.searchInput)&&void 0!==e&&e.length||null!==(t=n.dateRange)&&void 0!==t&&t.length||n.selectedUser?U(!0):U(!1)}),[n.searchInput,n.dateRange,n.selectedUser]),React.createElement(React.Fragment,null,React.createElement(d,null),React.createElement("div",{className:"getgenie-info-wrapper"},React.createElement("div",{className:"getgenie-history"},React.createElement(b,{layout:"vertical",onFinish:function(){h(!0);var e={};e.page=u,e.perPage=20,e.searchKeyword=n.searchInput||"",e.dateRange=(n.dateRange||[]).join("-"),e.wpUser=n.selectedUser||"",m(1),_((function(e){A(e,(function(){setHistoryData(e.data.list)}))}),"historyData",{}),setTimeout((function(){h(!1)}),2e3),t("searchInput",""),t("dateRange",[]),t("selectedUser",""),U(!1),U(!1)}},React.createElement(w.Title,{level:2},"Genie's ",R("History","getgenie")),React.createElement("div",{className:"getgenie-table"},React.createElement(I.Table,{rowData:function(e){return{onClick:function(){x(!0),i(e),S(!0)}}},columns:z,dataSource:c,pagination:!0})),G&&React.createElement(I.Modal,{className:"getgenie-history-modal",closeIcon:React.createElement("span",{className:"getgenie-icon-close1"}),isModalVisible:v,setIsModalVisible:S,onClose:function(){a.rootContainer.querySelectorAll(".ant-tooltip").forEach((function(e){return e.style.visibility="hidden"}))},centered:!0,footer:null},React.createElement("div",{className:"getgenie-modal-date"},React.createElement("h5",{className:"gg-label"},R("Template Name","getgenie"),": ",React.createElement("span",{className:"gg-value"},null==l?void 0:l.templateTitle)),React.createElement("h5",{className:"gg-label"},R("Creativity Level","getgenie"),": ",React.createElement("span",{className:"gg-value"},null==l?void 0:l.creativityLevel)),React.createElement("h5",{className:"gg-label"},R("Created at","getgenie"),": ",React.createElement("span",{className:"gg-value"},null==l?void 0:l.date))),React.createElement("div",{className:"getgenie-modal-contents"},React.createElement(w.Title,{level:3,className:"getgenie-modal-label"},R("Keyword Input","getgenie")),"string"==typeof l.input?React.createElement("div",{className:"getgenie-text genieText"},l.input):Object.values(l.input).map((function(e,t){return React.createElement("div",{key:t,className:"getgenie-text genieText"},React.createElement("span",{dangerouslySetInnerHTML:{__html:e}}),React.createElement(E,{placement:"right",title:j===e&&"Copied",visible:j===e&&v},React.createElement("span",{className:"getgenie-icon-icon_02",onClick:function(){P(e)}})))}))),React.createElement("div",{className:"getgenie-modal-contents"},React.createElement(w.Title,{level:3,className:"getgenie-modal-label"},R("Generated Content","getgenie"),l.output.length<1?": 0":""),l.output.map((function(e,t){return React.createElement("div",{key:t,className:"getgenie-text genieText"},React.createElement("span",{dangerouslySetInnerHTML:{__html:e}}),React.createElement(E,{placement:"right",title:j===e&&R("Copied","getgenie"),visible:j===e&&v},React.createElement("span",{className:"getgenie-icon-icon_02",onClick:function(){P(e)}})))}))))))))}),["getInputs","setInput","sidebar"]);var L=window.antd,O=L.Typography,U=L.Spin,F=wp.i18n.__;const j=function(e){var t=e.data,n=e.status,a=e.loading,r=e.title;return n&&React.createElement(U,{tip:"Loading...",spinning:a},React.createElement(O.Title,{level:4},r,":"),React.createElement("table",{className:"user-stats-table"},React.createElement("thead",null,React.createElement("tr",null,React.createElement("th",null,F("Limit","getgenie")),React.createElement("th",null,F("Usage","getgenie")),React.createElement("th",null,F("Usage Left","getgenie")))),React.createElement("tbody",null,a?React.createElement(React.Fragment,null,React.createElement("tr",null,React.createElement("td",null,F("Word Generate","getgenie"),":"),React.createElement("td",null,F("Word Generate","getgenie"),":"),React.createElement("td",null,F("Word Generate","getgenie"),":")),React.createElement("tr",null,React.createElement("td",null,F("Serp Analysis","getgenie"),":"),React.createElement("td",null,F("Serp Analysis","getgenie"),":"),React.createElement("td",null,F("Serp Analysis","getgenie"),":")),React.createElement("tr",null,React.createElement("td",null,F("Keyword Lookup","getgenie"),":"),React.createElement("td",null,F("Keyword Lookup","getgenie"),":"),React.createElement("td",null,F("Keyword Lookup","getgenie"),":"))):null==t?void 0:t.map((function(e,t){return React.createElement("tr",{key:t},React.createElement("td",null,e[0]),React.createElement("td",null,e[1]),React.createElement("td",null,e[2]))})))))};function M(e){return M="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},M(e)}function W(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var a,r,l=[],i=!0,o=!1;try{for(n=n.call(e);!(i=(a=n.next()).done)&&(l.push(a.value),!t||l.length!==t);i=!0);}catch(c){o=!0,r=c}finally{try{i||null==n["return"]||n["return"]()}finally{if(o)throw r}}return l}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return z(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return z(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function z(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}var P=wp.i18n.__,D=wp.element,H=D.useState,K=D.useEffect,B=window.antd,Y=B.Button,q=B.Divider,V=B.Form,$=(B.Spin,B.Typography),J=window.getGenie.Components.Common.RequestManager,Q=J.HandleFetch,X=J.HandleResponse,Z=window.getGenie.Components.Common.Libs;const ee=(0,window.getGenie.Components.Common.ReduxManager.ComposeComponents)((function(e){var t,n,a=e.getInputs,r=e.limitUsage,l=e.setLimitUsage,i=W(H(!1),2),o=i[0],c=i[1],s=W(H(!1),2),g=s[0],u=s[1],m=W(H("Current site"),2),p=m[0],f=m[1],h=W(H(r.sites),2),y=h[0],R=h[1],v=W(H(r.subscriptions),2),b=v[0],E=v[1],w=W(H(!!window.getGenie.config.siteToken),2),S=w[0],N=(w[1],W(H(React.createElement("p",null," Still can't find your license key? ",React.createElement("a",{href:"https://wpmet.com/support-ticket-form/",target:"_blank"}," Knock us here!  ")," ")),2)),k=N[0],C=N[1];K((function(){S&&(C("Your License Is Activated"),G())}),[]);var _=function(e){return e.replace(/^[_]*(.)/,(function(e,t){return t.toUpperCase()})).replace(/[_]+(.)/g,(function(e,t){return" "+t.toUpperCase()}))},A=function(e){if(0!==Object.values(e).length){var t=null==e?void 0:e.limits,n=null==e?void 0:e.usages,a=[];return Array.isArray(t)?a=t.map((function(e){var t=[],a=e.value||"~",r=n.find((function(t){return t.key===e.key})).value||0;return t.push("".concat(e.title,": ").concat(a)),t.push("".concat(e.title,": ").concat(r)),t.push("".concat(e.title,": ").concat(isNaN(a)?"~":Math.max(0,parseInt(a)-parseInt(r))||0)),t})):"object"===M(t)&&(a=Object.keys(t).map((function(e){var a=[],r=(null==t?void 0:t[e])||"~",l=(null==n?void 0:n[e])||0;return a.push("".concat(_(e),": ").concat(r)),a.push("".concat(_(e),": ").concat(l)),a.push("".concat(_(e),": ").concat(isNaN(r)?"~":Math.max(0,parseInt(r)-parseInt(l))||0)),a}))),a}},G=function(){y.length>0&&b.length>0||(u(!0),Q((function(e){X(e,(function(){var t,n,a,r,i,o,c=Object.values((null==e||null===(t=e.data)||void 0===t?void 0:t.subscriptionUsagesLimit)||{})||[];c=null===(n=c)||void 0===n?void 0:n.find((function(e){return"subscription"===(null==e?void 0:e.type)}));var s=A(c||{}),g=A((null===(a=Object.values((null==e||null===(r=e.data)||void 0===r?void 0:r.siteUsagesLimit)||{}))||void 0===a?void 0:a[0])||{});f((null===(i=Object.keys((null==e||null===(o=e.data)||void 0===o?void 0:o.siteUsagesLimit)||{}))||void 0===i?void 0:i[0])||"Current site"),E(s),R(g),l({sites:g,subscriptions:s})})),u(!1)}),"limitUsage"))},I=function(){c(!0),Q((function(e){X(e,(function(){window.location.reload()})),c(!1)}),"removeLicenseToken")};return React.createElement(React.Fragment,null,React.createElement(d,null),React.createElement("div",{className:"getgenie-info-wrapper"},React.createElement("div",{className:"getgenie-license-page ".concat(S)},!S&&React.createElement(React.Fragment,null,React.createElement($.Title,{level:2},P("License Settings","getgenie")),React.createElement($.Text,{strong:!0,level:2},P("You'll need a license to use both the free and pro version of GetGenie AI.","getgenie"),React.createElement(Y,{style:{boxShadow:"none"},ghost:!0,type:"link",href:"https://app.getgenie.ai/license/?product=free-trial",target:"_blank"},P("Claim your license here","getgenie")," →")),React.createElement(q,null),React.createElement("h3",null,P("If you have the license key, paste the code below and activate your subscription.","getgenie")),React.createElement("p",null,P("Or, follow the steps below to activate the Genie AI plugin","getgenie"),":"),React.createElement("ul",{className:"getgenie-license-page__steps"},React.createElement("li",null,P("Log in to your GetGenie account.","getgenie")),React.createElement("li",null,P("Generate a license key from Product Licenses then Manage Licenses.","getgenie")),React.createElement("li",null,P("Copy the license key text and paste it inside the input box below.","getgenie")))),React.createElement(V,{className:"getgenie-license-form",layout:"vertical",onFinish:function(){var e={license:a.licenseKey};c(!0),Q((function(e){X(e,(function(){window.location.reload()})),c(!1)}),"getLicenseToken",e)}},!S&&React.createElement(Z.Input,{name:"licenseKey",required:!0,maxLength:null===(t=window.getGenie.config)||void 0===t?void 0:t.licenseKeyLength,errorMessage:"Your key is empty!",label:"Your License Key",placeholder:"Please insert your license key here"}),React.createElement("div",{className:"getgenie-license-page--status ".concat(S?"valid":"invalid")}," ",k," "),React.createElement(j,{title:"Subscription stats",status:S,loading:g,data:b}),React.createElement(j,{title:"".concat(p," usage stats"),status:S,loading:g,data:y}),!S&&React.createElement(Z.Button,{className:"getgenie-license-active",loading:o,icon:React.createElement("span",{className:"getgenie-icon-check"}),type:"primary",htmlType:"submit",disabled:(a.licenseKey||"").length!=(null===(n=window.getGenie.config)||void 0===n?void 0:n.licenseKeyLength),size:"large"}," ",P("ACTIVATE NOW","getgenie"))),S&&React.createElement(React.Fragment,null,React.createElement("div",{className:"getgenie-item-flex"},React.createElement(Z.Button,{loading:o,onClick:function(){Z.ConfirmModal("Are you sure to remove license from this site?","",I)},type:"danger",size:"large"}," ",P("Remove license from this domain","getgenie")," "),React.createElement("p",null," ",P("See documentation","getgenie")," ",React.createElement("a",{href:"https://getgenie.ai/docs/getting-started/license-settings/",target:"_blank"}," here ")," "))))))}),["getInputs","limitUsage","setLimitUsage"]);var te=n(150),ne=n.n(te);const ae=[{title:"Blog Wizard",templateSlug:"blogWizard",description:"Get your blog article SERP-ready — from analyzing the keywords to generating content that ranks",categories:{general:{title:"General",slug:"general"}}},{title:"WooCommerce Wizard",templateSlug:"wooWizard",description:"Get conversion-friendly & SEO-optimized content for WooCommerce Product pages",categories:{general:{title:"General",slug:"general"}}}];function re(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var a,r,l=[],i=!0,o=!1;try{for(n=n.call(e);!(i=(a=n.next()).done)&&(l.push(a.value),!t||l.length!==t);i=!0);}catch(c){o=!0,r=c}finally{try{i||null==n["return"]||n["return"]()}finally{if(o)throw r}}return l}(e,t)||ie(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function le(e){return function(e){if(Array.isArray(e))return oe(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||ie(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function ie(e,t){if(e){if("string"==typeof e)return oe(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?oe(e,t):void 0}}function oe(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}var ce=window.getGenie.Components.Common.Libs,se=window.antd,ge=se.Col,ue=se.Input,me=se.Row,de=window.getGenie.Components.Common.ReduxManager.ComposeComponents,pe=wp.i18n.__,fe=wp.element.useState;const he=de((function(e){var t=e.setSidebar,n=(e.sidebar,e.templates),a=[].concat(le(ae),le(n.list)),r=re(fe(a),2),l=r[0],i=r[1];return React.createElement(React.Fragment,null,React.createElement(d,null),React.createElement("div",{className:"getgenie-info-wrapper"},React.createElement("div",{className:"getgenie-dashboard-templates getgenie-license-page"},React.createElement(me,null,React.createElement(ge,{xs:{span:24},sm:{span:24},md:16},React.createElement("h5",{className:"getgenie-title"},pe("Write Using Templates","getgenie"))),React.createElement(ge,{xs:{span:24},sm:{span:24},md:8},React.createElement(ue,{onChange:function(e){var t=e.target.value.toLowerCase(),n=a.filter((function(e){return e.title.toLowerCase().includes(t)}));i(n)},bordered:!1,className:"template-search",placeholder:pe("Search...","getgenie"),suffix:React.createElement("span",{className:"getgenie-icon-Search_icon"})}))),0===l.length?React.createElement("h4",{className:"getgenie-not-found-title"},pe("No template found","getgenie")):React.createElement(ce.Card,{list:l,column:3,handleClick:function(e,n){var a,r,l;if("blogWizard"==n.templateSlug){if("post"!==(null===(a=window.getGenie.config)||void 0===a?void 0:a.wizardScreen))return void window.open(null===(r=window.getGenie.config)||void 0===r||null===(l=r.wizardScreenUrl)||void 0===l?void 0:l.post,"_blank")}else if("wooWizard"==n.templateSlug){var i,o,c,s;if(null===(i=window.getGenie.config)||void 0===i||!i.wcActivated)return void ce.ErrorModal({title:"Plugin not found!",content:"WooCommerce is not installed or activated yet."});if("woo_product"!==(null===(o=window.getGenie.config)||void 0===o?void 0:o.wizardScreen))return void window.open(null===(c=window.getGenie.config)||void 0===c||null===(s=c.wizardScreenUrl)||void 0===s?void 0:s.woo_product,"_blank")}t({open:!0,enableFooter:!1,component:"WriteTemplatesScreen",currentTemplate:n.templateSlug})}},(function(e){return React.createElement(React.Fragment,null,React.createElement("h5",{"data-slug":null==e?void 0:e.templateSlug,className:"template-title"},e.title),React.createElement("p",{className:"template-description"},null==e?void 0:e.description))})))))}),["setSidebar","sidebar","templates"]);var ye=window.antd,Re=ye.Card,ve=ye.Row,be=ye.Col,Ee=wp.i18n.__;const we=function(){return React.createElement(React.Fragment,null,React.createElement(d,{headerRightVisible:!1}),React.createElement("div",{className:"getgenie-getting-started"},React.createElement("div",{className:"getgenie-getting-started-header"},React.createElement("h3",{className:"getgenie-getting-started-header-title"},Ee("Get Started with GetGenie","getgenie")),React.createElement("p",{className:"getgenie-getting-started-header-description"},Ee("Setting up GetGenie AI takes only a few minutes! Simply go through the “Getting Started” video, click","getgenie"),React.createElement("br",null),Ee("the buttons below, and voila — the AI magic is ready for you!","getgenie"))),React.createElement("div",{className:"getgenie-getting-started-top_video"},React.createElement("iframe",{className:"getgenie-getting-started-top_video-iframe",src:"https://www.youtube.com/embed/jFxSqM0R8O4",title:"YouTube video player",frameBorder:"2",allow:"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:!0}),React.createElement("div",{className:"getgenie-getting-started-top_video-button-container"},React.createElement("a",{target:"_blank",className:"getgenie-getting-started-top_video-button",href:"https://app.getgenie.ai/license/?product=free-trial"},Ee("Manage Your License","getgenie")),React.createElement("a",{target:"_blank",className:"getgenie-getting-started-top_video-button",href:"https://getgenie.ai/docs/getting-started/getting-started-with-getgenie-ai/"},Ee("Read the Documentation","getgenie")))),React.createElement("div",{className:"getgenie-getting-started-card-container"},React.createElement(ve,{gutter:[16,16]},React.createElement(be,{sm:24,lg:8},React.createElement(Re,null,React.createElement("h3",null,Ee("Write Blog Posts with AI","getgenie")),React.createElement("p",null,Ee("Learn how you can generate an entire blog post customized to your needs using the “Blog Writing Assistant” of GetGenie","getgenie")),React.createElement("iframe",{width:"560",height:"315",src:"https://www.youtube.com/embed/5lIwXUS8QHE",title:"YouTube video player",frameBorder:"0",allow:"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:!0}),React.createElement("a",{target:"_blank",className:"getgenie-getting-started-card-container-documentation-btn",href:"https://getgenie.ai/docs/how-to-tutorials/getgenie-ai-blog-wizard/?utm_source=inplugin&utm_medium=button&utm_campaign=onboarding"},Ee("Read the Documentation","getgenie")))),React.createElement(be,{sm:24,lg:8},React.createElement(Re,null,React.createElement("h3",null,Ee("SEO Optimize Your Content","getgenie")),React.createElement("p",null,Ee("Watch how you can optimize the generated content for SEO on the go using the SEO mode & On-Page Content Score of GetGenie","getgenie")),React.createElement("iframe",{width:"560",height:"315",src:"https://www.youtube.com/embed/yDC6kC3NDUQ",title:"YouTube video player",frameBorder:"0",allow:"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:!0}),React.createElement("a",{target:"_blank",className:"getgenie-getting-started-card-container-documentation-btn",href:"https://getgenie.ai/docs/seo-assistant/getgenie-seo-features/?utm_source=inplugin&utm_medium=button&utm_campaign=onboarding"},Ee("Read the Documentation","getgenie")))),React.createElement(be,{sm:24,lg:8},React.createElement(Re,null,React.createElement("h3",null,Ee("Utilize 30+ AI Templates","getgenie")),React.createElement("p",null,Ee("Learn how to use 30+ GetGenie templates to generate content & copies (AIDA template has been shown as an example)","getgenie")),React.createElement("iframe",{width:"560",height:"315",src:"https://www.youtube.com/embed/gBrzoRkp6OA",title:"YouTube video player",frameBorder:"0",allow:"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:!0}),React.createElement("a",{target:"_blank",className:"getgenie-getting-started-card-container-documentation-btn",href:"https://getgenie.ai/docs/getting-started/getgenie-ai-templates-walkthtough/?utm_source=inplugin&utm_medium=button&utm_campaign=onboarding"},Ee("Read the Documentation","getgenie")))))),React.createElement("div",{className:"getgenie-getting-started-resource"},React.createElement("h3",null,Ee("More Resources to Check Out","getgenie")),React.createElement(ve,{gutter:[8,16]},React.createElement(be,{xs:24,sm:24,lg:{span:24},xl:{span:12,offset:6}},React.createElement(Re,{className:"getgenie-getting-started-resource-card"},React.createElement("h4",null,Ee("Documentation","getgenie")),React.createElement("ul",null,React.createElement("li",null,React.createElement("a",{target:"_blank",href:"https://getgenie.ai/docs-category/templates/"},Ee("Templates","getgenie"))),React.createElement("li",null,React.createElement("a",{target:"_blank",href:"https://getgenie.ai/docs/seo-assistant/getgenie-seo-features/"},Ee("GetGenie SEO Features","getgenie"))),React.createElement("li",null,React.createElement("a",{target:"_blank",href:"https://getgenie.ai/docs-category/how-to-tutorials/"},Ee("How to Tutorials","getgenie"))))))))))};window.getGenie.Components.AdminPages={HelpAdminPage:function(){var e="".concat(window.getGenie.config.assetsUrl,"dist/admin/images"),t=[{label:p("Support Center","getgenie"),desc:p("Our experienced support team is ready to resolve your issues any time.","getgenie"),image:"".concat(e,"/support.png"),url:"https://getgenie.ai/support-ticket/"},{label:p("Join The Community","getgenie"),desc:p("Follow us and stay connected for all the latest news and updates of GetGenie AI.","getgenie"),image:"".concat(e,"/community.png"),url:"https://www.facebook.com/groups/792474565423684"},{label:p("Video Tutorials","getgenie"),desc:p("Learn the step by step process for developing your site easily from video tutorials.","getgenie"),image:"".concat(e,"/videos.png"),url:"https://www.youtube.com/channel/UCzPzYrqhFgvyvmm0uoLG6Jw"},{label:p("Request A Feature","getgenie"),desc:p("Have any special feature in mind? Let us know through the feature request.","getgenie"),image:"".concat(e,"/request.png"),url:"https://getgenie.ai/roadmap/"},{label:p("Documentation","getgenie"),desc:p("Detailed documentation to help you understand the functionality of each feature.","getgenie"),image:"".concat(e,"/documentation.png"),url:"https://getgenie.ai/docs/"},{label:p("Public Roadmap","getgenie"),desc:p("Check our upcoming new features, detailed development stories and tasks","getgenie"),image:"".concat(e,"/roadmaps.png"),url:"https://getgenie.ai/roadmap/"}],n=[{label:"ElementsKit",desc:p("All-in-One drag and drop Addons for Elementor","getgenie"),image:"".concat(e,"/elementskit.svg"),url:"https://wpmet.com/plugin/elementskit/"},{label:"MetForm",desc:p("Most flexible drag-and-drop form builder","getgenie"),image:"".concat(e,"/metform-logo.svg"),url:"https://wpmet.com/plugin/metform/"},{label:"ShopEngine",desc:p("All-in-one WooCommerce builder addon for Elementor","getgenie"),image:"".concat(e,"/shopengine.svg"),url:"https://wpmet.com/plugin/shopengine/"},{label:"WP Social",desc:p("Integrate all your social media to your website","getgenie"),image:"".concat(e,"/wp-social-logo.svg"),url:"https://wpmet.com/plugin/wp-social/"},{label:"Ultimate Review",desc:p("Integrate various styled review system in your website","getgenie"),image:"".concat(e,"/untimate-review.svg"),url:"https://products.wpmet.com/review/?ref=wpmet"},{label:"Fundraising & Donation Platform",desc:p("Enable donation system in your website","getgenie"),image:"".concat(e,"/fundraising.svg"),url:"https://products.wpmet.com/crowdfunding/?ref=wpmet"}];return React.createElement(React.Fragment,null,React.createElement(d,{headerRightVisible:!1}),React.createElement("div",{className:"getgenie-get-help-page"},React.createElement("div",{className:"getgenie-helpful-links"},t.map((function(e,t){return React.createElement("a",{key:t,className:"getgenie-help-card",href:e.url,target:"_blank"},React.createElement("img",{src:e.image,alt:e.label}),React.createElement("label",null,e.label),React.createElement("span",null,e.desc))}))),React.createElement("div",{className:"getgenie-products"},React.createElement("div",{className:"getgenie-products__header"},React.createElement("h1",null,p("Take your website to the next level","getgenie")),React.createElement("p",null,p("We have some plugins you can install to get most from Wordpress.","getgenie"),React.createElement("br",null)," ",p("These are absolute FREE to use.","getgenie"))),React.createElement("div",{className:"getgenie-products__content"},n.map((function(e,t){return React.createElement("a",{key:t,className:"getgenie-help-card",href:e.url,target:"_blank"},React.createElement("label",null,React.createElement("img",{src:e.image,alt:e.label})," ",e.label),React.createElement("span",null,e.desc))}))))))},HistoryAdminPage:x,LicenseAdminPage:ee,SettingsAdminPage:ne(),WriteForMeAdminPage:he,GettingStarted:we}})()})();