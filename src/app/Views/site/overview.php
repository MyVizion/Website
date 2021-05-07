<?php if (! empty($projects) && is_array($projects)) : ?>

    <?php foreach ($projects as $project_item): ?>

        <div class="project-box" href="/projects/<?= esc($project_item['slug'], 'url') ?>">
            <?php echo '<img class="project-image" src="data:image/jpeg;base64,'.base64_encode($project_item['image']).'" alt="image" ">'?>
                <p class="project-name"><?=esc($project_item['title'])?></p>
                <div class="bottom-border">
                    <p class="project-creator"><i class="far fa-user-circle"></i>&nbsp;<?=esc($project_item['creator'])?></p>
                        <div class="statistics">
                            <p class="project-likes"><i class="fas fa-heart"></i>&nbsp;<?=esc($project_item['likes'])?></p>
                            <p class="project-views"><i class="far fa-eye"></i>&nbsp;<?=esc($project_item['views'])?></p>
                        </div>
                </div>
        </div>
    <?php endforeach; ?> 

<?php else : ?>

    <h3>No Projects</h3>

<?php endif ?>


                    
                    