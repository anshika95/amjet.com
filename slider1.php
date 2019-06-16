<html>
<head>
<!--Make sure page contains valid doctype at the very top!-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="stepcarousel.js">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* Please keep this notice intact
***********************************************/

</script>

<style type="text/css">

.stepcarousel{
position:relative; /*leave this value alone*/
border:;
overflow: scroll; /*leave this value alone*/
width: 1800px; /*Width of Carousel Viewer itself*/
height: 600px; /*Height should enough to fit largest content's height*/
-webkit-box-sizing: border-box; /* set box model so container width and height value includes any padding/border defined */
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 0px; /*margin around each panel*/
width:1800px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}

span.paginatecircle{ /* CSS for paginate circle spans. Required */
background: yellow;
border: 2px solid blue;
border-radius: 10px;
width: 10px;
height: 10px;
cursor: pointer;
display: inline-block;
margin-right: 4px;
}

span.paginatecircle:hover{
background: gray;
}

span.paginatecircle.selected{
background: black;
}

</style>



<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:2000},
	panelbehavior: {speed:200, wraparound:true, wrapbehavior:'slide', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['arrowl.gif', -5, 80], rightnav: ['arrowr.gif', -20, 80]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>
</head>
 <br><p>
<h1>
<font="lucida handwriting">

<font size="40">
<u><i><center> WELCOME TO AMJET AIRWAYS</center></i></u>
</h1>
<p> 

<body background="sky.jpg">

<div align="center" id="mygallery" class="stepcarousel">
<div align="center" class="belt">


<div class="panel">
<img src="AA2.jpg" />
</div>

<div class="panel">
<img src="hotel.jpg" />
</div>

<div class="panel">
<img src="bigbang1.jpg" />
</div>

<div class="panel">
<img src="family.jpg" />
</div>

<div class="panel">
<img src="pilots.jpg" />
</div>

</div>
</div>

<p align="center" id="mygallery-paginate">

<span class="paginatecircle" data-moveby="1"></span>
</p>

<center>
<h3> <a href="flightform.php"> GUEST </a></h3>
<h3> <a href="registerform.php"> REGISTER</a></h3>
<h3> <a href="loginform.php"> LOGIN</a></h3>


</center>







</body>






</html>