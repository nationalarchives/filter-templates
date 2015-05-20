<!DOCTYPE html>
<html lang="en-gb">
<head>
<title>Family history research guides - The National Archives</title>
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

      <!-- PAGE HEADING and INTRODUCTION -->
      <div class="width-two-thirds">
        <div class="breather">
          <h2 class="increase margin-bottom-medium">Family history</h2>
          <p class="text-small">Learn how to find and use military records, wills, the census and a wide range of other records to trace your ancestors.</p>
        </div><!-- end breather -->
      </div><!-- end width-two-thirds -->
      <div class="width-one-third float-right banner-category banner-category-family"></div>
    </div><!-- end col --> 
  </div><!-- end row -->
  
  <div class="row"> 

    <!-- START LOCAL FILTERS -->
    <form id="guide-form" name="guide-form" method="get">
    <div class="col starts-at-full ends-at-one-third bg-light-grey clr">
      <div class="category-filter">
        <div class="breather pad-top-medium">
          <h2>Refine results of</h2>
          <select name="research-category" class="width-full margin-top-small" onchange="javascript:location.href = this.value;">
            <option value="index.php" selected="selected">Family history</option>
            <option value="first-world-war">First World War</option>
            <option value="second-world-war-research">Second World War</option>
            <option value="military-and-maritime">Military and maritime</option>
            <option value="social-and-cultural-history">Social and cultural history</option>
            <option value="criminals-courts-and-prisons">Criminals, courts and prisons</option>
            <option value="political-and-economic-history">Political history</option>
            <option value="foreign-and-colonial-history">Foreign and colonial history</option>
            <option value="land-and-maps">Land and maps</option>
            <option value="medieval-early-modern-history">Medieval and early modern history</option>
            <option value="records-for-current-legal-purposes">Records for current legal purposes</option>
            <option value="online">Online collections</option>
            <option value="title.php">All research guides</option>
          </select>
        </div><!-- end breather -->
        <div id="mobile-only">
          <div class="pad-small">
            <p>Show all filters</p>
          </div><!-- end pad-small -->
        </div><!-- end mobile-only -->
      </div><!-- end category-filter -->
      <div id="toggle-container">
        <div class="category-filter-footer"></div>
        <div class="breather">
          <div id="research-guidance-subcategories">
            <div class="filter-container clr"> 
              <a href="http://devlb.nationalarchives.gov.uk/beta/help-with-your-research/research-guides/?research-category=family-history" title="Clear all" class="filter-button-secondary float-left">Clear all</a>
              <input type="submit" class="float-right filter-button-primary" value="Apply">
              <?php include 'includes/filters.php'; ?>
              <a href="http://devlb.nationalarchives.gov.uk/beta/help-with-your-research/research-guides/?research-category=family-history" title="Clear all" class="filter-button-secondary float-left">Clear all</a>
              <input type="submit" class="float-right filter-button-primary" value="Apply">
            </div><!-- end filter-container --> 
          </div><!-- end research-guidance-subcategories --> 
        </div><!-- end breather --> 
      </div><!-- end toggle container -->
    </div><!-- end col --> 
    </form><!-- end guide-form -->
    <!-- END LOCAL FILTERS -->

    <!-- START RESULTS -->
    <div class="col starts-at-full ends-at-two-thirds box margin-none clr">
      <div class="heading-holding-banner">
        <h2><span><span>63 guides available</span></span></h2>
      </div><!-- end heading-holding-banner -->
      <div class="breather">
        <h3 class="margin-none float-left width-full-to-auto">How to look for records of...</h3>
        <span class="text-smallest float-left-to-right margin-bottom-medium margin-top-medium">
          <input type="checkbox" name="res-online" id="online-only" value="1" class="margin-right-small margin-top-small float-left">
          <label for="online-only" class="float-left">Show only guides with all records online</label>
        </span> 
        <div class="resource-results clr">
          <?php include 'includes/results.php'; ?>
        </div><!-- end resource-results -->
      </div><!-- end breather --> 
    </div><!-- end col --> 
    <!-- END RESULTS --> 

  </div><!-- end row -->
</main><!-- end page-wrap -->
<?php include 'includes/footer.php'; ?>
