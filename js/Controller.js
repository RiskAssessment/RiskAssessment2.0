var Controller = {
    
    	delete: function(imgDelete) {
		var 
		    Name = imgDelete.dataset.guestname,
			Id = imgDelete.dataset.guestid;
		
		if(confirm('Voece vai deletar  ' + Name + '?')) {
			Service.remove(Id, function(isDeleted) {
				if(isDeleted) {
					$(imgDelete).parents('dl').remove();
				}
			})
		}
	},
	
		createImage: function(imageLocation) {
		var img = document.createElement('img');
		img.src = imageLocation;
		return img;
	},
	
		createDelete: function(id) {
		var imgDelete = Controller.createImage('images/delete.jpeg');
		
		imgDelete.setAttribute('id', id);
		imgDelete.setAttribute('name',name);
		
		imgDelete.addEventListener('click', function() {
		        Controller.delete(this);
		});
		
		return imgDelete;
	}
};