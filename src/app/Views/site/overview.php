<?php if (! empty($projects) && is_array($projects)) : ?>

    <?php foreach ($projects as $project_item): ?>

        <a class="project-box" href="site/projectpage/<?= esc($project_item['slug'], 'url') ?>">
            <?php echo '<img class="project-image" src="data:image/jpeg;base64,'.base64_encode($project_item['image']).'" alt="image" ">'?>
                <p class="project-name"><?=esc($project_item['title'])?></p>
                <div class="bottom-border">
                    <p class="project-creator"><i class="far fa-user-circle"></i>&nbsp;<?=esc($project_item['creator'])?></p>
                        <div class="statistics">
                            <p class="project-likes"><i class="fas fa-heart"></i>&nbsp;<?=esc($project_item['likes'])?></p>
                            <p class="project-views"><i class="far fa-eye"></i>&nbsp;<?=esc($project_item['views'])?></p>
                        </div>
                </div>
        </a>
    <?php endforeach; ?> 

<?php else : ?>
    <div class="empty">
         <h3>No Projects</h3> 
         <p>Be the first ever creator of MyVizion!</p>    
    </div>
<?php endif; ?>                