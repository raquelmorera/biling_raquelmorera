require('./bootstrap');

(function () {
    var APP = {
        init: function () {
            this.addEvents();
        },

        addEvents: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('.btn-user-remove')) {
                    var idUserToRemove = target.getAttribute('data-user-id');
                    $.ajax({
                        url: '/deleteUser',
                        method: "POST",
                        data: {
                            id: idUserToRemove,
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {
                                alert('ocurrio un error');
                            }
                        }
                    });
                }


               
               

            });
        }
    
    }
    APP.init();
})();


(function () {
    var UpdateProducto = {
        init: function () {
            this.addEvents();
        },

        addEvents: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('.btnModificarProducto')) {
                    var idProductoUpdate = target.getAttribute('idProducto');
                    var detalleModificado = this.cacheElements.$inputDetalle.val();
                    $.ajax({
                        url: '/ModificarProducto',
                        method: "POST",
                        data: {
                            id: idProductoUpdate,
                            modificacion : detalleModificado
                        },
                        success: function(response){
                            console.log('response', response);
                            if(response === '200') {
                                location.reload();
                            } else {
                                alert('ocurrio un error');
                            }
                        }
                    });
                }


            }.bind(this));
               
        },
        cacheElements:{
            $inputDetalle:$('.modificacionProducto')
        }
    }
    UpdateProducto.init();
})();
        
            

           
        
    
    
    
