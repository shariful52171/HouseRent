<?php
session_start();
include_once("dashboard/header.php");

$show="";
if (isset($_POST['btn1'])) {
            $u = $_POST['username'];
            $p = $_POST['password'];

            $mysqldb=new mysqli("localhost","root","","shop");

            $q="SELECT * from user where username='$u' AND password='$p'"; 
            $r=$mysqldb->query($q);

            if($r->num_rows>0){
              header('Location: dashboard.php');
            }
            else{
              $show= "Invalid Username or Password";
            }
        }
      
  ?>

		
<div style="color: red; font-size: x-large; font-weight: bolder; text-align: center;">
	
	<?php echo $show;?>


</div>
	<!-- HEADER -->
	<!-- /HEADER -->
	<!--new user==-->
	<section class="product-section">
		<div class="container">
			<form id="form1" name="form1" method="post" action="dashboard/insert.php">
		<table width="330" class="table">
<!--FIELD_1-->
			<tr style="visibility: hidden;">
				<td width="30">id</td>
				<td width="300">
					<label for="textfield"></label>
					<input type="text" name="id" id="id" class="form-control" ng-model="id"/>
				</td>
			</tr>
<!--FIELD_2-->
			<tr>
				<td>title</td>
				<td>
					<input type="text" name="title" id="title" class="form-control" ng-model="title"/>
				</td>
			</tr>
<!--FIELD_3-->
			<tr>
				<td>heading</td>
				<td>
					<input type="text" name="heading" id="heading" class="form-control" ng-model="heading" />
				</td>
			</tr>
<!--FIELD_4-->
			<tr>
				<td>category</td>
				<td>
					<textarea name="category" id="category" class="form-control" ng-model="category" ></textarea>
				</td>
			</tr>

<!--FIELD_6-->
			<tr>
				<td>description</td>
				<td>
					<textarea name="description" class="form-control" ng-model="description" id='description' style="margin-top: 30px;"></textarea>
					
				</td>
			</tr>
<!--FIELD_7-->
			
<!--FIELD_10-->
			<tr style="visibility: hidden;">
				<td>picture</td>
				<td>
				
					<input type="text" name="picture" id="picture" class="form-control" ng-model="picture" />
					
				</td>
			</tr>

									<!-- buttons -->
			<tr>
				<td></td>
				<td>
					<input type="button" name="button" id="button" value="Insert" class="btn btn-primary btn-lg" ng-click="add()" />

					<input type="button" name="button" id="button" value="Delete" class="btn btn-danger" ng-click="delete()" />

					<input type="button" name="button" id="button" value="Update" class="btn btn-info" ng-click="update()" />
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td colspan="2">
					<div id="outp" style="background-color: gray;"></div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div id="table" style="background-color: #0c0;"></div>
				</td>
			</tr>
		</table>
	</form>
		</div> 

	</section>
	
	<section class="product-show">
		<div class="container">
			<h1>Total  Post: {{npall.newspaper.length}} </h1>
		<table class="table table-striped">
			<tr>
				<th>id</th>		<th>title</th>		<th>heading</th>
				<th>category</th> <th>description</th>
				
						<th>picture</th>
			</tr>
			<tr ng-repeat="st in npall.newspaper" ng-click="show($index)">
				<td>{{$index+1}}</td>
				<!--<td>{{st.id}}</td>-->
				<td>{{st.title}}</td>
				<td>{{st.heading}}</td>
				<td>{{st.category}}</td>
				<td>

				<div ng-bind-html="to_trusted(st.description)"></div>
			</td>	
				
				<td>
					{{st.picture}}
				<br/>
					<!-- <input type="text" name="picture" id="picture" class="form-control" ng-model="picture" /> -->
					<img class='img-responsive' width='100px' height='100px' src='dashboard/uploads/{{st.id}}/{{st.picture}}'/><br><a class='btn-success' href='dashboard/uploadproducts.php?pid={{st.id}}'>
			   Change Picture</a>


				</td>
			</tr>
		</table>
		</div>
	</section>
		
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login Page</h4>
            </div>
            <div class="modal-body">
                <h3>Login</h3>
                <form class="form-signin" method="post">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
                    </div>
                    <button name="btn1" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign Up</button>
            </div>
        </div>
    </div>
</div>
	

<?php include_once('dashboard/footer.php'); ?>

