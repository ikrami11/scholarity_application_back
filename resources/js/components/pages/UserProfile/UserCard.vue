<template>
  <card class="card" title="Permuter Etudiants">
    <div>
      <form @submit.prevent>



        <div class="row">

          <div class="col-md-4">

            <fg-input type="text"
                      label="Etudiant 1" 
                      placeholder="Entrez le matricule"
                      v-model="student.first">
            </fg-input>
          </div>
          <div class="col-md-2">

          </div>
          <div class="col-md-4">

            <fg-input type="text"
                      label="Etudiant 2"
                      placeholder="Entrez le matricule"
                      v-model="student.second">
            </fg-input>
          </div>
        </div>
       

        <div class="text-center">
          <p-button type="info"
                    round
                    @click.native.prevent="switchStudents">
           Change
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
      student: {
        switchStudents() { }
      }
    };
  },
  methods: {
    
  }
};
</script>
