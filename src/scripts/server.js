import Hapi from '@hapi/hapi';
import routes from './routes/routes.js';

const init = async () => {
  const server = Hapi.server({
    port: 5000,
    host: 'localhost',
  });

  server.route(routes);

  await server.start();
  console.log(`Server running in ${server.info.uri}`);
};

init();
