<?= $this->extend('site/mainpage')?>
<?= $this->section('header') ?>
<?= $this->include('site/header') ?> 
<?= $this->endSection() ?> 
<?= $this->section('content') ?>
<body>
     <!-- project heading -->
     <div class="heading">
          <p>Open Project</p>
     </div>
     <!-- Title -->
     <div class="p-title">
          <p><?=esc($project_item['title'])?>Title</p>
     </div>
     <!-- About -->
     <div class="about">
          <div class="about-txt">
               <p>About us</p>
          </div>
          <div class="info-container">
               <?php echo '<img class="p-image" src="data:image/jpeg;base64,'.base64_encode($project_item['image']).'" alt="image" ">'?>
               <article><?=esc($project_item['info'])?></article>
          </div>
     </div>
     <!-- Project info -->
     <div class="n-info">
          <div class="about-txt">
               <p>Project Infos:</p>
          </div>
          <div class="n-container">
               <p><i class="fas fa-clock"></i></p>
               <p><i class="fas fa-map-marker-alt"></i><?=esc($project_item['location'])?></p>
               <p><i class="fas fa-cogs"></i></p>
          </div>
     </div>
     <!-- Needs -->
     <div class="needs">
          <p>Needs:</p>
          <article>Stuff</article>
     </div>
     <!-- Apply button -->
     <button class="apply-btn">
          <i class="fas fa-plus-circle"></i>
          <p>Apply to join</p>
     </button>
</body>
<?= $this->endSection() ?> 