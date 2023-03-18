<?php require_once ViewDIr."/template/header.php"  ?>



<div class=" container mt-5">
   <form action="<?= route("list-update") ?>" method="post" class="">
   <div class="row  justify-content-center">       
       <div class="col-7">
        <div class="row align-items-end justify-content-center border p-3">
            <input type="hidden" name="_method" value="put" class="">
        <div class=" col-3">
            <input type="hidden" name="id" value="<?= $lists["id"] ?>">
                <label for="" class=" form-label">Name</label>
                <input type="text" name="name" value="<?= $lists["name"] ?>" class=" form-control">
            </div>
            <div class=" col-3">
                <label for="" class=" form-label">Money</label>
                <input type="number" name="money" value="<?= $lists["money"] ?>" class=" form-control">
            </div>
            <div class="col-3">
                <button type="submit" class=" btn btn-primary">Update List       </button>
            </div>
        </div>
       </div>
        </div>
   </form>
  
</div>


<?php require_once ViewDIr."/template/footer.php"  ?>