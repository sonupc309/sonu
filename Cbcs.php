
<head>
<title>CBCS</title>
<link rel="stylesheet" type="text/css" href="./style.css">
<style>body{background:#00FF7F;font-family:'Lato',cursive,sans-serif color: #F19411;text-align:center;</style>
</head>
<body>
<center>
<font class="heading" color="#ff0000" size="7">CBCS POINTS Adder :)</font><br>


<?php
//user_id=
$uid='256774';

$headers[]='Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[]='User-Agent: Dalvik/1.6.0 (Linux; U; Android 4.2.2; Panasonic T31 Build/JDQ39)';
$headers[]='Host: www.genextstudents.com';
$headers[]='Connection: Keep-Alive';




$ch=curl_init('http://www.genextstudents.com/WS/index.php');
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,'exam_question_id%5B3%5D=6994&qtime%5B108396%5D=00%3A00%3A01&answer%5B325646%5D=1300264&answer%5B325635%5D=1300219&exam_question_id%5B9%5D=325635&qtime%5B6994%5D=00%3A00%3A01&exam_question_id%5B15%5D=109072&exam_question_id%5B0%5D=6918&option=Studyzone&exam_question_id%5B4%5D=6999&answer%5B6999%5D=27599&exam_question_id%5B12%5D=108381&answer%5B325427%5D=1299387&qtime%5B325421%5D=00%3A00%3A00&exam_id=39&answer%5B6918%5D=27273&qtime%5B109072%5D=00%3A00%3A01&answer%5B6929%5D=27317&exam_question_id%5B7%5D=325427&qtime%5B325454%5D=00%3A00%3A00&qtime%5B6929%5D=00%3A00%3A02&answer%5B108393%5D=433053&qtime%5B325646%5D=00%3A00%3A00&qtime%5B108393%5D=00%3A00%3A01&qtime%5B6935%5D=00%3A00%3A01&answer%5B325421%5D=1299363&answer%5B6994%5D=27579&exam_question_id%5B2%5D=6935&qtime%5B6999%5D=00%3A00%3A00&exam_question_id%5B11%5D=325646&qtime%5B325635%5D=00%3A00%3A05&answer%5B6935%5D=27341&qtime%5B109078%5D=00%3A00%3A01&qtime%5B108381%5D=00%3A00%3A01&exam_question_id%5B1%5D=6929&answer%5B7009%5D=27639&exam_question_id%5B13%5D=108393&exam_question_id%5B10%5D=325644&time_taken=00%3A00%3A39&answer%5B108396%5D=433066&task=saveBenchmarkExam&answer%5B109078%5D=435730&answer%5B108381%5D=433005&exam_question_id%5B5%5D=7009&exam_question_id%5B14%5D=108396&answer%5B325644%5D=&answer%5B109072%5D=435705&exam_question_id%5B17%5D=109080&qtime%5B6918%5D=00%3A00%3A10&answer%5B109080%5D=&qtime%5B325644%5D=00%3A00%3A00&qtime%5B7009%5D=00%3A00%3A01&exam_question_id%5B6%5D=325421&qtime%5B109080%5D=00%3A00%3A00&qtime%5B325427%5D=00%3A00%3A01&answer%5B325454%5D=&exam_question_id%5B16%5D=109078&exam_question_id%5B8%5D=325454&user_id='.$uid.'&');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
$html1=curl_exec($ch);
echo $html1;
curl_close($ch);


?>