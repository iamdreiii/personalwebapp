<?php 

function alert_message ($flash_var){
    if (lava_instance()->session->has_userdata('status')):?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong><?php echo lava_instance()->session->flashdata($flash_var);  ?>

    <button type="button" class="close" data-dismiss="alert" alert-label="close">
        <span arial-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>
<?php if(!empty(validation_errors())):   ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong><?php echo validation_errors();  ?>


    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php endif;

}
?>