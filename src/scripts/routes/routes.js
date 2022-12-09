import express from 'express';
import engine from 'ejs';
import path from 'path';
import { fileURLToPath } from 'url';

const app = express();
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// path location template
app.engine('html', engine.__express);
app.set('view engine', 'html');
app.set('views', path.join(__dirname, '../../templates'));

// path location css, images
app.use('/assets', express.static(__dirname + '/../../public'));

// Application Middleware
app.use((req, res, next) => {
  console.log('Time: ', Date.now());
  console.log(__dirname);
  next();
});

// routing
app.get('/', (req, res) => {
  res.render('index');
});
app.get('/explore', (req, res) => {
  res.render('explore');
});
app.get('/detail:id', (req, res) => {
  res.render('detail-tanaman');
});
app.get('/article:id', (req, res) => {
  res.render('detail-artikel');
});
app.get('/about', (req, res) => {
  res.render('about');
});
app.get('/profile', (req, res) => {
  res.render('profile');
});
app.get('/service', (req, res) => {
  res.status(404);
});
app.get('/login', (req, res) => {
  res.render('login');
});

export default app;
