<template>
  <div class="wrapper">
    <side-bar>
      <template slot="links">
       <!-- <sidebar-link to="/dashboard" name="Authentification" icon="ti-lock" />-->
        <sidebar-link to="/stats" name="Accueil" icon="ti-tablet" />
        <sidebar-link to="/icons" name="Rechercher Etudiant" icon="ti-user" />
        <sidebar-link to="/table-list" name="Permuter Etudiants" icon="ti-arrows-horizontal" />

      </template>
     
        
        
    </side-bar>
    <div class="main-panel">
      <top-navbar></top-navbar>

      <dashboard-content @click.native="toggleSidebar">

      </dashboard-content>

      <content-footer></content-footer>
    </div>
  </div>
</template>
<style lang="scss">
</style>
<script>
import TopNavbar from "./TopNavbar.vue";

import DashboardContent from "./Content.vue";

export default {
  components: {
    TopNavbar,
    
    DashboardContent,
    
  },
  methods: {
    toggleSidebar() {
      if (this.$sidebar.showSidebar) {
        this.$sidebar.displaySidebar(false);
      }
    }
  }
};
</script>
