<?php require_once ViewDIr."/template/header.php"  ?>



<div class=" container mt-5">
   <form action="<?= route("list-store") ?>" method="post" class="">
   <div class="row  justify-content-center">       
       <div class="col-7">
        <div class="row align-items-end justify-content-center border p-3">
        <div class=" col-3">
                <label for="" class=" form-label">Name</label>
                <input type="text" name="name" class=" form-control">
            </div>
            <div class=" col-3">
                <label for="" class=" form-label">Money</label>
                <input type="number" name="money" class=" form-control">
            </div>
            <div class="col-3">
                <button type="submit" class=" btn btn-primary">Create </button>
            </div>
        </div>
       </div>
        </div>
   </form>
  
</div>


<?php require_once ViewDIr."/template/footer.php"  ?>