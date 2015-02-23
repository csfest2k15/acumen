#acumen
acumen webpage Deployed at http://acumen2k15.herokuapp.com/

Description of Web Site

  The Webpage consists of a NavBar ( from line 30 to 67 ) in index.php
  
-----------------------------------------------------------------------------------------------------------------------------
  The webpage is mostly made up of a set of cool looking single pages.
  
  All Those single Pages are numbered from 0 to N (N=6, as for now) and are present inside the division "<div id="pt-main" class="pt-perspective">.." --> (reffered to as ["pt-main" div] from here on) (from line 69 to 415), important - The numbering is done in the same order that they appear in the div.
  
  ----------------------------------------------------------------------------------------------------------------------
  Every Page inside the "pt-main" div can be written as follows.
   <!-- N. Something -->
        <!-- The Below Div Gives Color to the Page-->
        <div class="pt-page pt-page-N" style="background-color: white;">
            
            <!-- Place for Things that are to be placed at a Paticular position/place in webpage like navbarColor and Slideshow and other cool stuff , These things are responsive on there own  --->
            
            <!-- The Below Div Gives Color to the Nav Bar-->
            <div class="navcolor" style="background-color: #123;">
            </div>
            <div class="container-fluid">
            <!-- Place for Things that are to be placed on the page like tables paragraphs headings stuff etc, These things are not responsive.--->
                <div class="somestyle">
                    <h1>Something</h1>
                </div>
            </div>
            
        </div>  
  
  --------------------------------------------------------------------------------------------------------------------------
  
  To Traverse from one page to another call the Function pageTransition(N,AnimationType) where
    N --> is the page Number 
    AnimationType --> is the type of animation required for transition
    AnimationType is a Number from 1 to 67 ( reffer setAnimation() function in Work.js),  if its value is anything other than [1,67] then the animation during the transaction from one page to another will be random.
    
    Example - 
    <a href="#" onclick="pageTransition(0,-1)">
                <span>Accumen</span>
    </a>

  ---------------------------------------------------------------------------------------------------------------------------
  
  Line 82 to 138 and 432 to 616 are for the SlideShow.
  Line 187 to 263 and 320 to 396 are for The Event List.
  
  outdated.
