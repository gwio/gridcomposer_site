<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <!--nav-->
  <?php include("nav.php") ?>



  <div class="w3-gc_black">
    <div class="w3-container w3-content">
      <div class="w3-row w3-display-container titleContainer">
        <div class="w3-col m7">
          <img src="images/gc_title.png" alt="GridComposer Title Image" style="width:100%">
        </div>
        <div class="w3-col m5">
          <div class="mainTitle">GridComposer</div>
          <div class="subTitle">Experimental Sequencer for iOS</div>
        </div>
        <a href="https://itunes.apple.com/us/app/gridcomposer/id993489006?ls=1&mt=8"><img class="applink" src="images/appstore.png"></a>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspace">
        <h3>GridComposer is an experimental musical sequencer for iPhone &amp; iPad.</h3>
        <p class="big">Create and explore musical phrases and rhythmic patterns. Arrange blocks on the grid to create notes and combine them to short phrases. Experiment with the timings and harmonies to explore variations of your composition. No musical knowledge is needed to start playing.
        </p>
      </div>
    </div>
  </div>

  <div class="w3-gc_black">
    <div class="w3-container w3-content w3-center">
      <div class="w3-row blockspace">
        <div class='embed-container'>
          <iframe src='https://player.vimeo.com/video/192820464?title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
    </div>
  </div>


  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspaceFeature">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3>Main Features</h3>
              <ul>
                <li>Universal App for iPhone and iPad.</li>
                <li>Contains four build-in, polyphonic synthesizer presets.</li>
                <li>Save and load your compositions.</li>
                <li>Notes are automatically assigned from a global scale.</li>
                <li>Volume mixer to adjust your tracks.</li>
                <li>Adjust the musical scale, key and octave on the fly.</li>
                <li>Advanced options to create custom scales.</li>
                <li>Set the tempo and individual trigger speed for each track.</li>
                <li>Ability to add delay and reverb effects.</li>
                <li>Output midi notes to your audio software via wifi.</li>
                <li>Adjust the playhead for each grid.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>

        <div class="w3-col l5 w3-display-container">

          <?php
          $featurePics = 0;
          foreach (glob("images/featureSlide/*.png") as $filename){
            echo '<img alt="GridComposer App Screenshot" id="featureIMG" class="featureSlide w3-animate-opacity" src="' . $filename . '" style="width:80%;max-width:400px; display:block; margin:auto;" onclick="plusDivs(1,2)">';
            $featurePics+=1;
          }
          ?>

          <div class="w3-display-left slideArrow w3-hover-text-dark-grey" style="cursor:pointer; padding-left:3.5%;padding-bottom:0.0%;color:#d6d6d6"  onclick="plusDivs(-1,2)">&#10094;</div>
          <div class="w3-display-right slideArrow w3-hover-text-dark-grey" style="cursor:pointer; padding-right:3.5%;padding-bottom:0.0%;color:#d6d6d6" onclick="plusDivs(1,2)">&#10095;</div>

          <div class="w3-center" style="width:100%">
            <?php
            for ($x = 1; $x <= $featurePics; $x++) {
              echo  '<div style="padding:1.45%; display:inline-block;"><div class="imgMarker featureSlidemarker" onclick="currentDiv(' . $x . ',2)"></div></div>';
            }
            ?>
          </div>
        </div>


      </div>
    </div>
  </div>


  <div class="w3-gc_black">
    <div style="max-width:1300px; display:block; margin: auto">
      <div class="w3-row w3-display-container galleryspace">
        <?php
        $galleryPics = 0;
        foreach (glob("images/slideshow/*.png") as $filename){
          echo '<img alt="GridComposer screenshot on iPad and iPhone" class="screenSlide w3-animate-opacity" src="' . $filename . '" style="width:100%;" onclick="plusDivs(1,1)">';
          $galleryPics+=1;
        }
        ?>
        <div class="w3-display-left slideArrow w3-hover-text-light-grey" style="cursor:pointer; padding-left:3.5%;padding-bottom:3.8%;color:#464646"  onclick="plusDivs(-1,1)">&#10094;</div>
        <div class="w3-display-right slideArrow w3-hover-text-light-grey" style="cursor:pointer; padding-right:3.5%;padding-bottom:3.8%;color:#464646" onclick="plusDivs(1,1)">&#10095;</div>

        <div class="w3-center" style="width:100%">
          <?php
          for ($x = 1; $x <= $galleryPics; $x++) {
            echo  '<div style="padding:0.85%; display:inline-block;"><div class="imgMarker screenSlidemarker" onclick="currentDiv(' . $x . ',1)"></div></div>';
          }
          ?>
        </div>

      </div>
    </div>

  </div>


  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3>Start Playing</h3>
              <p class="big">You can start building from scratch on an empty grid, or use one of the prebuilt examples as a starting point. Take a look at the short quickstart guide below, to get an impression how GridComposer works. Check the <a href="manual.php">manual</a> to get a complete overview of the functionality.
              </p>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img alt="GridComposer Screenshot with iPad" id="playingIMG" src="images/gc_empty.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>


  <div class="w3-gc_black">
    <div class="w3-container w3-content w3-center w3-gc_black">
      <div class="w3-row blockspace">
        <div class='embed-container'>
          <iframe src='https://player.vimeo.com/video/192821278?title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
    </div>
  </div>


  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3>Send Midi Output</h3>
              <p class="big">GridComposer supports Midi output via wifi network connection. This way you can send notes to your software instruments or audio suite, and use the app as a control interface. The trailer below shows a few samples recorded with Garageband.</p>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col m12 l5 w3-display-container">
          <img alt="GridComposer Screenshot" id="midiIMG" src="images/gc_midi.png"  style="width:100%;  margin:auto; display:block; max-width: 500px ">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_black w3-border-bottom">
    <div class="w3-container w3-content w3-center w3-gc_black">
      <div class="w3-row blockspace">
        <div class='embed-container'>
          <iframe src='https://player.vimeo.com/video/192954003?title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l12">
          <h3>Reviews</h3>
          <a href="http://audionewsroom.net/2016/12/introducing-gridcomposer-for-ios-a-nifty-experimental-sequencer.html">audionewsroom.net</a>
          <p><i>From a quick test, it looks like a perfect app for those into minimalism (think Steve Reich playing with an iPad). Sure, I wish to see a more full featured MIDI section, more instruments and Ableton Link support in the next updates, but even as it is, the app is really well-designed (I loved the fact that you can change scale and key on the fly) and deserves your attention.</i></p>
        </div>
      </div>
    </div>
  </div>

  <?php include("foo.php") ?>


</body>
</html>
