<div class="content-wrapper">
<div class="row">
    <div class="col-6 stretch-card" style="padding:10px;">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Profile</h4>
            <p class="card-description">
                form elements
            </p>
            <form method="POST"  enctype="multipart/form-data" action="<?php echo base_url('simpanprofile');?>">
            <div class="form-group">
                <?php echo $this->session->flashdata('massage');?>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Name" value="<?php echo $data->username;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Email" readonly value="<?php echo $data->email;?>">
            </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="male" <?php if($data->gender =='male'){echo "selected";}else{echo "";};?>>Male</option>
                        <option value="female" <?php if($data->gender =='female'){echo "selected";}else{echo "";};?>>Female</option>
                    </select>
                </div> 
            <div class="form-group">
                <label>Img Profile</label>
                <input type="file" name="img" class="form-control">
            </div>
            
            <div align="right">
                    <input type="submit" class="btn btn-success btn-rounded" value="simpan" name="simpan">
            </div>
                
            </form>
        </div>
        </div>
    </div>

    <div class="col-4" style="padding:10px;">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Change Password</h4>
            <p class="card-description">
                form elements
            </p>
            <form method="POST"  action="<?php echo base_url('changepassword');?>">
            <div class="form-group">
                <?php echo $this->session->flashdata('changepassword');?>
            </div>
            <div class="form-group">
                <label>Old Password</label>
                <input type="password" class="form-control" name="old" placeholder="Password" require>
                <?php echo $this->session->flashdata('old');?>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" name="new" placeholder="Password" require>
            </div>
           
            
            <div align="right">
                    <button type="submit" class="btn btn-info btn-rounded" name="Update">Update</button>
            </div>
                
            </form>
        </div>
        </div>
    </div>
</div>
</div>