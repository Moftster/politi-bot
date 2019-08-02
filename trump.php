<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                    <div class="soundSnippets">
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="snippet">
                            <input type="button" data-sound="1" name="agree" class="btn" value="&quot;I agree!&quot;">
                            <audio data-sound="1" src="assets/sounds/trump/boom.wav"><audio>
                          </div>
                          <div class="snippet">
                            <input type="button" data-sound="2" name="disagree" class="btn" value="&quot;No way, Jose!&quot;">
                            <audio data-sound="2" src="assets/sounds/trump/clap.wav"><audio>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="card mb-4 box-shadow ">
                          <img class="card-img-top" src="images/trump3.jpg" alt="Card image cap">
                        </div>
                      </div>
                  </div>
        </div>
        </div>
      </div>


<script>

// const onClick = document.addEventListener('click', playSound);

function playSound(e) {
  const audio = document.querySelector(`audio[data-sound="2"]`);
  const button = document.querySelector(`div[data-sound="2"]`);
  if(!audio) return;

  audio.currentTime = 0;
  audio.play();
  // console.log("You clicked");
}

window.addEventListener('click', playSound);

// const soundSnippets = Array.from()


</script>

  <?php include('assets/partials/footer.php'); ?>
