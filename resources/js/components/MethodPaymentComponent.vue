<template>
   <div class="container mt-n10">
        <div class="card">
             <div class="card-body">
                 <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required v-model="name">
                           <div class="alert alert-danger" role="alert" v-if="showError === true">
                            El atributo es requerido
                            </div> 
                      </div>
                       
                    <div class="form-group">
                        <label>Numero de envio</label>
                        <input type="number" name="consignment_number" class="form-control" required v-model="consignment_number">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-10">
                            <label>Fecha de la Orden</label>
                            <select
                            v-model="orderSelected" class="form-control"  @change="addOrder()">
                                <option value="">Seleccione...</option>
                                <option v-for="(order, index) in orders" :value="order">
                                {{ order.dateOrder }}
                                </option>
                            </select>
                        </div>
                    </div>
                  
                  <div class="form-group">
                        <label>Statuso</label>
                        <input type="text" name="status" class="form-control" required v-model="status">
                    </div>

                    <div class="form-group row">
                         <div class="col-md-6 text-center row" v-for="(order, index) in arrOrders">
                              <div class="col-md-8 mt-2">
                                  <span>{{order.dateOrder}}</span>
                              </div>
                               <div class="col-md-4 mt-2">
                                    <button class="btn btn-danger" @click="removeOrder(index)">-</button>
                               </div>
                         </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary float-right mt-5"
                            @click="submitForm()">Guardar</button>
                    </div>




                 </div>
             </div>
        </div>
    
   </div>
</template>

<script>
export default {
  data: function () {
    return {
      name: "",
      status: "",
      consignment_number: "",
      orderSelected: "",
      status: "",
      arrOrders: [],
      showError: false,
    };
  },
  props: {
    url: {
      type: String,
      default: "",
    },
    orders: {
      type: Array,
      default: [],
    },
  },
  methods: {
    addOrder: function () {
      if (this.orderSelected !== "") {
        if (typeof this.existOrder(this.orderSelected.id) === "undefined") {
          this.arrOrders.push(this.orderSelected);
          this.orderSelected = "";
        } else {
          alert("Esta Orden Ya se encuentra seleccionada");
        }
      } else {
        alert("Debe seleccionar minimo una orden");
      }
    },
    existOrder: function (orderId) {
      let existOrder = this.arrOrders.find(function (order) {
        return order.id === orderId;
      });
      return existOrder;
    },
    removeOrder: function (index) {
      this.arrOrders.splice(index, 1);
    },
    submitForm: function () {
      if (
        this.name != "" &&
        this.status != "" &&
        this.consignment_number != "" &&
        this.status != "" &&
        this.arrOrders.length > 0
        
      ) {
        let data = {
          name: this.name,
          status: this.status,
          consignment_number: this.consignment_number,
          arrOrders: this.arrOrders,
        };

        axios
          .post(this.url, data)
          .then((response) => {
            if (response.data.success === true) {
              alert(response.data.message);
              location.href = this.url;
            } else alert(response.data.message);
          })
          .catch((error) => {
            console.log(error);
            alert("Error Insertando el metodo de pago");
          });
      } else {
        this.showError = true;
      }
    },
  },
};
</script>