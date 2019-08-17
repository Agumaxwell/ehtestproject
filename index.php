<!DOCTYPE html>
<html>
	<head>
		<title>E Health4everyone | Guest Book</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/fontawesome.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/fontawesome.css">

		<style>
		.table >td:hover{
			 background-color:red!important; 
		}
		</style>
	</head>
	<body>
	<div  id="app">
	<div class="container-fluid" >

			<div class="row text-white font-weight-bolder ">
				<div class="col-sm-12 bg-info" id="nav">
					<div class="float-left bg-white col-sm-1">
						<img class="img img-fluid" src="img/elogo.png" alt="" srcset="">
					</div>
					<div class="float-right text-right text-white col-sm-6">
						<a class="text-white" href="mailto:ehealth4everyone@gmail.com"><i class="fas fa-envelope"></i> ehealth4everyone@gmail.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;09021720570
					</div>
				</div>
			</div>
			<br>
		
				<div class="row text-info font-weight-bolder">

							<div class="col-sm-10">
									<h2 class="bg-white float-left"><i class="fas fa-book-open "></i>
								 &nbsp;<h4 class="bg-white" style="padding-top:6px;">GUEST BOOK</h4></h2>
						</div>
						<div class="col-sm-2 float-right">
									<h4 class="bg-white float-right" style="padding-top:6px;">
										00.00.00
									</h4>
						</div>
					
				</div>
				<hr class="border-info">
			<div class="row text-primary font-weight-bolder">
			
				<div class="col-sm-4 ">



							<div class="myModal" v-if="showEditModal">
								<div class="modalContainer">
					
					
								<div class="modalBody">
									<div class="input-group col-sm-12">
										<div class="col-sm-12 float-left alert alert-info">Edit Guest Information <button class="btn bg-danger float-right" @click="showEditModal = false">&times;</button></div>
										
										
									</div>
									<div class="input-group col-sm-12">
										<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-user-tie"></i></span>
										<input v-model="clickGuest.name"   type="text" class="form-control border-left-0  bg-transparent border-info" required>
									</div>
									<br>
									<div class="input-group col-sm-12">
										<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-phone"></i></span>
										<input v-model="clickGuest.phone"  class="form-control border-left-0  bg-transparent border-info" required>
									</div>
									<br>
									<div class="input-group col-sm-12">
										<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-envelope"></i></span>
										<input v-model="clickGuest.email"  class="form-control border-left-0 bg-transparent border-info" required>
									</div>
									<br>
									<div class="input-group col-sm-12">
										<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-home"></i></span>
										<textarea v-model="clickGuest.address"  class="form-control border-left-0 bg-transparent border-info"   required></textarea>
									</div>
									<br>
									<div class="input-group col-sm-12">
										<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-comment"></i></span>
										<textarea v-model="clickGuest.comment" id="email" class="form-control border-left-0 bg-transparent border-info"   required></textarea>
									</div>
									<br>
									<div class="input-group col-sm-3 float-right">
									 <button class="btn btn-info float-right" @click="showEditModal = false; updateGuest();">Save &nbsp<span class="fa fa-user-edit"></span> </button>
									 <br>
									</div>
								
									
									
					</div>
					
				</div>
			</div>
		






				
						<div class="input-group col-sm-12">
							<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-user-tie"></i></span>
							<input v-model="newGuest.name"   type="text" class="form-control border-left-0  bg-transparent border-info" required>
						</div>
						<br>
						<div class="input-group col-sm-12">
							<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-phone"></i></span>
							<input v-model="newGuest.phone"  class="form-control border-left-0  bg-transparent border-info" required>
						</div>
						<br>
						<div class="input-group col-sm-12">
							<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-envelope"></i></span>
							<input v-model="newGuest.email"  class="form-control border-left-0 bg-transparent border-info" required>
						</div>
						<br>
						<div class="input-group col-sm-12">
							<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-home"></i></span>
							<textarea v-model="newGuest.address"  class="form-control border-left-0 bg-transparent border-info"   required></textarea>
						</div>
						<br>
						<div class="input-group col-sm-12">
							<span class="input-group-text border-info bg-white text-info border-right-0 "><i class="fa fa-comment"></i></span>
							<textarea v-model="newGuest.comment" id="email" class="form-control border-left-0 bg-transparent border-info"   required></textarea>
						</div>
						<br>
						
						<div class="input-group col-sm-3 float-right">
							<button class="btn bg-info text-white float-right" @click="saveGuest();"> Save <span class="fa fa-user-plus"></span> </button>
						</div>
						<br><br>
				</div>
				<!-- <div class="col-sm-4 ">
					
						<div class="col-sm-12 pads">
							<div class="col-sm-12  pads"style="padding-left:0px;">
								<h6 class="text-info"><i class="fas fa-user-lock"></i> Current Guest</h6>
							</div>
						
								<p class="text-success">{{name}}</p>
								<p class="text-success">{{phone}}</p>
								<p class="text-success">{{email}}</p>
								<p class="text-success text-justify">{{address}}</p>
								<p class="text-success text-justify">"{{comment}}"</p>
								
						</div>

						
					
				</div> -->


				<div class="col-sm-8">
							<div class="alert alert-danger text-center" v-if="errorMessage">
								<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
								<span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
							</div>
							<div class="alert alert-success text-center" v-if="successMessage">
								<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
								<span class="glyphicon glyphicon-alert"></span> {{ successMessage }}
							</div>
										<!-- <div class="col-sm-4 float-left pads"style="padding-left:0px;">
											<h4 class="text-info funcico"><i class="fas fa-user-lock"></i> Guest</h4>
										</div>

										<div class="col-sm-6  float-right pads"style="padding-left:0px;">
											<h6 class="text-info float-right funcico" ><i class="fas fa-trash"></i> </h6>
											<h6 class="text-info float-right funcico"><i class="fas fa-user-edit"></i> </h6>
											
										</div>
							 -->
								<table class="table table-white table-borderless  table-hover table-responsive" width="100%">
									<thead class="bg-info text-white" style="border-radius:6px;">
										<th></th>
										<th></th>
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Address</th>
									</thead>
									<tbody class="tbody-white font-weight-normal">
										<tr v-for="guest in guests">

											<td>  
												<button @click="deleteGuest();" class=" btn text-danger bg-white"><i class="fas fa-trash"></i></button>
											</td>
											<td>	
												<button  @click="showEditModal = true; selectGuest(guest);" class=" btn text-info bg-white"><i class="fas fa-user-edit"></i></button>
											</td>
											
											<td>{{guest.name}}</td>
											<td>{{guest.phone}}</td>
											<td>{{guest.email}}</td>
											<td class="text-justify">{{guest.address}}</td>
											
										</tr>
									</tbody>
									
								</table>
								
								
						</div>

						
					
				</div>
			
		</div>
			

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" v-if="showDeleteModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
					<button type="button"  @click="showDeleteModal = false">&times;</button> class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<h5 class="text-center">Are you sure you want to Delete</h5>
				<h2 class="text-center">{{clickGuest.name}}?</h2>
			</div>
			<div class="modal-footer">
				<button type="button" @click="showDeleteModal = false" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<!-- edit -->
<!-- Edit Modal -->

<!-- Delete Modal -->
<!-- <div class="modal myModal" v-if="showDeleteModal">
	<div class="modalContainer">
		<div class="deleteHeader">
			<span class="headerTitle">Delete Guest</span>
			<button class="closeDelBtn pull-right" @click="showDeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<h5 class="text-center">Are you sure you want to Delete</h5>
			<h2 class="text-center">{{clickGuest.name}}?</h2>
		</div>
		<hr>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" @click="showDeleteModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger" @click="showDeleteModal = false; deleteGuest(); "><span class="glyphicon glyphicon-trash"></span> Yes</button>
			</div>
		</div>
	</div>
</div> -->




		
		
    </div>	
	
		

		
			
		

		<!-- script files -->
		<script src="js/vue.js"></script>
		<script src="js/vue.min.js"></script>
		<script src="js/axios.js"></script>
		<script src="js/app.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.4.1.min.js"></script>
	</body>
</html>