require('./bootstrap');

//Eliminar Usuario

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

//Modificar Usuario

(function () {
    var ModificarUser = {
      init2: function init2() {
        this.addEvents2();
      },
      addEvents2: function addEvents2() {
        document.addEventListener('click', function (event) {
          var target = event.target;
  
          if (target.matches('#btn-update-user')) {
            var idUserModificar = target.getAttribute('data-user-id');
            var txtNameUser = this.cacheElementsUserUpdate.$inpNameUser.val();
            var txtEmailUser = this.cacheElementsUserUpdate.$inpEmail.val();
            $.ajax({
              url: '/updateUser',
              method: "POST",
              data: {
                id: idUserModificar,
                txtNombreUser: txtNameUser,
                txtEmailUser: txtEmailUser
              },
              success: function success(response) {
                console.log('response', response);
  
                if (response === '200') {
                  location.reload();
                } else {
                  alert('Problema en la eliminación de usuario');
                }
              }
            });
          }
        }.bind(this));
      },
      cacheElementsUserUpdate: {
        $inpNameUser: $('#userUpdateName'),
        $inpEmail: $('#userUpdateEmail')
      }
    };
    ModificarUser.init2();

})();

//Modificar Producto 

(function () {
    var UpdateProducto = {
        init3: function () {
            this.addEvents3();
        },

        addEvents3: function () {
            document.addEventListener('click', function (event) {
                let target = event.target;
                if (target.matches('#btnModificarProducto')) {
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
            $inputDetalle:$('#modificacionProducto')
        }
    }
    UpdateProducto.init3();
})();

//Eliminar Producto

(function () {
    var DeleteProducto = {
      init4: function init3() {
        this.addEvents4();
      },
      addEvents4: function addEvents4() {
        document.addEventListener('click', function (event) {
          var target = event.target;
  
          if (target.matches('#btnEliminarProducto')) {
            var idProductoEliminar = target.getAttribute('Eliminaridproductoinfo');
            $.ajax({
              url: '/EliminarProducto',
              method: "POST",
              data: {
                id: idProductoEliminar
              },
              success: function success(response) {
                console.log('response', response);
  
                if (response === '200') {
                  location.reload();
                } else {
                  alert('Problema con la eliminación de usuario');
                }
              }
            });
          }
        });
      }
    };
    DeleteProducto.init4();
        
})();        

//Eliminar Facturas

(function () {
    var DeleteFactura = {
      init5: function init5() {
        this.addEvents5();
      },
      addEvents5: function addEvents5() {
        document.addEventListener('click', function (event) {
          var target = event.target;
  
          if (target.matches('.btnEliminarFacturas')) {
            var idFacturaEliminar = target.getAttribute('Eliminaridfactura');
            $.ajax({
              url: '/EliminarFactura',
              method: "POST",
              data: {
                IdFacturaModificar: idFacturaEliminar
              },
              success: function success(response) {
                if (response === '200') {
                  location.reload();
                } else {
                  alert('No se puede Eliminar Factura');
                }
              }
            });
          }
        });
      }
    };
    DeleteFactura.init5();
  })();


  //Modificar Factura
  
  
  (function () {
    var UpdateFactura = {
      init6: function init6() {
        this.addEvents6();
      },
      addEvents6: function addEvents6() {
        document.addEventListener('click', function (event) {
          var target = event.target;
  
          if (target.matches('#btnModificarFacturas')) {
            var idFacturaModificar = target.getAttribute('Modificaridfactura');
            var txtDetalleFacturaModificar = this.cacheElementsFacturasModificar.$inpFacturaDetalleModificar.val();
            $.ajax({
              url: '/ModificarFactura',
              method: 'POST',
              data: {
                IdFacturaModificar: idFacturaModificar,
                DetalleFacturaModificar: txtDetalleFacturaModificar
              },
              success: function success(response) {
                console.log('response', response);
  
                if (response === '200') {
                  location.reload();
                } else {
                  alert('Se dio un error y no se pudo realizar la actualización');
                }
              }
            });
          }
        }.bind(this));
      },
      cacheElementsFacturasModificar: {
        $inpFacturaDetalleModificar: $('#facturaModificarDetalle')
      }
    };
    UpdateFactura.init6();
  })();

