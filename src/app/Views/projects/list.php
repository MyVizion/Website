<?php if (! empty($projects) && is_array($projects)) : ?>

    <?php foreach ($projects as $project_item): ?>
        <!------------------------------------------------------------------- Project Box -->
        <a class="project-box" href="projects/<?= esc($project_item['id'], 'url') ?>">
        <!------------------------------------------------------------------------- Image -->
            <?php echo '<img class="project-image" src="data:image/jpeg;base64,'
                 .base64_encode($project_item['image']).'" alt="image" ">'?>
                <!----------------------------------------------------------------- Title -->
                <p class="project-name"><?=esc($project_item['title'])?></p>
                <!--------------------------------------------------------- Bottom Border -->
                <div class="bottom-border">
                    <!------------------------------------------------------ Creator Name -->
                    <p class="project-creator"><i class="far fa-user-circle"></i>&nbsp;<?=esc($project_item['creator'])?></p>
                    <!-------------------------------------------------------- Statistics -->
                    <div class="statistics">
                            <!------------------------------------------- Likes and Views -->
                            <p class="project-likes"><i class="fas fa-heart"></i>&nbsp;<?=esc($project_item['likes'])?></p>
                            <p class="project-views"><i class="far fa-eye"></i>&nbsp;<?=esc($project_item['views'])?></p>
                        </div>
                </div>
        </a>
    <?php endforeach; ?> 

<?php else : ?>
    <!-- Display -->
    <div class="empty">
         <h3>No Projects</h3> 
         <p>Be the first ever creator of MyVizion!</p>    
    </div>
<?php endif; ?>                