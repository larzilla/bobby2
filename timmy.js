function optinBlaster()
{
	var mailer_value = document.optinblaster.mailer.value;
	var listname = document.optinblaster.list.value;
	var sourceid = document.optinblaster.source.value;
	var emailpage = document.optinblaster.email.value;
	var emailsubj = document.optinblaster.subject.value;
	var email_from = document.optinblaster.fromname.value;
	var confpage = document.optinblaster.confirmation.value;

	if ((listname != "") && (sourceid != "") && (emailpage != "") && (emailsubj != "") && (email_from != "") && (confpage != ""))  {
		
		document.optinblaster.final.value = 'http://process.signupapp.com/?listCode=' + listname + '&sourceId=' + sourceid + '&emailAddress=' + mailer_value + '&email_page=' + emailpage + '&email_subject=' + emailsubj + '&email_from=' + email_from + '&redirect=' + confpage;
document.optinblaster.final.select();
   return false;
		
	}
	else {
		alert('Please complete all fields first');
	}

	
};
