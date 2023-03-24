<div class="modal fade" id="editModal<?php echo $row['task_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
        <form method="post" action="update_task.php">
          <div class="form-group">
            <input type="hidden" id="taskid" name="taskid" value="<?php echo $row['task_id']; ?>">
           

            
          <div class="form-group">
            <label for="task">Task Assigned</label>
            <input type="text" class="form-control" id="task" name="task" value="<?php echo $row['task']; ?>"></div>
          <div class="form-group">
          <div class="form-group">
            <label for="task">description</label>
            <input type="text" class="form-control" id="dec" name="dec" value="<?php echo $row['description']; ?>"></div>
          
           
          <div class="form-group">
            <label for="start">Start Date</label><input type="date" class="form-control" id="start" name="start" value="<?php echo $row['startdate']; ?>"></div>
          <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" class="form-control" id="end" name="end" value="<?php echo $row['enddate']; ?>"></div>
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
            <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>

        </form>
      </div>
    </div>
  </div>
</div>