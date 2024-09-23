let routes= [];

import dashboard from "./vue-routes-dashboard";
import doctor from "./vue-routes-doctor";

routes = routes.concat(dashboard);
routes = routes.concat(doctor);

export default routes;
