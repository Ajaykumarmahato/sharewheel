<div>
    <?php if($paginator->hasPages()): ?>
    <ul>
        <?php if($paginator->onFirstPage()): ?>
        <a role="button" class="btn my-button disabled" aria-disabled="true" href="<?php echo e($paginator->previousPageUrl()); ?>">
            Prev
        </a>
        <?php else: ?>
        <a role="button" class="btn my-button" href="<?php echo e($paginator->previousPageUrl()); ?>">
            Prev
        </a>
        <?php endif; ?>
        <a role="button" class="btn  text-dark">
            <?php echo e($paginator->currentPage()); ?> of <?php echo e($paginator->lastPage()); ?> pages
        </a>
        <?php if($paginator->hasMorePages()): ?>
        <a role="button" class=" btn my-button" href="<?php echo e($paginator->nextPageUrl()); ?>">
            Next
        </a>
        <?php else: ?>
        <a role="button" class=" btn my-button disabled" aria-disabled="true" href="<?php echo e($paginator->nextPageUrl()); ?>">
            Next
        </a>
        <?php endif; ?>
        <!-- <a role="button" class="btn text-dark"><?php echo e($paginator->firstItem()); ?> to <?php echo e($paginator->lastItem()); ?> of <?php echo e($paginator->total()); ?>

        </a> -->
    </ul>
    <?php endif; ?>
</div><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/pagination.blade.php ENDPATH**/ ?>