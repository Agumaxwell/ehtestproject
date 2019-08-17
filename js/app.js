	var app = new Vue({
		el: '#app',
		data: {
			showAddModal: false,
			showEditModal: false,
			showDeleteModal: false,
			errorMessage: "",
			successMessage: "",
			guests:[],
			newGuest:{name:'', phone:'', email:'', address:'', comment:''},
			clickGuest: {}
	},

	mounted: function(){
			this.getAllGuests();
		},

		methods:{
			getAllGuests: function(){
				axios.get('api.php')
					.then(function(response){
						//console.log(response);
						if(response.data.error){
							app.errorMessage = response.data.message;
						}
						else{
							app.guests = response.data.guests;
						}
					});
			},

			saveGuest: function(){
				//console.log(app.newGuest);
				var memForm = app.toFormData(app.newGuest);
				axios.post('api.php?req=create', memForm)
					.then(function(response){
						//console.log(response);
						app.newGuest = {name:'', phone:'', email:'', address:'', comment:''};
						if(response.data.error){
							app.errorMessage = response.data.message;
						}
						else{
							app.successMessage = response.data.message
							app.getAllGuests();
						}
					});
			},


			updateGuest(){
				var memForm = app.toFormData(app.clickGuest);
				axios.post('api.php?req=update', memForm)
					.then(function(response){
						//console.log(response);
						app.clickGuest = {};
						if(response.data.error){
							app.errorMessage = response.data.message;
						}
						else{
							app.successMessage = response.data.message
							app.getAllGuests();
						}
					});
			},

			deleteGuest(){
				var memForm = app.toFormData(app.clickGuest);
				axios.post('api.php?req=delete', memForm)
					.then(function(response){
						//console.log(response);
						app.clickGuest = {};
						if(response.data.error){
							app.errorMessage = response.data.message;
						}
						else{
							app.successMessage = response.data.message
							app.getAllGuests();
						}
					});
			},
	
			selectGuest(guest){
				app.clickGuest = guest;
			},

			toFormData: function(obj){
				var form_data = new FormData();
				for(var key in obj){
					form_data.append(key, obj[key]);
				}
				return form_data;
			},

			clearMessage: function(){
				app.errorMessage = '';
				app.successMessage = '';
			}

		}
	})