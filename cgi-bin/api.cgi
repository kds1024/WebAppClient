#!/xampp/perl/bin/perl

print"Content-type: text/plain; charset=UTF-8\n";
print"Access-Control-Allow-Origin: *\n"; 
print"Connection: close\n";
print"\n";

use CGI;
my $cgi = CGI::new();
print $cgi->param('cmd');

#print "%params";
#pirnt "$ENV{'REMOTE_ADDR'}";
