import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'


const appName = window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";
    

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .mixin({methods:{
        
        // Ziggy Name Route
        route,

        // Spatie Permission
        hasAnyPermission: function (permission) {

          let allPermissions = this.$page.props.auth.permissions;

          let hasPermissions = false;
          permissions.forEach(function(item){
            if(allPermissions[item]) hasPermission = true;
          });

          return hasPermission;
        }
      
      
      
      }})
      .use(plugin)
      .mount(el)
  },
})

InertiaProgress.init()

