import * as handler from '../utils/handler.js';

const routes = [
  {
    method: 'GET',
    path: '/',
    handler: handler.homePage,
  },
  {
    method: 'GET',
    path: '/explore',
    handler: handler.explorePage,
  },
  {
    method: 'GET',
    path: '/service',
    handler: handler.servicePage,
  },
  {
    method: 'POST',
    path: '/signIn',
    handler: (request, h) => {
      const { fullName, username, password } = request.payload;
      return `Welcome ${fullName}`;
    },
  },
  {
    method: '*',
    path: '/{any*}',
    handler: (request, h) => {
      return 'Halaman tidak ditemukan';
    },
  },
];

export default routes;
