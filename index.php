<!DOCTYPE html>
<head>
<style>

.video-container {

position: relative;

padding-bottom: 56.25%;

padding-top: 0px;

height: 0;

overflow: hidden;

}

.video-container iframe {

position: absolute;

top:0;

left: 0;

width: 100%;

height: 100%;

}
</style>
</head>

<body>
<div class="video-container">
<iframe width="560" height="315" src="https://drive.google.com/file/d/<?=$_GET['id']?>/preview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</body>
</html>
