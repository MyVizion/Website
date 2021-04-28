<?php if (! empty($projects) && is_array($projects)) : ?>

    <?php foreach ($projects as $project_item): ?>

        <div href="/projects/<?= esc($project_item['slug'], 'url') ?>" class="project-box">
        <img src="data:image/jpeg;base64,'.base64_encode"<?= esc($project_item['image']) ?>/>
            <p class="project-name"<?=esc($project_item['title'])?>></p>
                <div class="bottom-border">
                    <img><i class="far fa-user-circle"></i><p class="project-creator">&nbsp;User</p></im>
                    <p class="project-likes"><i class="fas fa-heart"></i>&nbsp;0</p>
                    <p class="project-views"><i class="far fa-eye"></i>&nbsp;0</p>
                </div>
        </div>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No Projects</h3>

<?php endif ?>


                    
                    