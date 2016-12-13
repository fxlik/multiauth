Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");


new Vue({

	el: "#manage-vue",

	data: {
		item: [],
		pagination: {
			total:0,
			per_page: 2,
			from:1,
			to: 0,
			current_page:1
		},
		offset: 4,
		formErrors:{},
		formErrorsUpdate:{},
		newItem : {'region':'','access_code':''},
		fillItem : {'region':'','access_code':'','id':''}
	},

	computed : {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to) {
				return [];
			}
			var from = this.pagination.current_page - this.offset;
			if (from < 1) {
				from = 1;
			}
			var to = from + (this.offset * 2);
			if (to >= this.pagination.last_page) {
				to = this.pagination.last_page;
			}
			var pagesArray =[];
			while (from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},

	ready : function() {
		this.getVueItems(this.pagination.current_page);
	}, 

	methods : {

		getVueItems: function(page){
			this.$http.get('/region?page='+page).then((response) => {
				this.$set('items', response.data.data.data);
				this.$set('pagination', response.data.pagination);
			});
		},

		createItem: function(){
			var input = this.newItem;
			this.$http.post('/region',input).then((response) => {
				this.changePage(this.pagination.current_page);
					this.newItem ={'region':'','access_code':''};
					$("#create-item").modal('hide');
					toastr.success('Daerah berhasil ditambah!', 'Success Alert', {timeOut: 5000});
				}, (response) => {
					this.formErrors = response.data;
			});
		},

		deleteItem: function(item) {
			this.$http.delete('/region'+item.id).then((response) => {
				this.changePage(this.pagination.current_page);
				toastr.success('Data berhasil dihapus!', 'Success Alert', {timeOut: 5000});
			});
		},

		editItem: function(item) {
			this.fillItem.region = item.region;
			this.fillItem.id = item.id;
			this.fillItem.access_code = item.access_code;
			$("#edit-item").modal('show');
		},

		updateItem: function(id){
			var input = this.fillItem;
			this.$http.put('region',+id,input).then((response) => {
				this.changePage(this.pagination.current_page);
				this.fillItem = {'region':'','access_code':'','id':''};
				$("#edit-item").modal('hide');
				toastr.success('Data berhasil diedit.', 'Success Alert', {timeOut: 5000});
			}, (response) => {
				this.formErrorsUpdate = response.data;
			});
		},

		changePage: function (page) {
			this.pagination.current_page = page;
			this.getVueItems(page);
		}
	}

});