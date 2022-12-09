import express from 'express';
import routes from './src/scripts/routes/routes.js';

const app = express();
const port = 3000;

app.use(routes);

app.listen(port, () => {
  console.log(`Example app listening on port http://localhost:${port}`);
});
