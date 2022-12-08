import express from 'express';
import path from 'path';
import { fileURLToPath } from 'url';
import routes from './src/scripts/routes/routes.js';

const app = express();
const port = 3000;

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

app.set('view engine', 'ejs');
// app.set('views', path.join(__dirname, 'views'));

app.use(routes);

app.listen(port, () => {
  console.log(`Example app listening on port http://localhost:${port}`);
});
