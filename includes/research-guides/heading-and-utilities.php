      <div class="heading-holding-banner clr">
        <h1><span><span>Research guides</span></span></h1>
        <div class="utilities">
          <ul>
            <li id="category-toggle">Choose a different subject</li>
            <li><a href="keyword.php">Use our A-Z index</a></li>
            <li id="search-toggle">Search all guides</li>
          </ul>
        </div><!-- end utilities -->
      </div><!-- end heading-holding-banner -->

      <!-- Search -->
      <div id="utility-search" class="width-full bg-light-grey float-left">
        <div class="pad-medium clr">
          <form method="get" action="search.php" class="search-container clr" role="search">
            <input type="text" class="search-field" id="search" name="search" placeholder="Search all guides">
            <input type="submit" class="search-button-medium" value="" id="s1">
          </form>
        </div><!-- end pad-medium -->
      </div><!-- end width-full -->

      <!-- Subjects -->
      <div id="utility-category" class="width-full bg-light-grey float-left">
        <div class="pad-medium clr">
          <form method="get" action="#">
            <select name="" class="margin-none margin-right-large" onchange="javascript:location.href = this.value;">
              <option>Select a subject</option>
              <option value="family-history.php">Family history</option>
              <option value="">First World War</option>
              <option value="">Second World War</option>
              <option value="">Military and maritime</option>
              <option value="">Social and cultural history</option>
              <option value="">Criminals, courts and prisons</option>
              <option value="">Political history</option>
              <option value="">Foreign and colonial history</option>
              <option value="">Land and maps</option>
              <option value="">Medieval and early modern history</option>
              <option value="">Records for current legal purposes</option>
              <option value="">Online collections</option>
              <option value="title.php">All research guides</option>
            </select>
          </form>
        </div><!-- end pad-medium -->
      </div><!-- end width-full --> 
