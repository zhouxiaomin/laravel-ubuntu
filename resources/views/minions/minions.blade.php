<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Minions</title>
<style>
* {
	margin:0;
	padding:0;
	list-style:none;
}
body {
	background:#1F1F1F; margin-top:100px;
}


/* css3 keyframes - animation 1 */
@-webkit-keyframes fadeInOut {
    from { -webkit-transform: rotateZ(0deg); }
    50% { -webkit-transform: rotateZ(180deg); }
    to { -webkit-transform: rotateZ(360deg); }
}
@-moz-keyframes fadeInOut {
    from { -moz-transform: rotateZ(0deg); }
    50% { -moz-transform: rotateZ(180deg); }
    to { -moz-transform: rotateZ(360deg); }
}
@-ms-keyframes fadeInOut {
    from { -ms-transform: rotateZ(0deg); }
    50% { -ms-transform: rotateZ(180deg); }
    to { -ms-transform: rotateZ(360deg); }
}
@-o-keyframes fadeInOut {
    from { -o-transform: rotateZ(0deg); }
    50% { -o-transform: rotateZ(180deg); }
    to { -o-transform: rotateZ(360deg); }
}
@keyframes fadeInOut {
    from { transform: rotateZ(0deg); }
    50% { transform: rotateZ(180deg); }
    to { transform: rotateZ(360deg); }
}

.xwcms {
	width: 220px;
	height: 220px;
	margin: 0 auto;
	background: no-repeat url("images/author.jpg") left top;
	-webkit-background-size: 220px 220px;
	-moz-background-size: 220px 220px;
	background-size: 220px 220px;
	-webkit-border-radius: 110px;
	border-radius: 110px;

    -webkit-animation: fadeInOut 3s linear infinite;
    -moz-animation: fadeInOut 3s linear infinite;
    -ms-animation: fadeInOut 3s linear infinite;
    -o-animation: fadeInOut 3s linear infinite;
    animation: fadeInOut 3s linear infinite;


/*	-webkit-animation-name: fadeInOut;
    -webkit-animation-timing-function: ease;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 4s;
    -webkit-animation-direction: alternate;*/

}

</style>
</head>
<body>
<div class="xwcms"></div>
</body>
</html>
