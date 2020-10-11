#!/xampp/perl/bin/perl

#print"Content-type: text/plain; charset=UTF-8\n";
print"Content-type: text/html; charset=UTF-8\n";
print"Access-Control-Allow-Origin: *\n"; 
#print"Connection: close\n";
print"\n";

use CGI;
my $cgi = CGI::new();

# key値取得
# ?cmd=set_channel+1の set_channel+1 を取得する
$value = $cgi->param('cmd');  # + はスペースに変換される
# スペースでスプリット
($command, $number) = split(/ /, $value);

# キー値をチェック
if ($command == 'get_channel') {
  #ファイルの有無確認
  if (-f "$ENV{'REMOTE_ADDR'}".'.txt') {
    #ファイル読み込み処理
    open(my $fh, '<', "$ENV{'REMOTE_ADDR'}".'.txt') or die "Can't oepn file: $!";
    while (my $line = <$fh>) {
      chomp($line); #\n削除
      print "$line";
    }
    close($fh);
  }
  else {
    #ファイルが存在しない時の処理
    print '0';
  }
}

if ($command == 'set_channel') {
  # ファイルの書き込み
  if (defined $number){
    open(my $fh, '>', "$ENV{'REMOTE_ADDR'}".'.txt') or die "Can't open file: $!";
    print $fh "$number\n";
    close($fh);
  }
}





# ファイルの書き込み
# ファイルは特に指定しない場合カレントディレクトリにに保存される
#open(my $fh, '>', "filename.txt") or die "Can't open file: $!";
#print $fh "hello,\n";
#print $fh "world.\n";
#close($fh);

# ファイルの読み出し
#open(my $fh, '<', "filename.txt") or die "Can't oepn file: $!";
#while (my $line = <$fh>) {
#  print $line;
#}
#close($fh);

# key値取得
# ?cmd=set_channel+1の set_channel+1 を取得する
#print $cgi->param('cmd');
#print $cgi->url_param('cmd');

# すべてのkey値を取得
#print $cgi->param();

# クエリを取得 ?以降の文字列取得
#print $ENV{'QUERY_STRING'};

#$buffer = $ENV{'QUERY_STRING'};
#print "$buffer\n";

#($name, $value) = split(/=/, $buffer);
#print "$name\n";
#print "$value\n";

# 「+」をスペースに変換してスプリット
# 「+」は正規表現のメタキャラなのでそのままではスプリットの文字として認識されない
#$value =~ tr/+/ /;
#($command, $number) = split(/ /, $value);
#print "$command\n";
#print "$number\n";

# メタキャラ「+」をエスケープして「+」と認識させてスプリットする 「\+」と記述する 
#($command, $number) = split(/\+/, $value);
#print "$command\n";
#print "$number\n";

# セレクトnumber返値
#print "$number";


# 利用できる環境変数の表示
#foreach my $key(keys %ENV) {
#  print "$key: $ENV{$key}", "\n";
#}

# アクセスしてきた相手IPアドレス表示
#print "$ENV{'REMOTE_ADDR'}";








