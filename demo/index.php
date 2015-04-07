<?php
function hl($code) {
	echo "<pre>";
	highlight_string("<?php\n".$code."\n?>");
	echo "</pre>";
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<style>
	body ,html {
		background: #eee;
	}
	pre {
	  width: 700px;
	  padding: 1em;
	  color: #666666;
	  background-color: #CCC;
	  white-space: -moz-pre-wrap; /* Mozilla */
	  white-space: -pre-wrap;     /* Opera 4-6 */
	  white-space: -o-pre-wrap;   /* Opera 7 */
	  white-space: pre-wrap;      /* CSS3 */
	  word-wrap: break-word;      /* IE 5.5+ */
	}

	code {
	  font-family: monospace;
	  font-weight: normal;
	  line-height: 150%;
	  text-align: left;
	  margin-bottom: 10px;
	}

	h1,h2,h3,h4,h5,h6 {
		font-weight: 100;
	}
	a {
		-moz-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, background-color 0.2s ease-in-out;
		-webkit-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, background-color 0.2s ease-in-out;
		-o-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, background-color 0.2s ease-in-out;
		-ms-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, background-color 0.2s ease-in-out;
		transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, background-color 0.2s ease-in-out;
		color: #999;
		text-decoration: none;
		border-bottom: dotted 1.4px;
	}
	a:hover {
		border-bottom-color: transparent;
	}
	h2:target {
		color:red;
	}
	h3:target {
		color:blue;
	}
	h2 + div {
		margin-left: 2em;
		width: 700px;
	}
	h3 + div {
		margin-left: 4em;
		width: 700px;
	}
	</style>
</head>
<body>
<h1>きのこ調査プロジェクトAPI リファレンス</h1>
まだ作成中です
<hr>
<h2 id="1"><a href="#1">#1</a> はじめる前に</h2>
<div>
<h3 id="1-1"><a href="#1-1">#1-1</a>ダウンロード</h3>
<div>
このAPIはオープンソースです．<a href="">Github</a>からダウンロードしてください．<br>
ライセンスはMIT LICENSEです．自由に変えたり，ダウンロードしたりしてください．
</div>
<h3 id="1-2"><a href="#1-2">#1-2</a> インクルード</h3>
<div>
<a href="#1-1">#1-1</a>でダウンロードしてきたファイル一群を，使いたいファイルと同じディレクトリに設置してください．<br>
そして，使いたいファイルの先頭に，以下のコードをコピーしてください．
<?php
/* --include-- */

include("../lib/api.php");

/* sorce code */
$code = <<<EOT
include("data_api/lib/api.php");
EOT;
hl($code);

/* --/include-- */


echo "</div></div><hr>";


/* --count-- */

$code = <<<EOT
\$variable = new lists();
\$variable -> l_where = 'name';
echo "現在，" . \$variable -> num() . "種類です．";
EOT;
hl($code);

echo "<pre>";
$variable = new lists();
$variable -> l_where = 'name';
echo "現在，" . $variable -> num() . "種類です．";
echo "</pre>";

/* --/count-- */