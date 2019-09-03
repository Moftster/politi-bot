<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-4 box-shadow ">
                          <img class="card-img-top" src="images/churchill-speaking.jpg" alt="Card image cap">
                        </div>
                      </div>
                      <div class="soundSnippets">
                        <div class="col-md-3">
                          <div class="form-group">
                            <div class="snippet">
                              <input type="button" class="btn" value="Battle of Britain" onclick=play('audio1')>
                              <audio id="audio1" src="assets/sounds/churchill/battle-britain.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="We shall fight" onclick=play('audio2')>
                              <audio id="audio2" src="assets/sounds/churchill/fight.wav"><audio>
                            </div>
                            <div class="snippet">
                              <input type="button" class="btn" value="Hitler" onclick=play('audio3')>
                              <audio id="audio3" src="assets/sounds/churchill/hitler.wav"><audio>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
        </div>
        </div>
      </div>


<script>

function play(element) {
  var audio = document.getElementById(element);
  audio.currentTime = 0;
  audio.play();
}

// const onClick = document.addEventListener('click', playSound);

// function playSound(e) {
//   const audio = document.querySelector(`audio[data-sound="2"]`);
//   const button = document.querySelector(`button`);
//   if(!audio) return;
//
//   audio.currentTime = 0;
//   audio.play();
//   // console.log("You clicked");
// }
//
// document.addEventListener('click', playSound);

// const soundSnippets = Array.from()


</script>

  <?php include('assets/partials/footer.php'); ?>
