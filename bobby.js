function removeMSWordChars(str) {
    var myReplacements = new Array();
    var myCode, intReplacement;
    myReplacements[8216] = 39;
    myReplacements[8217] = 39;
    myReplacements[8220] = 34;
    myReplacements[8221] = 34;
    myReplacements[8212] = 45;
    for(c=0; c<str.length; c++) {
        var myCode = str.charCodeAt(c);
        if(myReplacements[myCode] != undefined) {
            intReplacement = myReplacements[myCode];
            str = str.substr(0,c) + String.fromCharCode(intReplacement) + str.substr(c+1);
        }
    }
	
	String.prototype.multiReplace = function ( hash ) {
	var str = this, key;
	for ( key in hash ) {
		str = str.replace( new RegExp( key, 'g' ), hash[ key ] );
	}
	return str;
};
str = str.multiReplace({
	'&(?!#?\\w+;)' : '&amp;',
	'&rsquo;'      : '\'',
	'&quot;'      : '"',
	'&rdquo;'      : '"',
	'&lsquo;'      : '"',
	'&ldquo;'      : '"',
	'&nbsp;'       : '',
	'&hellip;'     : '...',
	'<p>' 		   : '',
	'</p>' 		   : '<br /><br />',
	'&ndash;'      : '-',
	'&mdash;'      : '-',
	'<a href'      : '<a target="_blank" href',
	'target="_blank">' : '>',
	'<br>'         : '<br />',
	'“'            : '"' ,
	'”'            : '"' ,
	'‘'            : '\'' ,
	'’'            : '\'' ,
	'—'            : '-' ,
	'…'            : '...' ,
	'<u></u>'      : '' ,
	'<em></em>'    : '' ,
	'</ul>\
<ul type="disc">' : '' ,
	'<strong></strong>' : '' ,
	'–'            : '-'
});
	
    return str;
}

 $(function(){
    $("textarea").blur(function(){
        $(this).val(removeMSWordChars(this.value));
    });
});
