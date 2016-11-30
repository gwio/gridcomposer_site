<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->



  <!--nav-->
  <?php include("nav.php") ?>


  <div class="w3-gc_white">
    <div class="w3-container w3-content">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3>Overview</h3>
              <p class="big">The main focus in the app are the three grids. They can be thought of as a kind of sequencer. A multitude of patterns can be created on them, and they synchronized to a global speed and scale setting. One good way to start would be to create some simple patterns, or just load up an example and start playing with the different harmony and tempo settings.</p>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/appIconBig.png" style="width:45%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="homeScreen">Home Screen</h3>
              <p class="big">This is the main view where you can access the grids and toggle the different menus and settings.</p>
              <ul class="manual">
                <li class="manual">Tap on a grid to focus on it, this will activate the <a href="manual.php#editMode">edit mode</a>. Below the grids you will see a button to pause the playback. A grid which is not playing, will appear with desaturated colors. Tap on the arrow to resume playing.</li>
                <li class="manual">The top row gives you access to the <a href="manual.php#volumeView">volume</a>, <a href="manual.php#harmonyView">harmony</a> and <a href="manual.php#tempoView">tempo view</a>, while the bottom row activates the settings and preset menus.</li>
                <li class="manual">After a while without activity, the home screen interface fades out, just tap to wake it up.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualA.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="editMode">Edit Mode</h3>
              <p class="big">This is the main build mode for editing and managing the patterns on the grid.</p>
              <ul class="manual">
                <li class="manual">Tap on the grid to place a note block, tap again on it to remove it. The notes are automatically assigned from the global scale, set in the <a href="manual.php#harmonyView">harmony view</a>.</li>
                <li class="manual">Blocks with a diagonal or straight neighbour are connected to one shape and share the same note. Connected blocks also share the same color shade. When placing or removing blocks, shapes automatically merge and split.</li>
                <li class="manual">The amount of blocks a shape contains, horizontal and vertical, determines the sound volume-velocity, depending on the playhead direction. The playhead behaviour can be adjusted in the <a href="manual.php#tempoView">tempo view</a>.</li>
                <li class="manual">You can load a premade pattern from the slots on the right side, and save your own. After tapping on the save button you have to select a slot position and override it. These pattern templates are shared for all layers in your current preset.</li>
                <li class="manual">Tap or swipe on the other grids to cycle through them without going back to the home screen.</li>
                <li class="manual">The columns on the left are showing the active global scale. Grey columns are possible notes while colored columns are actually playing, corresponding to the color shades on the grid. It's also possible that multiple shapes share the same note. Tapping on the scale indicator allows you to move up and down in the scale.</li>
                <li class="manual">With the two buttons below, you can cycle through the instruments and adjust their attack value. This value is also modified by the <a href="manual.php#tempoView">tempo settings</a>, higher speeds have a faster attack and vice versa.</li>
                <li class="manual">Per default all grids are linked to the same global scale. You can toggle the <a href="manual.php#localHarmony">local harmony view</a> and tap on <i>“Set Notes”</i> to use custom scale settings for this grid. You can always switch back to the global harmony.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualB.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="volumeView">Volume View</h3>
              <p class="big">Use this view to adjust the global volume and mix the individual volumes independently.</p>
              <ul class="manual">
                <li class="manual">You might want to mute the app here if you are going to use only the <a href="manual.php#midi">midi</a> output.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualC.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="harmonyView">Harmony View</h3>
              <p class="big">This mode is used to change the musical key, scale and the played octave. Notes for the grids a chosen randomly, depending on the settings made here.</p>
              <ul class="manual">
                <li class="manual">The global scale button shows the selected musical scale. You can switch to a different scale and the notes are automatically reassigned. </li>
                <li class="manual">The global key button allows you to adjust the key note while leaving the scale intervals intact.</li>
                <li class="manual">By tapping on the middle row of buttons you can change the octave for each grid. It shows the selected keynote and the equivalent midi number. They range from <i>C1 (Midi #12)</i> to <i>C8 (Midi #96)</i>.</li>
                <li class="manual">The columns in the upper row show the played notes as a short history. The floating dots show a short note and velocity history. Like in the build mode you can tap on the columns to move up and down in the scale.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualD.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="tempoView">Tempo View</h3>
              <p class="big">This mode allows you to adjust the global playing speed and playhead behaviour. Use the slider to set the global tempo.</p>
              <ul class="manual">
                <li class="manual">The tempo for each grid can be individually multiplied by <i>2x</i>, <i>3x</i> and <i>4x</i>, while 1x is the same as the global tempo. In musical terms, within the <i>1x</i> setting, one block on a grid would be the equivalent to a <i>whole note</i>, <i>2x</i> equals to a <i>half note</i>, <i>4x</i> equals to a <i>quarter note</i> and <i>3</i> is a <i>triad</i>.</li>
                <li class="manual">The flying arrow visualises the playhead. It triggers the grid clockwise from the north, east, south and west direction.</li>
                <li class="manual">You can control the playhead flow for each grid by tapping on the four arrows. An open arrow indicates that the direction is active and will be triggered by the playhead. A square will be counted but does not trigger any notes, it's basically a pause. A rectangle will be ignored and the playhead jumps directly to the next side (e.g., a grid with only one arrow will repeatedly play from the same direction).</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualE.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>


  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="localHarmony">Local Harmony View</h3>
              <p class="big">This view can be accessed from the <a href="manual.php#editMode">edit mode</a> and allows you to customize the harmony for each grid individually.</p>
              <ul class="manual">
                <li class="manual">Switch the <i>Global Harmony</i> to <i>Local Harmony</i> in the default edit mode and tap the <i>Set Notes</i> button to access the local harmony view screen.</li>
                <li class="manual">Use the top slider to adjust the keynote freely, ignoring the global key.</li>
                <li class="manual">Below is a row with twelve notes. You can toggle each note/interval, except the key. Only notes that are active can be assigned to a block on the grid (e.g., if you activate all notes you will get a 12-tone scale). The changes you make to the scale are instantly applied to the scale indicator and the grid.</li>
                <li class="manual">A grid which is set to <i>Local Harmony</i> mode will appear in color in the <a href="manual.php#harmonyView">harmony view</a> and it will state <i>local</i> instead of <i>global</i>. You will be able to freely move up and down in half notes instead of octave.</li>
                <li class="manual">If you want to grid to switch back to the global harmony, just tap the <i>Local Harmony</i> button.</li>

              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualG.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>


  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="saveMenu">Save Menu</h3>
              <p class="big">This menu allows you to manage and save your presets.</p>
              <ul class="manual">
                <li class="manual">The saved preset will contain all settings, including custom patterns and local scale settings. Choose a preset from the list to load or delete it. If you want to mark a specific preset, you can give it a highlight color by tapping on it.</li>
                <li class="manual">If you close the app, your current state will be automatically saved.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualH.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="settingsMenu">Settings Menu</h3>
              <p class="big">Contains settings for midi output and reverb &amp; delay effects.</p>
              <ul class="manual">
                <li class="manual"><i>Midi Settings:</i> Start and stop sending midi notes. Chose if you want to send <i>Static</i> or <i>Dynamic</i> velocity values. The default is <i>Dynamic</i>. The velocity of the notes depends on the amount of blocks that are triggered by the playhead. In the <i>Static Mode</i> you can set a value between 1-127. </li>
                <li class="manual"><i>Delay Settings:</i> Toggle for the global delay effect. With <i>Dynamic</i> on, the delay time will be set automatically, depending on the global Tempo. Under <i>Static</i> delay you are able to set the delay time manually.</li>
                <li class="manual"><i>Reverb Settings:</i> Toggle for the global reverb, including sliders for reverb time and size.</li>
                <li class="manual">The delay and reverbs settings will be saved for each preset.</li>
                <li class="manual">Having many isolated shapes and using both reverb and delay effects might affect the performance and sound quality on old devices like the iPhone 4s or iPad 2. But in the most cases GridComposer will run just fine on those older hardware.</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualF.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-gc_white">
    <div class="w3-container w3-content w3-border-top">
      <div class="w3-row blockspace">
        <div class="w3-col m12 l7">
          <div class="w3-row">
            <div class="w3-col fixText">
              <h3 id="midi">Midi</h3>
              <p class="big">A few notes about the midi output.</p>
              <ul class="manual">
                <li class="manual">Gridcomposer supports midi output via wireless network. Each grid has a corresponding midi channel assigned (1,2,3). To connect with the app you have to be in the same network, or create an ad-hoc network. This midi feature should work well in most cases, but it really depends on your setup and your connection latency.</li>
                <li class="manual">On OSX you need to open the <i>Audio-Midi-Setup</i> app and setup a network connection. Check out this <a href="http://musicappblog.com/wireless-network-midi-ipad-to-mac/">guide</a> for more information.</li>
                <li class="manual">If you are on Windows, you can try using <a href="http://www.tobias-erichsen.de/software/rtpmidi.html">rtpMidi</a> to connect with iOS devices.</li>
                <li class="manual">If you having issues to connect, try to switch midi on and off in the settings menu or restart the app on your device (double-press the home button and swipe the app away).</li>
              </ul>
            </div>
            <div class="w3-rest"></div>
          </div>
        </div>
        <div class="w3-col l5 w3-display-container">
          <img class="manualIMG" src="images/manualF.png" style="width:100%; max-width:500px;  margin: auto; display: block;">
        </div>
      </div>
    </div>
  </div>

  <?php include("foo.php") ?>


</body>
</html>
