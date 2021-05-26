<?= $this->extend('site/mainpage')?>
     <?= $this->section('header') ?>
          <?= $this->include('templates/header') ?> 
     <?= $this->endSection() ?> 
<?= $this->section('content') ?>
     <?php if (empty($projects)) : ?>
          <p>No Data Found!</p>
          <?php else: ?>
          <!------------------------------------ project heading -->
          <div class="heading">
               <p>Open Project</p>
          </div>
          <!---------------------------------------------- Title -->
          <div class="p-title">
               <p><?=esc($projects['title'])?></p>
          </div>
          <!---------------------------------------------- About -->
          <div class="about">
               <div class="about-txt">
                    <p>About us</p>
               </div>
               <div class="p-container">
                    <div class="p-image">
                         <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($projects['image']).'" alt="image" ">'?>
                    </div>
                    <div class="p-info">
                         <article><?=esc($projects['info'])?></article>
                    </div>
               </div>
          </div>
          <!--------------------------------------- Project info -->
          <div class="n-info">
               <div class="about-txt">
                    <p>Project Infos:</p>
               </div>
               <div class="n-container">
                    <!---------------------------------- Date and time -->
                    <div class="item-box">
                         <i class="fas fa-clock"></i>
                         <p><?=esc($projects['time'])?></p>
                    </div>
                    <!---------------------------------- Location -->
                    <div class="item-box">
                         <i class="fas fa-map-marker-alt"></i>
                         <p><?=esc($projects['location'])?></p>
                    </div>
                    <!---------------------------------- Category -->
                    <div class="item-box">
                         <i class="fas fa-cogs"></i>
                         <p><?=esc($projects['category'])?></p>
                    </div>
               </div>
          </div>
          <!------------------------------------------- Needs -->
          <div class="needs">
          <p>Needs:</p>
          <article><?=esc($project_item['needs'])?></article>
          </div>
          <!------------------------------------ Apply button -->
          <button class="apply-btn">
          <i class="fas fa-plus-circle"></i>
          <p>Apply to join</p>
          </button>
     <?php endif; ?>
<?= $this->endSection() ?> 