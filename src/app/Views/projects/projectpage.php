<?= $this->extend('site/mainpage')?>
     <?= $this->section('header') ?>
          <?= $this->include('templates/header') ?> 
     <?= $this->endSection() ?> 
<?= $this->section('content') ?>
     <!--------------------------------- if project data is empty: -->
     <?php if (empty($projects)) : ?>
          <!---------------------------------------------- Display -->
          <p>No Data Found!</p>
          <!------------------------------------------------- Else -->
          <?php else: ?>
          <!----------------------------------------- Display Page -->

          <!-------------------------------------- project heading -->
          <div class="heading">
               <p>Open Project</p>
          </div>
          <!------------------------------------------------ Title -->
          <div class="p-title">
               <p><?=esc($projects['title'])?></p>
          </div>
          <!------------------------------------------------ About -->
          <div class="about-container">
               <div class="about-title">
                    <p>About us</p>
               </div>
               <!----------------------------------- Project Image -->
               <div class="info-container">
                         <?php echo '<img class="p-image" src="data:image/jpeg;base64,'.
                               base64_encode($projects['image']).'" alt="image" ">'?> 
                         <article class="p-info"><?=esc($projects['info'])?></article>
               </div>
          </div>
          <!----------------------------------------- Project info -->
          <div class="n-info">
               <div class="about-title">
                    <p>Project Infos:</p>
               </div>
               <div class="n-container">
                    <!------------------------------ Date and time -->
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
          <!----------------------------------------------- Needs -->
          <div class="needs">
               <p>Needs:</p>
               <article><?=esc($projects['needs'])?></article>
          </div>
          <!---------------------------------------- Apply button -->
          <button class="apply-btn">
                <i class="fas fa-plus-circle"></i>
                <p>Apply to join</p>
          </button>
     <script>
     $(function() {
          $("footer").hide();
     });
     </script>
     <?php endif; ?>
<?= $this->endSection() ?> 