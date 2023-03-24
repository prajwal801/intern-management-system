<div class="modal fade" id="editModal<?php echo $row['intern_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
        <form method="post" action="update.php">
          <div class="form-group">
            <input type="hidden" id="internid" name="internid" value="<?php echo $row['intern_id']; ?>">
           

            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name_intern']; ?>"></div>
          <div class="form-group">
            
          <div class="form-group">

          
            <label for="info">Internship Info</label>
            <input type="text" class="form-control" id="info" name="info" value="<?php echo $row['internship_info']; ?>"></div>
          <div class="form-group">
            <label for="start">Start Date</label><input type="date" class="form-control" id="start" name="start" value="<?php echo $row['start_date']; ?>"></div>
          <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" class="form-control" id="end" name="end" value="<?php echo $row['end_date']; ?>"></div>
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
            <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>

        </form>
      </div>
    </div>
  </div>
</div>