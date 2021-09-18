<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#<?= $category['name'] ?>">
                    <?php if ( isset($category['childs']) ): ?>
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    <?php endif; ?>
                        <a href="<?=\yii\helpers\Url::to(['category/view','id'=>$category['id']])?>"><?= $category['name']?></a>
                </a>
            </h4>
        </div>
    <?php if ( isset($category['childs']) ):?>
        <div id="<?= $category['name'] ?>" class="panel-collapse collapse">
            <div class="panel-group category-products">
                <a href="<?=\yii\helpers\Url::to(['category/view','id'=>$category['id']])?>"><?= $this->getMenuHtml($category['childs']) ?></a>
            </div>
        </div>
    <?php endif; ?>
</div>

