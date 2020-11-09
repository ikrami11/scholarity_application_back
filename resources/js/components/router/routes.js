import DashboardLayout from "@/layout/dashboard/DashboardLayout.vue";
// GeneralViews
import NotFound from "@/pages/NotFoundPage.vue";

// Admin pages
import Auth from "@/pages/Auth.vue";
import Accueil from "@/pages/Accueil.vue";
import Recherche from "@/pages/Recherche.vue";
import TableList from "@/pages/TableList.vue";

const routes = [
    {
        path: "/",
        component: DashboardLayout,
        redirect: "/dashboard",
        children: [
            {
                path: "dashboard",
                name: "Authentification",
                component: Auth
            },
            {
                path: "stats",
                name: "Administration _ Accueil",
                component: Accueil
            },

            {
                path: "icons",
                name: "Administration _ Rechercher Un Etudiant",
                component: Recherche
            },

            {
                path: "table-list",
                name: "Administration _ Permuter etudiants",
                component: TableList
            }
        ]
    },
    {
      path: "/",
        component: Auth,
        redirect: "/login",
        children: [
            {
                path: "login",
                name: "Authentification",
                component: Auth
            },
        ]
    },
  { path: "*", component: NotFound }
];

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes;
