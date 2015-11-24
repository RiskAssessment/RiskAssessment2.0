var Service = {
    
    remove: function(id, callback) {
		$.ajax({
			type: 'DELETE',
			url: 'api/service/' + id,
			success: function(response) {
				console.log('Deletado');
				callback(true);
			},
			error: function(jqXHR) {
				console.log('Error to delete' );
				callback(false);
			}
		});
	},
}