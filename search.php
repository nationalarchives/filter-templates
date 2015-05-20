<!DOCTYPE html>
<html lang="en-gb">
<head>
<title>Research guides - Search results - The National Archives</title>
<meta name="keywords" content="toggle-heading">
<meta name="description" content="toggle-heading">
<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>
<main id="page_wrap" class="container research-guide-filter" role="main"> 
  
  <!-- BREADCRUMBS -->
  <div class="row" id="breadcrumb-holder">
    <div class="col starts-at-full clr">
      <div id="breadcrumb"> <span class="first"><a href="http://www.nationalarchives.gov.uk">Home</a> &gt; </span><span><span><a href="index.php">Help with your research</a></span></span> &gt; <span><span><a href="title.php">Research guides</a></span></span> </div>
    </div><!--end col --> 
  </div><!--end row --> 
  
  <!-- SECTION HEADING and UTILITIES -->
  <div class="row">
    <div class="col starts-at-full box clr">
    <?php include 'includes/research-guides/heading-and-utilities.php'; ?>

      <!-- PAGE HEADING -->
      <div class="width-full">
        <h2 class="increase margin-none pad-large">Search results</h2>
      </div><!-- end breather -->
    </div><!-- end col --> 
  </div><!-- end row -->
  
  <!-- SEARCH RESULTS -->
  <div class="row"> 
    <div class="col starts-at-full box margin-none clr">
      <div class="heading-holding-banner">
        <h2><span><span>63 guides available for 'War'</span></span></h2>
      </div><!-- end heading-holding-banner -->
      <div class="breather">
        <h3 class="margin-none float-left width-full-to-auto">How to look for records of...</h3>
        <span class="text-smallest float-left-to-right margin-bottom-medium margin-top-medium">
          <input type="checkbox" name="res-online" id="online-only" value="1" class="margin-right-small margin-top-small float-left">
          <label for="online-only" class="float-left">Show only guides with all records online</label>
        </span> 
        <div class="resource-results clr">
          <?php include 'includes/results-3.php'; ?>
        </div><!-- end resource-results -->
      </div><!-- end breather --> 
    </div><!-- end col -->  
  </div><!-- end row -->

</main><!-- end page-wrap -->
<?php include 'includes/footer.php'; ?>
