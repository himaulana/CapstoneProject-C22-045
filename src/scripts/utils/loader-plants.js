import plants from '../data/plants.js';

const loaderPlants = async (req, res) => {
  const filteredPlant = await plants.slice(0, 10);
  const results = await res.json(filteredPlant);
  console.log(results);
};

export default loaderPlants;
