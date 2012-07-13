<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<meta name="robots" content="noindex,nofollow">
<link href="bobby.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="bobby.js"></script>
<script type="text/javascript" src="frank.js"></script>
<script type="text/javascript" src="timmy.js"></script>
<script type="text/javascript" src="ZeroClipboard.js"></script>
<head>
    <title>Bobby</title>
</head>

<body>

<div id="wrapper" style="overflow: hidden;">
<h3 align="left">Code Cleaner<br />
  <br />
</h3>
    <div id="left">

        
<script type="text/javascript">
		window.addEvent("load",function() {
			
			setTimeout(function() {
				//set path
				ZeroClipboard.setMoviePath('http://moneymorning.com/bobby/ZeroClipboard.swf');
				//create client
				var clip = new ZeroClipboard.Client();
				//event
				clip.addEventListener('mousedown',function() {
					clip.setText(document.getElementById('a').value);
				});
				clip.addEventListener('complete',function(client,text) {
					alert('copied: ' + text);
				});
				//glue it to the button
				clip.glue('copy-btn');
			}, 2000);
			
		});
		
	</script>
	
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
<div style="clear:both;"></div>
<div style="text-align:left;" id="frank">
  <h3>URL Encoder</h3>
<div id="right">
    <div class="howto">
    <h2>How it works</h2>
    <p>NOTE: Javascript Must be enabled to use this tool</p>
<P>This form encodes or decodes a string using URL Encoding. 
  URL Encoding is used when placing text in a query string to avoid 
  it being confused with the URL itself. It is normally used 
  when the browser sends form data to a web server. 
</P>
<P>
URL Encoding replaces &ldquo;unsafe&rdquo; characters
with &lsquo;%&rsquo; followed by their hex equivalent. 
Characters which need not be escaped are defined 
in <A HREF="http://www.ietf.org/rfc/rfc3986.txt">RFC3986</A> (which replaced <a HREF="http://www.ietf.org/rfc/rfc2396.txt">RFC2396</a>).
They are the 7-bit ASCII alphanumerics and
the characters&nbsp;&ldquo;-._~&rdquo;. Unicode characters and 8-bit ASCII characters are
normally first encoded using UTF-8, as defined in <a href="www.ietf.org/rfc/rfc2279.txt">RFC2279</a>. </p>

    </div></div>
    <div id="left">
<h2>Encode for sharing (Facebook, Twitter, Email, Linkedin)</h2>
<FORM NAME="URLForm" onSubmit="return false;" >
<TABLE>
  <TR>
    <TD class="label">
      URL: </TD>
    <TD colspan="2">
      <INPUT NAME="F1" SIZE="60" VALUE="" />
    </TD>
    </TR>
      <TR>
    <TD class="label">
      Short URL: </TD>
    <TD colspan="2">
      <INPUT NAME="T1" SIZE="60" VALUE="" />
    </TD>
    </TR>
<tr>
  <Td class="label">Title</Td>
<td colspan="2"><input Name="F2" size="60" value="Stone Crabs and the State of the Union" />
</Td></tr>
   <TR>
    <TD class="label"></TD>
    <TD colspan="2">
      <input id="RFC2396" name="RFC2396" type="CHECKBOX" checked/>
      <label for="#RFC2396">RFC2396 mode (no Unicode or UTF8, space encoded as &lsquo;+&rsquo;)</label>
    </TD>

  </TR>
<TR>
    <TD class="label"></TD>
    <TD colspan="2">
    <div class="actions">
      <a href="#" onclick="return FacebookURLEncode()"> Encode it! </a>
      </div>
      <!--<INPUT VALUE="URLDecode" TYPE="SUBMIT"
          onclick="return URLDecode()" />--></TD>
  </TR>
  <TR>
    <TD class="label">
      Encoded for Facebook: </TD>
    <TD>
      <INPUT NAME="F3" class="output" SIZE="60" readonly="readonly" /></TD>
      <td> <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.F3.focus();URLForm.F3.select();return false;"> Select </a></div>
    </TD>

  </TR>
    <TR>
    <TD class="label">
      Encoded for Twitter: </TD>
    <TD>
      <INPUT NAME="T3" class="output" VALUE="" SIZE="60" /></TD><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.T3.focus();URLForm.T3.select();return false;">Select</a></div>
    </TD>

  </TR>
    <TR>
    <TD class="label">
      Encoded for Linkedin: </TD>
    <TD>
      <INPUT NAME="L3" class="output" VALUE="" SIZE="60" /></TD><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.L3.focus();URLForm.L3.select();return false;">Select </a></div>
    </TD>

  </TR>
      <TR>
    <TD class="label">
      Encoded for Email: </TD>
    <TD>
      <INPUT NAME="E3" class="output" VALUE="" SIZE="60" /></TD><td>  <div class="actions"><a class="blue" href="#frank" onClick="javascript:URLForm.E3.focus();URLForm.E3.select();return false;">Select </a></div>
    </TD>

  </TR>
