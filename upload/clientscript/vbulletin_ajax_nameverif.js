/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 Patch Level 2
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2019 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
function vB_AJAX_NameVerify(C,A){var B=userAgent.match(/applewebkit\/([0-9]+)/);if(AJAX_Compatible&&!(is_saf&&!(B[1]>=412))){this.textobj=fetch_object(A);this.textobj.setAttribute("autocomplete","off");this.textobj.obj=this;this.varname=C;this.fragment="";this.timeout=null;this.ajax_req=null;this.get_text=function(){this.fragment=new String(this.textobj.value);this.fragment=PHP.trim(this.fragment)};this.key_event_handler=function(D){this.get_text();clearTimeout(this.timeout);this.timeout=setTimeout(this.varname+".name_verify();",500)};this.name_verify=function(){if(YAHOO.util.Connect.isCallInProgress(this.ajax_req)){YAHOO.util.Connect.abort(this.ajax_req)}this.ajax_req=YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url("ajax.php?do=verifyusername"),{success:this.handle_ajax_request,failure:vBulletin_AJAX_Error_Handler,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=verifyusername&username="+PHP.urlencode(this.fragment))};this.handle_ajax_request=function(F){if(F.responseXML&&(F.responseXML.getElementsByTagName("status").length>0)){var D=F.responseXML.getElementsByTagName("status")[0].firstChild.nodeValue;var E=F.responseXML.getElementsByTagName("message")[0].firstChild.nodeValue;var G=document.getElementById("reg_verif_div");YAHOO.util.Dom.setStyle(G,"display","block");if(D=="valid"){YAHOO.util.Dom.removeClass(G,"redbox");YAHOO.util.Dom.removeClass(this.textobj,"redbox");YAHOO.util.Dom.addClass(G,"greenbox");YAHOO.util.Dom.addClass(this.textobj,"greenbox")}else{YAHOO.util.Dom.removeClass(this.textobj,"greenbox");YAHOO.util.Dom.addClass(this.textobj,"redbox");YAHOO.util.Dom.removeClass(G,"greenbox");YAHOO.util.Dom.addClass(G,"redbox")}G.innerHTML=E}};this.textobj.onkeyup=function(D){return this.obj.key_event_handler(D)}}};