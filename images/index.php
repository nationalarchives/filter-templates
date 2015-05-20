<!DOCTYPE html>
<html lang="en-gb">
<head>
<title>User testing session - The National Archives</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

<div id="page_wrap" class="container" role="main"> 
  
  <!-- BREADCRUMBS -->
  <div class="row" id="breadcrumb-holder">
    <div class="col starts-at-full clr">
      <div id="breadcrumb"> <span class="first"><a href="http://www.nationalarchives.gov.uk">Home</a> &gt;</span> <span prefix="v: http://rdf.data-vocabulary.org/#"> <span typeof="v:Breadcrumb"><a href="" rel="v:url" property="v:title">Records</a></span> &gt; <span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">User testing session</span></span> </span> </div>
    </div>
    <!--end col --> 
  </div>
  <!--end row --> 
  
  <!-- PRIMARY CONTENT -->
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner">
        <h1><span><span>User testing session</span></span></h1>
      </div>
      <div class="breather"> 
          <div id="index" class="grid-within-grid-three-item">
          	<div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="signpost.php">Option 1</a></h2>
                         <p>Looking for records of a British Army soldier up to 1913</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="research-guide.php">Option 2</a></h2>
                         <p>Military nursing<br /></p>
                    </div>     
                </div>
            </div>
            <div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="online-records.php">Option 3</a></h2>
                        <p>Prisoner of war interview reports 1914-1918</p>
                    </div>
                </div>
            </div>
          	<div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="signpost-alt.php">Option 4</a></h2>
                         <p>Looking for records of a British Army soldier up to 1913</p>
                    </div>
                </div> 
            </div>
            <div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="research-guide-alt.php">Option 5</a></h2>
                         <p>Military nursing<br /></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="feature-box">
                	<div class="breather">
                		<h2><a href="online-records-alt.php">Option 6</a></h2>
                        <p>Prisoner of war interview reports 1914-1918</p>
                    </div>
                </div>
            </div>
          </div>
      </div><!-- end breather --> 
      
    </div><!-- end col --> 
  </div><!-- end row --> 
</div><!-- end page-wrap -->

<?php include 'includes/footer.php'; ?>
<style>

.forty-five{
  width:45%;
  float:left;
  margin-right:5%;
}

.leftcol{
  width:20%;
  height:auto;
  position: relative;
  overflow: hidden;
  text-align: center;
}

.rightcol{

  width:78%;
}
.what-is-this{
  float:right;
  font-size: .9em;
  clear:both;
}
.oin{
  width:100%;
  height:auto;
  padding:0px;
  overflow: hidden;
}
.oin h2{
  margin:0px;
}
.oin-bar{

  width:100%;
  display: inline-block;
  background-attachment: fixed 
  background-color: #DDD;

  background: repeating-linear-gradient(
    -45deg,
    #DDDDDD,
    #DDDDDD 2px,
    #F3F3F3 2px,
    #F3F3F3 4px);

  background: -webkit-repeating-linear-gradient(
    -45deg,
    #DDDDDD,
    #DDDDDD 2px,
    #F3F3F3 2px,
    #F3F3F3 4px);
  transform:translateZ(0);
  background-size:40px 40px;
}
.onsite{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  width:100%;
  float:left;
  background-color: rgba(252, 228, 92, 0.7);
  border-left:5px solid #FCE45C;
  min-height:40px;
  height:auto; 
  font-size: 0.9em;
}
.onsite span,.online span{
  color:#000;
  position: relative;
  right:15px;
  float:right;
  font-size: 2em;
  font-family: "Bitter",Georgia,Verdana,Arial,Helvetica,serif;
  font-weight: 400;
}


.online{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  width:100%;
  float:left;
  background-color:rgba(0, 199, 199, 0.7);
  border-left:5px solid #099; 
  min-height:40px;
  height:auto;
  font-size: 0.9em;
}
.online p, .onsite p{
  float:left;
  position: relative;;
  top:10px;
  left:0;
  padding-left:10px;
}
.what-is-this{

  position:relative;
  display: inline;
}
.what-is-this a:hover{
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition: all .25s ease-out;
  -moz-transition: all .25s ease-out;
  -ms-transition: all .25s ease-out;
  -o-transition: all .25s ease-out;
  transition: all .25s ease-out;
}
.what-is-this a:hover:after {
  -webkit-transform: translateY(10px);
  -moz-transform: translateY(10px);
  -ms-transform: translateY(10px);
  -o-transform: translateY(10px);
  transform: translateY(10px);
  -webkit-transition: all .25s ease-out;
  -moz-transition: all .25s ease-out;
  -ms-transition: all .25s ease-out;
  -o-transition: all .25s ease-out;
  transition: all .25s ease-out;

  -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);

  content: attr(rel);
  padding: 4px 8px;
  color: #000;
  position: absolute;
  right: 20px; 
  top: 110%;
  z-index: 2000;
  -moz-border-radius: 5px; 
  -webkit-border-radius: 5px;  
  background-color:#F3F3F3;
  width:200px;
}

@media screen and (max-width: 768px) {

  .forty-five{
    width:100%;

  }
  .onsite, .online{
    width:100% !important;
    float:none;
  }
  .what-is-this{

    display: none;
  }
  .leftcol,.rightcol{
    background-color: transparent;
    width:100%;
    text-align: left;
  }
  .online p, .onsite p{
    float:none;
    position: relative;
    top:0;
    left:0;
  }
}
/* START OF styles for research-guide-forms */

.research-guide-form {
  padding: 1em; 
  border: 1px solid #DEDEDE;
  background-color: #FAFAFA;
}

.research-guide-form h3.inline {
  margin-top: 0.2em;
}

.research-guide-form .field-row {
  margin-bottom: 0.5em;
}

.button-holder {
  padding-top: 1em;
}

.research-guide-form fieldset {
  padding: 0;
  border: none;
}

.research-guide-form legend {
  position:absolute;
  left:-10000px;
  top:auto;
  width:1px;
  height:1px;
  overflow:hidden;
}

.research-guide-form label {
  display: block;
}

.research-guide-form input[type=text] {
  border: 1px solid #ccc;
  padding: 5px 3px;
}


@media only screen and (min-width: 768px) {
  .research-guide-form label {
    display: inline-block;
    margin: 0;
    width: 47%;
  }
  @media only screen and (min-width: 768px)
  .width-half {
    width: 49%;
  }
}


</style>