</TABLE>
</FORM>
</div>

</div>
<div style="clear:both;"></div>
<div id="timmy">
  <h3>One-Click Opt-in Link Creator </h3>
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
    theFrom['MMKENTMO'] = 'Dr.%20Kent%20Moors%20%3ccustomerservice@oilandenergyinvestor.com%3e';
    theFrom['WALLSTII'] = 'Shah%20Gilani%20%3ccustomerservice@wallstreetinsightsandindictments.com%3e';
    theFrom['USMONEYM'] = 'Money%20Morning%20%3ccustomerservice@moneymorning.com%3e';
	theFrom['MMPCLICK'] = 'Real%20Asset%20Returns%20%3ccustomerservice@moneymappress.com%3e';
	theFrom['ERCHANGE'] = 'Michael%20Robinson%20%3ccustomerservice@eraofradicalchange.com%3e';
	
	var theSubj = new Array();
    theSubj['MMKENTMO'] = 'Welcome%20to%20Oil%20and%20Energy%20Investor';
    theSubj['WALLSTII'] = 'Welcome%20to%20Wall%20Street%20Insights%20and%20Indictments';
    theSubj['USMONEYM'] = 'Welcome%20to%20Money%20Morning';
	theSubj['MMPCLICK'] = 'Thank%20You';
	theSubj['ERCHANGE'] = 'Welcome%20to%20Era%20of%20Radical%20Change';
	
	var theCode = new Array();
    theCode['MMKENTMO'] = 'X304N502';
    theCode['WALLSTII'] = 'X304N503';
    theCode['USMONEYM'] = 'X304N501';
	theCode['MMPCLICK'] = '';
	theCode['ERCHANGE'] = 'X304N504';
	
	var theEml = new Array();
    theEml['MMKENTMO'] = '_pge_KM_OPT_IN';
    theEml['WALLSTII'] = '_pge_WSII_Generic_Opt_In';
    theEml['USMONEYM'] = '_pge_111_GenericOptinMM';
	theEml['MMPCLICK'] = '';
	theEml['ERCHANGE'] = '_ERC_BiggestTech';
	
</script>
<form name="optinblaster" onSubmit="return false;">
<table>
<tr><td class="label">Where are you sending this from?</td><td>
<select name="mailer" id="mailer">
<option value="" selected></option>
  <option value='[%= :emailaddress %]'>MessageCentral</option>
  <option value='<%= :emailAddress %>'>Milo</option>
</select>
<tr><td class="label">Source Code</td><td><input type="text" size="60" name="source" id="source" /></td></tr>
<tr><td class="label">List Code</td><td>


<select name="list" id="list">
<option value="" selected></option>
  <option value=ERCHANGE>ERCHANGE</option>
  <option value=MMKENTMO>MMKENTMO</option>
  <option value=MMPCLICK>MMPCLICK</option>
  <option value=USMONEYM>USMONEYM</option>
  <option value=WALLSTII>WALLSTII</option>
</select></td></tr>
<tr><td class="label">Email From</td><td><input type="text" size="60" name="fromname" id="fromname" value="" />
</td></tr>
<tr><td class="label">Email Subject</td><td><input type="text" size="60" name="subject" id="subject" /></td></tr>
<tr><td class="label">Welcome Email<br />
<span class="hints">(ex: _pge_WSII_OPTIN)</span></td><td><input type="text" size="60" name="email" id="email" /></td></tr>
<tr><td class="label">Confirmation Page URL</td><td><input type="text" size="60" name="confirmation" /></td></tr>
<tr><td colspan="2"><div class="actions" style="text-align:right;">
      <a href="#timmy" onclick="return optinBlaster(); return false;"> Make it! </a>
      </div></td></tr>
<tr><td class="label"></td><td><input class="output" type="text" size="60" name="final" readonly/></td></tr>
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

</div>


</div>


<p style="border-top:1px solid #CCCCCC;margin-top:35px;padding-top:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-size:16px;">For More documentation head over to <a href="http://www.reportfinance.com/dokuwiki/dokuwiki-2011-05-25a/doku.php?id=start&amp;#topics">the wiki</a></p>
</body>
</html>

