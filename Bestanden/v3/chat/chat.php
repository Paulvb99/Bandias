<?
mysql_query("UPDATE `users` SET `chatlog`='<font color=\"gray\">You have just joined '+pChannel+'</font><br>',`chatlog_hulp`='<font color=\"gray\">You have just joined '+pChannel+'</font><br>' WHERE `login`='$data->login'");
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
			<table style="height:16px; float:left" cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:8px; background-image:url('images/chat/chat_bg_top_left.gif')">
					
					</td>
					<td style="background-image:url('images/chat/chat_bg_top_center.gif')" valign="middle">
						<a href="#" id="cnl_a9d3b2316fce2764e5bbd8e6c1a3d90e" onclick="chat_changeChannel('a9d3b2316fce2764e5bbd8e6c1a3d90e','Italie');return false" style="color:Red"><b>Italie</b></a>
					</td>
					<td style="width:8px; background-image:url('images/chat/chat_bg_top_right.gif')">
					
					</td>
				</tr>
			</table>
			<table style="height:16px; float:left" cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:8px; background-image:url('images/chat/chat_bg_top_left.gif')">
					
					</td>
					<td style="background-image:url('images/chat/chat_bg_top_center.gif')" valign="middle">
						<a href="#" id="cnl_2968e8b9543af54e21ed7c0377bc462b" onclick="chat_changeChannel('2968e8b9543af54e21ed7c0377bc462b','Hulp');return false" style="color:Red"><b>Hulp</b></a>
					</td>
					<td style="width:8px; background-image:url('images/chat/chat_bg_top_right.gif')">
					
					</td>
				</tr>
			</table>
					</td>
	</tr>
	<tr>
		<td  width="100%">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td id="chat_td" width="100%" height="500px" style="border:1px solid black;background-color:white;">
						<div style="width:100%; height:500px;background-color:white;overflow-x: none; overflow-y: auto;" id="chat_lines_scroll">
							<div id="chat_lines" style="width:100%; font-family:'Courier New', Courier, monospace; font-size:12px;">
							
							</div>
						</div>
					</td>
					<td id="chat_online_td" style="width:0px; height:100%" valign="top" align="right">
						<div id="chat_online_div" style="width:128px; height:100%; background-image:url('images/chat/chat_bg_online.gif'); background-repeat:repeat-y">
						
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td style=" background-image:url('images/chat/chat_bg_online_top.gif'); height:8px;">
										
									</td>
								</tr>
								<tr>
									<td id="chat_online" style="padding-left:3px;padding-right:3px;">
									
									</td>
								</tr>
							</table>
						
						</div>
					</td>
				</tr>
			</table>
		 	
		</td>
		
	</tr>
	<tr>
		<td align="right">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr id="smilebar" style="display:none">
					<td colspan="2" align="center" width="100%">
						<table width="100%" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td style="width:2px; background-image:url('images/chat/chat_smilebar_left.gif'); background-repeat:repeat-y;" align="left">
									<img src="images/chat/chat_smilebar_left.gif">
								</td>
									<td bgcolor="White">
												<table>
			<tr>
								<td>
					<a href="#" title=":|:" onclick="return smile_add(':|:');"><img src="images/smiles/icon_neutral.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":mrgreen:" onclick="return smile_add(':mrgreen:');"><img src="images/smiles/icon_mrgreen.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":D" onclick="return smile_add(':D');"><img src="images/smiles/icon_biggrin.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":arrow:" onclick="return smile_add(':arrow:');"><img src="images/smiles/icon_arrow.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":wink:" onclick="return smile_add(':wink:');"><img src="images/smiles/icon_wink.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":roll:" onclick="return smile_add(':roll:');"><img src="images/smiles/icon_rolleyes.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":twisted:" onclick="return smile_add(':twisted:');"><img src="images/smiles/icon_twisted.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":evil:" onclick="return smile_add(':evil:');"><img src="images/smiles/icon_evil.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":lol:" onclick="return smile_add(':lol:');"><img src="images/smiles/icon_lol.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title="8)" onclick="return smile_add('8)');"><img src="images/smiles/icon_cool.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":?" onclick="return smile_add(':?');"><img src="images/smiles/icon_confused.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":S" onclick="return smile_add(':S');"><img src="images/smiles/icon_confused.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":idea:" onclick="return smile_add(':idea:');"><img src="images/smiles/icon_idea.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":shock:" onclick="return smile_add(':shock:');"><img src="images/smiles/icon_eek.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":!:" onclick="return smile_add(':!:');"><img src="images/smiles/icon_exclaim.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":cry:" onclick="return smile_add(':cry:');"><img src="images/smiles/icon_cry.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":oops:" onclick="return smile_add(':oops:');"><img src="images/smiles/icon_redface.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":P" onclick="return smile_add(':P');"><img src="images/smiles/icon_razz.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":x" onclick="return smile_add(':x');"><img src="images/smiles/icon_mad.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":o" onclick="return smile_add(':o');"><img src="images/smiles/icon_surprised.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":(" onclick="return smile_add(':(');"><img src="images/smiles/icon_sad.gif" border="0"></a>
				</td>
								<td>
					<a href="#" title=":)" onclick="return smile_add(':)');"><img src="images/smiles/icon_smile.gif" border="0"></a>
				</td>
							</tr>
		</table>
		<script language="javascript">
			function smile_add(pSmile){
								if(document.getElementById('chat_text').value.length + pSmile.length < 200){
									document.getElementById('chat_text').value += pSmile;
					document.getElementById('chat_text').focus();
								}
								return false;
			}
		</script>
											</td>
								<td style="width:2px; background-image:url('images/chat/chat_smilebar_right.gif'); background-repeat:repeat-y;" align="left">
									<img src="images/chat/chat_smilebar_right.gif">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<form method="POST" onsubmit="chat_handleSend();return false">
					<td width="100%">
						<table style="height:26px" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td style="width:8px; background-image:url('images/chat/chat_bg_bottom_left.gif')">
									<img src="images/x.gif" width="8">
								</td>
								
								<td style="background-image:url('images/chat/chat_bg_bottom_center.gif')" valign="middle" width="100%">
									<input type="text" name="chat_text" id="chat_text" value="" maxlength="200" size="50" style="border:1px solid gray; font-family:verdana; font-size:11px; height:16px;">
									
									<img src="images/smiles/icon_biggrin.gif" style="cursor:pointer;" onclick="chat_switchSmileBar();">
									
									<input type="submit" id="chat_send" onclick="ajaxChat.sendMessage();" name="Verstuur" value="Verstuur"  style="border:1px solid gray; font-family:verdana; font-size:11px; height:16px; font-weight:bold;">
								</td>
								<td style="width:8px; background-image:url('images/chat/chat_bg_bottom_right.gif')">
									<img src="images/x.gif" width="8">
								</td>
							</tr>
						</table>
					</td>
					</form>
						<td valign="top" width="128" align="right">
						<div style="width:128px; height:16px; border-top:0px; background-image:url('images/chat/chat_tab_bottom.gif');">
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<br>
<center style="display:none">
<b><span id="chat_load">...</span> | <span id="chat_status" >...</span></b>
</center>
<script type="text/javascript" language="javascript">
	
	var chat_memberopen = false;
	var channel = "";
	var start_id = '0';
	var send_wait = false;
	
	window.onunload = chat_handleUnload;
	
	function chat_handleUnload(){
		chat_handleStatus('[#status#]left_channel');
			
		new Ajax.Request('chat/chat.offline.set.php?'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		 });
	}
	
	function chat_changeChannel(pChannel,pName){
		if(channel != pChannel){
			if(channel != ''){
				chat_deselectChannel(channel);
				chat_handleStatus('[#status#]left_channel');
			}
			document.getElementById('chat_lines').innerHTML = '';
			start_id = '0';
			channel = pChannel;
			chat_selectChannel(pChannel);
			chat_handleStatus('[#status#]enter_channel');
			chat_addEnterText(pName);
		}
	}
	
	function chat_addEnterText(pChannel){
		document.getElementById('chat_lines').innerHTML = '<font color="gray">You have just joined '+pChannel+'</font><br>';
	}
	
	function chat_selectChannel(pChannel){
		document.getElementById('cnl_'+pChannel).style.color = 'blue';
	}
	
	function chat_deselectChannel(pChannel){
		document.getElementById('cnl_'+pChannel).style.color = 'red';
	}
	
	
	
	function chat_handleStatus(pStats){
		new Ajax.Request('chat/chat.send.php?channel='+channel+'&text='+escape(pStats)+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		      document.getElementById('chat_text').value = '<?echo$_POST['chat_text'];?>';
		      chat_handleLinesSingle();
		    },
		    onFailure: function(){  }
		  });
		
	}

	function chat_handleSend(){
		if(send_wait) return false;
		new Ajax.Request('chat/chat.send.php?channel='+channel+'&text='+escape(document.getElementById('chat_text').value)+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		      document.getElementById('chat_text').value = '<?echo$_POST['chat_text'];?>';
		      document.getElementById('chat_send').disabled = true;
	          var start_id = '0';
		      send_wait = true;
		      //chat_handleLinesSingle();
		    },
		    onFailure: function(){  }
		  });
		document.getElementById('chat_text').value = '<?echo$_POST['chat_text'];?>';
	}
	
	function chat_handleLines(){
		var scrollto = handleShouldScroll();
		new Ajax.Request('chat/chat.lines.php?channel='+channel+'&start='+start_id+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		     // alert(response);
		      eval(response);
		      if(scrollto)handleScroll();
			  //setTimeout('chat_handleLines()',1000);
		    },
		    onFailure: function(){  }
		  });
		
	}
	
	function chat_handleLinesSingle(){
		var scrollto = handleShouldScroll();
		new Ajax.Request('chat/chat.lines.php?channel='+channel+'&start='+start_id+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		      if(scrollto)handleScroll();
		    },
		    onFailure: function(){  }
		  });
		
	}
	
	function chat_handleSetOnline(){
		new Ajax.Request('chat/chat.online.set.php?channel='+channel+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		  });
		 //setTimeout('chat_handleSetOnline()',5000);

	}
	
	function chat_handleGetOnline(){
		new Ajax.Request('chat/chat.online.get.php?channel='+channel+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		  });
		//setTimeout('chat_handleGetOnline()',4000);
	}
	
	function chat_handleKick(pId){
		new Ajax.Request('chat/chat.kick.php?id='+pId+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		     // alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		  });
	}
	
	function chat_handleBan(pId){
		new Ajax.Request('chat/chat.ban.php?id='+pId+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		  });
	}
	
	function chat_handleAccess(pId){
		new Ajax.Request('chat/chat.validate.access.php?'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		    },
		    onFailure: function(){  }
		  });
		//setTimeout('chat_handleAccess()',2000);
	}
	
	function chat_handleAllGets(){
		var scrollto = handleShouldScroll();
		new Ajax.Request('chat/chat.get.all.php?channel='+channel+'&start='+start_id+'&'+chat_deCache(),
  		{
		    method:'get',
		    onSuccess: function(transport){
		      var response = transport.responseText;
		      //alert(response);
		      eval(response);
		      if(scrollto)handleScroll();
              	var start_id = '1';
		      document.getElementById('chat_send').disabled = false;
		      send_wait = false;
		    },
		    onFailure: function(){  }
		  });
		setTimeout('chat_handleAllGets()',1000);
	}
	
	function handleShouldScroll(){
		return ((scrollTop=document.getElementById('chat_lines_scroll').scrollHeight - document.getElementById('chat_lines_scroll').scrollTop == 500) || (document.getElementById('chat_lines_scroll').scrollTop == 0));
	}
	
	function handleScroll(){
		document.getElementById('chat_lines_scroll').scrollTop=document.getElementById('chat_lines').scrollHeight;
	}
	
	function chat_handleExit(){
		document.location.href = 'index.php';
	}
	
	function chat_switchSmileBar(){
		if(document.getElementById('smilebar').style.display == 'none'){
			document.getElementById('smilebar').style.display = '';
		}else{
			document.getElementById('smilebar').style.display = 'none';
			
		}
	}
	
	function chat_openProfile(pId){
		document.location.href = 'index.php?a=profile&x=' + pId;
	}
	
	function chat_deCache(){
		return 'ms=' + new Date().getTime();
	}
	
	chat_changeChannel('a9d3b2316fce2764e5bbd8e6c1a3d90e','Italie');
	chat_handleSetOnline();
	chat_handleAllGets();
	setTimeout("handleScroll()",250);


</script>		</div>
	</td>
	</tr>

	</table>
	</td>
