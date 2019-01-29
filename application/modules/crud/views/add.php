<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Add Record</h3>
    </div>
    <div class="panel-body">
        <form action="/crud/add" method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Complete name" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Active email address" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                </div>
            </div>
            <?php if(isset($error) && $error) { ?> 
                <div class="alert alert-danger alert-block" style="margin-top: 20px">
                    <strong>Error</strong>
                </div>
            <?php } ?>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/"><button type="button" class="btn btn-info">Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
</div>
