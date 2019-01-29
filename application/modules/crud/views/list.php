<?php if(isset($success) && $success){ ?>
  <div class="alert alert-success" style="margin-top: 20px"><?php echo $success; ?></div>
<?php } ?>
<a href="/crud/add">
    <button type="button" class="btn btn-primary">Add</button>
</a>
<br />
<table class="table">
    <thead class="thead">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
      if(count($users)>0){
        foreach($users as $user){
    ?>
      <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->created_at; ?></td>
        <td><?php echo $user->updated_at; ?></td>
        <td>
            <a href="/crud/edit/?id=<?php echo $user->id; ?>">
                <button type="button" class="btn btn-primary">Update</button>
            </a>
            <a href="/crud/delete/?id=<?php echo $user->id; ?>">
                <button type="button" class="btn btn-danger">Delete</button>
            </a>
        </td>
      </tr>
    <?php
       }
      }
    ?>
  </tbody>
</table>
<?php echo $pagination; ?>
 
