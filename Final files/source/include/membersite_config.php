<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('http://cse-www.pltw.org/~gundg3zw/page.html');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('technictitansfrc@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'pav-dbs-0102.cn0q1utxeulh.us-east-1.rds.amazonaws.com',
                      /*username*/'gundg3zw',
                      /*password*/'aLlow5dust<',
                      /*database name*/'gundg3zw',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>