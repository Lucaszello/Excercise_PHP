<?php  require_once ViewDIr."/template/header.php";  ?>


<div class=" container mt-5">
  <div class="row justify-content-center">
    <div class=" col-8">
     <div class="py-3">
       <a href="<?= route("list-create") ?>" class="btn btn-primary">Create Table List</a>
     </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th >No</th>
          <th>Name</th>
          <th>Money</th>
          <th>Control</th>
          <th>Create at</th>
        </tr>
      </thead>
      <tbody>
      <?php  foreach($lists as $list) : ?>
        <tr>
            <td><?= $list["id"] ?></td>
            <td><?= $list["name"] ?></td>
            <td><?= $list["money"] ?></td>
            <td>
              <form action="<?= route("list-delete") ?>" method="post" class=" d-inline-block">
                <input type="hidden" name="id" value="<?=$list["id"] ?>" class="">
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
            <a href="<?= route("list-edit",["id" => $list["id"]]) ?>" class=" btn btn-secondary">Edit</a>
            </td>
            <td><?= $list["create_at"] ?></td>
        </tr>
      <?php endforeach ;  ?>
      </tbody>
</table>
    </div>
    </div>
</div>


<?php  require_once ViewDIr."/template/footer.php" ?>