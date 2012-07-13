<!DOCTYPE html>
<html>
<meta name="robots" content="noindex,nofollow">
<meta charset="UTF-8">
<head>
	<link href="bobby.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="bobby.js"></script>
	<script type="text/javascript" src="frank.js"></script>
	<script type="text/javascript" src="timmy.js"></script>
    <title>Bobby</title>
</head>

<body>
<div id="wrapper" style="overflow: hidden;">
	<section id="bobby">	
		<h1>Code Cleaner</h3>
			<div id="left">
				<form name="ReplaceBoxForm">
					<textarea id="a" onBlur="this.value=removeMSWordChars(this.value);" name="a" onfocus="if (this.value=='Paste your bad HTML here') this.value='';" tabindex="1" /></textarea>				
					<span id="message" style="display:none;"><div class="actions">Voila! <a class="blue" href="#" onclick="document.ReplaceBoxForm.a.select(); return false;">Now select it!</a></div></span>
					<div class="actions" style="text-align:right;">
					<a href="#" id="FixMsWordChars" onClick="document.getElementById('message').style.display='block'" tabindex="2"> Go! </a> 
				   <!-- <input type=button value="Highlight All" onClick="javascript:this.form.a.focus();this.form.a.select();">-->			   
				  </div>
				</form>
				
			</div>
			<div id="right">
			<div class="howto">
				<h2>How it works</h2>
				<p> Code cleaner removes   characters that may interfer with rss syndication. These  characters can also display as funky boxes in HTML emails.</p>
				<h4>Special Characters</h4>
				<p>It corrects the following characters:</p>
			  <table cellpadding="5" cellspacing="0" border="1" style="font-family:'Courier New', Courier, monospace;border-style:1px solid #6E6D6B;" align="center">
				<tr>
				<td height="33" class="lightblue">&mdash;</td>
				<td>&amp;mdash;</td>
				<td class="lightblue">&rdquo;</td>        
				<td>&amp;rdquo;</td>
				</tr>
				<tr>
				<td class="lightblue">&ndash;</td>
						<td>&amp;ndash;</td>
						<td class="lightblue">&ldquo;</td>        
				<td>&amp;ldquo;</td>
				</tr>
				<tr>
				<td class="lightblue">&lsquo;</td>
						<td>&amp;lsquo;</td>
								<td class="lightblue">spaces</td>        
				<td>&amp;nbsp;</td>
				</tr>
				 <tr>
				<td class="lightblue">&rsquo;</td>
				<td>&amp;rsquo;</td>
						<td class="lightblue">&nbsp;</td>
				<td>&amp;hellip;</td>
				</tr>
			  </table>
		</table>
				<h4>Ampersands</h4>
				<p>It properly encodes ampersands:</p>
			  <table align="center" border="1"><tr><td>Bad: <code> & </code></td><td>Good: <code> &amp;amp;</code></td></tr></table>

			  <h4>Line Breaks</h4>
			  <p>It closes line breaks:</p>
			  <table align="center" border="1"><tr><td>Bad: <code>&lt;br&gt;</code></td><td>Good: <code>&lt;br /&gt;</code></td></tr></table>
			  <h4>Elipses</h4>
				<p>It<font color="#FF0000"> </font>turns  elipses into plain periods.</p> 
				<table border="1"><tr><td>Bad: <code>&hellip;</code></td><td>Good: ... (3 periods)</td></tr></table>
				<p><a href="http://moneymorning.com/article-posting.html">For a <em>complete posting guide</em> click here &raquo;</a></p>
		</div>
			</div>
	</section>
	<section id="frank">
		  <h1>URL Encoder</h1>
			<div id="right">
				<div class="howto">
					<h2>How it works</h2>
					<p>NOTE: Javascript Must be enabled to use this tool</p>
					<p>This form encodes or decodes a string using URL Encoding.  URL Encoding is used when placing text in a query string to avoid   it being confused with the URL itself. It is normally used when the browser sends form data to a web server. </p>
					<p> URL Encoding replaces &ldquo;unsafe&rdquo; characters	with &lsquo;%&rsquo; followed by their hex equivalent. Characters which need not be escaped are defined in <a href="http://www.ietf.org/rfc/rfc3986.txt">RFC3986</a> (which replaced <a href="http://www.ietf.org/rfc/rfc2396.txt">RFC2396</a>).	They are the 7-bit ASCII alphanumerics and the characters&nbsp;&ldquo;-._~&rdquo;. Unicode characters and 8-bit ASCII characters are	normally first encoded using UTF-8, as defined in <a href="www.ietf.org/rfc/rfc2279.txt">RFC2279</a>. </p>
				</div>
			</div>
			<div id="left">
				<h2>Encode for sharing (Facebook, Twitter, Email, Linkedin)</h2>
				<form name="URLForm" onSubmit="return false;" >
					<table>
						<tr>
							<td class="label"> URL: </td>
							<td colspan="2"><input name="F1"size="60" value="" /></td>
						</tr>
						<tr>
							<td class="label">Short URL: </td>
							<td colspan="2"><input name="T1"size="60" value="" /></td>
						</tr>
						<tr>
							<td class="label">Title</td>
							<td colspan="2"><input name="F2" size="60" value="Stone Crabs and the State of the Union" /></td>
						</tr>
						<tr>
							<td class="label"></td>
							<td colspan="2"><input id="RFC2396" name="RFC2396" type="checkbox" style="display:none;" checked/>
						  <label style="display:none;" for="#RFC2396">RFC2396 mode (no Unicode or UTF8, space encoded as &lsquo;+&rsquo;)</label>
							</td>
						</tr>
						<tr>
							<td class="label"></td>
							<td colspan="2">
								<div class="actions">
								  <a href="#" onclick="return FacebookURLEncode()"> Encode it! </a>
								  </div>
								  <!--<input value="URLDecode" TYPE="SUBMIT"
									  onclick="return URLDecode()" />-->
							</td>
						</tr>
						<tr>
							<td class="label"> Encoded for Facebook: </td>
							<td><input name="F3" class="output"size="60" readonly="readonly" /></td>
							<td> <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.F3.focus();URLForm.F3.select();return false;"> Select </a></div></td>
						</tr>
						<tr>
							<td class="label"> Encoded for Twitter: </td>
							<td>
							  <input name="T3" class="output" value=""size="60" /></td><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.T3.focus();URLForm.T3.select();return false;">Select</a></div>
							</td>
						</tr>
						<tr>
								<td class="label">Encoded for Linkedin: </td>
								<td>
								  <input name="L3" class="output" value=""size="60" /></td><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.L3.focus();URLForm.L3.select();return false;">Select </a></div>
								</td>
						 </tr>
						<tr>
							<td class="label">Encoded for Email: </td>
							<td>
							  <input name="E3" class="output" value=""size="60" /></td><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.E3.focus();URLForm.E3.select();return false;">Select </a></div>
							</td>
						</tr>
					</table>
				</form>
		</div>
	</section>
	<section id="timmy">
	  <h1>One-Click Opt-in Link Creator</h1>
	  <div id="right">
		<div class="howto">
		<h2>How it works</h2>
		<p>This form creates one-click opt-in links for email only. All fields use the same information used on the Form Creator page in SigupApp.  Do not enable tracking for this link when used in Milo or Message Central.</p>
		<h4>How to test in Milo</h4>
		<p>After the link has been created, test by placing your email address over the section of the link that contains <span style="background-color:#FFFF00;">&lt;%= :emailAddress %&gt;</span> . Then place the link in your browser's address bar and hit ENTER. You'll know the link works if you get the confirmation email in your inbox.</p>
		<h4>How to test in Message Central</h4>
		<p>After adding your content, click on the Preview tab. First put your email address into the input area next to Sample Recipient and click &quot;Refresh Preview&quot;. Look up and place your email address into the box below the &quot;Send Test Email Message&quot;. Click send. You should now be able to click on the link in your inbox and receive the optin message.</p>
		<p>&nbsp;</p>
		</div></div>
	<div id="left">
	  <h2>All fields below are required. All fields are editable.</h2>
	  <script type="text/javascript">
		var theFrom = new Array();
		theFrom['LISTNAME2'] = 'email@companyname';
		theFrom['LISTNAME5'] = 'email@companyname';
		theFrom['LISTNAME4'] = 'email@companyname';
		theFrom['LISTNAME3'] = 'email@companyname';
		theFrom['LISTNAME1'] = 'email@companyname';
		
		var theSubj = new Array();
		theSubj['LISTNAME2'] = 'Thank%20You%20and%20welcome';
		theSubj['LISTNAME5'] = 'Thank%20You';
		theSubj['LISTNAME4'] = 'Thank%20You%20and%20welcome';
		theSubj['LISTNAME3'] = 'Thank%20You';
		theSubj['LISTNAME1'] = 'Thank%20You%20and%20welcome';
		
		var theCode = new Array();
		theCode['LISTNAME2'] = 'SOURCECODE';
		theCode['LISTNAME5'] = 'SOURCECODE';
		theCode['LISTNAME4'] = 'SOURCECODE';
		theCode['LISTNAME3'] = '';
		theCode['LISTNAME1'] = 'SOURCECODE';
		
		var theEml = new Array();
		theEml['LISTNAME2'] = '_list2_email_name';
		theEml['LISTNAME5'] = '_list5_email_name';
		theEml['LISTNAME4'] = '_list4_email_name';
		theEml['LISTNAME3'] = ''; //Dont' send an email
		theEml['LISTNAME1'] = '_list1_email_name';
	</script>
	<form name="optinblaster" onSubmit="return false;">
	<table>
		<tr>
			<td class="label">Where are you sending this from?</td>
			<td>
				<select name="mailer" id="mailer">
					<option value="" selected></option>
					<option value='[%= :emailaddress %]'>MessageCentral</option>
					<option value='<%= :emailAddress %>'>Milo</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label">Source Code</td><td><input type="text" size="60" name="source" id="source" /></td>
		</tr>
		<tr>
			<td class="label">List Code</td>
			<td>
				<select name="list" id="list">
				<option value="" selected></option>
				  <option value=LISTNAME1>LISTNAME1</option>
				  <option value=LISTNAME2>LISTNAME2</option>
				  <option value=LISTNAME3>LISTNAME3</option>
				  <option value=LISTNAME4>LISTNAME4</option>
				  <option value=LISTNAME5>LISTNAME5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label">Email From</td><td><input type="text" size="60" name="fromname" id="fromname" value="" />
			</td>
		</tr>
		<tr>
			<td class="label">Email Subject</td><td><input type="text" size="60" name="subject" id="subject" /></td>
		</tr>
		<tr>
			<td class="label">Welcome Email<br /><span class="hints">(ex: _pge_WSII_OPTIN)</span></td><td><input type="text" size="60" name="email" id="email" /></td>
		</tr>
		<tr>
			<td class="label">Confirmation Page URL</td><td><input type="text" size="60" name="confirmation" /></td>
		</tr>
		<tr>
			<td colspan="2"><div class="actions" style="text-align:right;"><a href="#timmy" onclick="return optinBlaster(); return false;"> Make it! </a></div></td>
		</tr>
		<tr>
			<td class="label"></td><td><input class="output" type="text" size="60" name="final" readonly/></td>
		</tr>
	</table>

	</form> 
	<script type="text/javascript">
	document.optinblaster.list.onchange = updateFromName;
	function updateFromName()
	{
		var fromname_value = document.optinblaster.list;
		var subject_value = document.optinblaster.list;
		var source_value = document.optinblaster.list;
		var email_value = document.optinblaster.list;
		document.optinblaster.fromname.value = theFrom[fromname_value.value];
		document.optinblaster.subject.value = theSubj[subject_value.value];
		document.optinblaster.source.value = theCode[source_value.value];
		document.optinblaster.email.value = theEml[email_value.value];		
	}
	</script>
	</div>
	</section>
</div>


</body>
</html>

