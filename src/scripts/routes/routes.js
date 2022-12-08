import { Router } from 'express';
import loaderPlants from '../utils/loader-plants.js';

const router = Router();

router.get('/', (req, res) => {
  loaderPlants();
});

export default router;
