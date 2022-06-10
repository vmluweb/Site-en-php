
<div class="welcome"><h1>Bienvenue sur Brand !</h1></div>
<br>
<br>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/html.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/css.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/javascript.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<br>
<section class= "actualites">
<div><h2>Nouvelles publications à la Une</h2></div>
<br>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">JavaScript</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Dernière mise à jour: il y a 2 jours.</small></p>
  </div>
  <img src="assets/javascript.jpg" class="card-img-bottom" alt="...">
</div>
<br>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">CSS</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Dernière mise à jour: il y a 10 jours</small></p>
  </div>
  <img src="assets/css.jpg" class="card-img-bottom" alt="...">
</div>
<br>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">HTML</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Dernière mise à jour: il y a 30 jours</small></p>
  </div>
  <img src="assets/html.jpg" class="card-img-bottom" alt="">
</div>
</section>

<?php
var_dump($posts);
foreach($posts as $post){
  ?>
  <div class="row">
    <h2> <?= $post['title'] ?></h2>
    <p> <?= $post['content'] ?></p>
  </div>
  <?php
}