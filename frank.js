//<!CDATA[
// ====================================================================
//       URLEncode and URLDecode functions
//
// Copyright Albion Research Ltd. 2002
// http://www.albionresearch.com/
//
// You may copy these functions providing that 
// (a) you leave this copyright notice intact, and 
// (b) if you use these functions on a publicly accessible
//     web site you include a credit somewhere on the web site 
//     with a link back to http://www.albionresearch.com/
//
// If you find or fix any bugs, please let us know at albionresearch.com
//
// SpecialThanks to Neelesh Thakur for being the first to
// report a bug in URLDecode() - now fixed 2003-02-19.
// And thanks to everyone else who has provided comments and suggestions.
// ====================================================================
function FacebookURLEncode( )
{
	var urlvalue = document.URLForm.F1.value;
	var titlevalue = document.URLForm.F2.value;
	var shorturlvalue = document.URLForm.T1.value;
  if (document.URLForm.RFC2396.checked) {  // OLD Browser mode
    // The Javascript escape and unescape functions do not correspond
    // with what browsers actually do...
    var SAFECHARS = "0123456789" +					// Numeric
		        "ABCDEFGHIJKLMNOPQRSTUVWXYZ" +	// Alphabetic
		        "abcdefghijklmnopqrstuvwxyz" +
		        "-_.!~*'()";					// RFC2396 Mark characters
    var HEX = "0123456789ABCDEF";

    var encoded = "";
	var encoded2 = "";
	var encoded3 = "";
    for (var i = 0; i < urlvalue.length; i++ ) {
      var ch = urlvalue.charAt(i);
        if (ch == " ") {
          encoded += "+";				// x-www-urlencoded, rather than %20
      } else if (SAFECHARS.indexOf(ch) != -1) {
          encoded += ch;
      } else {
          var charCode = ch.charCodeAt(0);
        if (charCode > 255) {
            alert( "Unicode Character '" 
                          + ch 
                          + "' cannot be encoded using standard RFC2396 encoding.\n" +
	                  "(URL encoding only supports 8-bit characters.)\n" +
			          "A space (+) will be substituted." );
	        encoded += "+";
        } else {
	        encoded += "%";
	        encoded += HEX.charAt((charCode >> 4) & 0xF);
	        encoded += HEX.charAt(charCode & 0xF);
        }
      }
    } // for
	    for (var i = 0; i < titlevalue.length; i++ ) {
      var ch2 = titlevalue.charAt(i);
        if (ch2 == " ") {
          encoded2 += "+";				// x-www-urlencoded, rather than %20
      } else if (SAFECHARS.indexOf(ch2) != -1) {
          encoded2 += ch2;
      } else {
          var charCode2 = ch2.charCodeAt(0);
        if (charCode2 > 255) {
            alert( "Unicode Character '" 
                          + ch2 
                          + "' cannot be encoded using standard RFC2396 encoding.\n" +
	                  "(URL encoding only supports 8-bit characters.)\n" +
			          "A space (+) will be substituted." );
	        encoded2 += "+";
        } else {
	        encoded2 += "%";
	        encoded2 += HEX.charAt((charCode2 >> 4) & 0xF);
	        encoded2 += HEX.charAt(charCode2 & 0xF);
        }
      }
    } // for
	for (var i = 0; i < shorturlvalue.length; i++ ) {
      var ch3 = shorturlvalue.charAt(i);
        if (ch3 == " ") {
          encoded3 += "+";				// x-www-urlencoded, rather than %20
      } else if (SAFECHARS.indexOf(ch3) != -1) {
          encoded3 += ch3;
      } else {
          var charCode3 = ch3.charCodeAt(0);
        if (charCode3 > 255) {
            alert( "Unicode Character '" 
                          + ch3 
                          + "' cannot be encoded using standard RFC2396 encoding.\n" +
	                  "(URL encoding only supports 8-bit characters.)\n" +
			          "A space (+) will be substituted." );
	        encoded3 += "+";
        } else {
	        encoded3 += "%";
	        encoded3 += HEX.charAt((charCode3 >> 4) & 0xF);
	        encoded3 += HEX.charAt(charCode3 & 0xF);
        }
      }
    } // for

    document.URLForm.F3.value = 'http://www.facebook.com/sharer.php?u=' + encoded + '&t=' + encoded2;
	document.URLForm.T3.value = 'http://twitter.com/share?text=' + encoded2 + '&url=' + encoded3;
	document.URLForm.E3.value = 'mailto:?subject=' + encodeURIComponent(titlevalue) + '&body=Check%20out%20' + encoded;
	document.URLForm.L3.value = 'http://www.linkedin.com/shareArticle?mini=true&url=' + encoded + '&title=' + encoded2;
  } else {  // Modern browser mode
    document.URLForm.F3.value = 'http://www.facebook.com/sharer.php?u=' + encodeURIComponent(urlvalue) + '&t=' + encodeURIComponent(titlevalue);
	document.URLForm.T3.value = 'http://twitter.com/share?text=' + encodeURIComponent(titlevalue) + '&url=' + encodeURIComponent(shorturlvalue);
	document.URLForm.E3.value = 'mailto:?subject=' + encodeURIComponent(titlevalue) + '&body=Check%20out%20' + encodeURIComponent(urlvalue);
	document.URLForm.L3.value = 'http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(urlvalue) + '&title=' + encodeURIComponent(titlevalue);
  }
  document.URLForm.F3.select();
	return false;
};

function URLDecode( )
{
   var encoded = document.URLForm.F3.value;
   if (document.URLForm.RFC2396.checked) {  // OLD Browser mode
     // Replace + with ' '
     // Replace %xx with equivalent character
     // Put [ERROR] in output if %xx is invalid.
     var HEXCHARS = "0123456789ABCDEFabcdef"; 
     var plaintext = "";
     var i = 0;
     while (i < encoded.length) {
       var ch = encoded.charAt(i);
	     if (ch == "+") {
	         plaintext += " ";
		     i++;
	     } else if (ch == "%") {
			  if (i < (encoded.length-2) 
					  && HEXCHARS.indexOf(encoded.charAt(i+1)) != -1 
					  && HEXCHARS.indexOf(encoded.charAt(i+2)) != -1 ) {
				  plaintext += unescape( encoded.substr(i,3) );
				  i += 3;
			  } else {
				  alert( 'Bad escape combination near ...' + encoded.substr(i) );
				  plaintext += "%[ERROR]";
				  i++;
			  }
		  } else {
		     plaintext += ch;
		     i++;
		  }
	  } // while
     document.URLForm.F1.value = plaintext;
   } else { // Modern browser mode
     try {
         document.URLForm.F1.value = decodeURIComponent(encoded);
     } catch (error) {
         alert( error + ' - Probably the second byte of a Unicode character is missing.' );
     }
   }
   document.URLForm.F1.select();
   return false;
};
//]]>
