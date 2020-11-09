<template>
  <card class="card" title="Authentification">
    <div>
      <form @submit.prevent>



        <div class="row">

          <div class="col-md-6">

            <fg-input type="text"
                      label="Login" 
                      placeholder="Enter Your Login"
                      v-model="user.username">
            </fg-input>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6">

            <fg-input type="password"
                      label="Password"
                      placeholder="Enter Your Password"
                      v-model="user.password">
            </fg-input>
          </div>
        </div>
       

        <div class="text-center">
          <p-button type="info"
                    round
                    @click.native.prevent="updateProfile">
           Log In
          </p-button>
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
  </card>
</template>
<script>
export default {
  data() {
    return {
      user: {
       
      }
    };
  },
  methods: {
    
  }
};
</script>
