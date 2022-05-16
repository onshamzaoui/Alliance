<!DOCTYPE html>
<style>
         /* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: wheat;
}

/* Control the right side */
.right {
  right: 0;
  background-color:orangered;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

<div class="split left">
    <div class="centered">
      <img src="assets/img/icon/instructeur.png" alt="Avatar woman">
      <h2>Teach on Alliance</h2>
      <p>Some text.</p>
    </div>
  </div>
  
  <div class="split right">
    <div class="centered">
      <img src="assets/img/icon/user.jpg" alt="Avatar man">
      <h2>Alliance business</h2>
      <p>Some text here too.</p>
    </div>
</div>